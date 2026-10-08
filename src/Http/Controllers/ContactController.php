<?php

namespace App\Http\Controllers;

use App\Mail\ContactInquiry;
use Phaseolies\Http\Request;
use Phaseolies\Support\Facades\Log;
use Phaseolies\Support\Facades\Mail;
use Phaseolies\Support\Router\Attributes\Route;

class ContactController extends Controller
{
    private const INTERESTS = [
        'Source licence',
        'Subscription',
        'White-label',
        'Live demo',
        'Something else'
    ];

    #[Route(
        uri: '/contact',
        methods: ['POST'],
        name: 'contact.send',
        rateLimit: 5,
        rateLimitDecay: 10
    )]
    public function send(Request $request)
    {
        if (trim((string) $request->input('contact_hp', '')) !== '') {
            Log::error('Contact form: honeypot field was filled, message dropped (ip ' . $request->ip() . ').');

            return response()->json(['ok' => true, 'message' => 'Thanks, your message is on its way.']);
        }

        $data = [
            'name' => $this->clean($request->input('name')),
            'email' => $this->clean($request->input('email')),
            'company' => $this->clean($request->input('company')),
            'interest' => $this->clean($request->input('interest')),
            'message' => trim(str_replace("\r\n", "\n", (string) $request->input('message', ''))),
        ];

        $errors = [];
        if ($data['name'] === '' || mb_strlen($data['name']) > 100) {
            $errors['name'] = 'Tell us your name (up to 100 characters).';
        }
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL) || mb_strlen($data['email']) > 190) {
            $errors['email'] = 'Enter an email address we can reply to.';
        }
        if (mb_strlen($data['company']) > 120) {
            $errors['company'] = 'Keep the company name under 120 characters.';
        }
        if (!in_array($data['interest'], self::INTERESTS, true)) {
            $errors['interest'] = 'Pick what you are interested in.';
        }
        if (mb_strlen($data['message']) < 10 || mb_strlen($data['message']) > 4000) {
            $errors['message'] = 'Write between 10 and 4000 characters.';
        }

        if ($errors !== []) {
            return response()->json(['ok' => false, 'message' => 'Please fix the highlighted fields.', 'errors' => $errors], 422);
        }

        try {
            Mail::to((string) env('CONTACT_TO_ADDRESS', 'contact@auctionly.cc'), 'Auctionly')
                ->send(new ContactInquiry($data, (string) $request->ip()));
        } catch (\Throwable $e) {
            return response()->json(['ok' => false, 'message' => 'We could not send your message. Please try again in a minute.'], 500);
        }

        return response()->json(['ok' => true, 'message' => 'Thanks, your message is on its way. We will reply by email.']);
    }

    private function clean(mixed $value): string
    {
        return trim((string) preg_replace('/[\x00-\x1F\x7F]+/u', ' ', (string) $value));
    }
}
