<?php

namespace App\Mail;

use Phaseolies\Support\Mail\Mailable;

class ContactInquiry extends Mailable
{
    /**
     * @param array{name: string, email: string, company: string, interest: string, message: string} $data
     */
    public function __construct(array $data, string $ip)
    {
        $e = static fn (string $v): string => htmlspecialchars($v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        $company = $data['company'] !== '' ? $data['company'] : 'not given';

        $this->subject = sprintf('[Auctionly] %s: %s', $data['interest'], $data['name']);
        $this->replyTo($data['email'], $data['name']);
        $this->tag('contact');

        $this->text(implode("\n", [
            'New enquiry from the Auctionly homepage',
            '',
            'Name:     ' . $data['name'],
            'Email:    ' . $data['email'],
            'Company:  ' . $company,
            'Interest: ' . $data['interest'],
            '',
            $data['message'],
            '',
            '--',
            'Sent from IP ' . $ip . '. Reply to this email to answer ' . $data['name'] . '.',
        ]));

        $this->html(
            '<div style="font-family:Arial,Helvetica,sans-serif;color:#0a2540;max-width:560px">'
            . '<h2 style="margin:0 0 16px;font-size:20px">New enquiry from the Auctionly homepage</h2>'
            . '<table style="border-collapse:collapse;font-size:14px;width:100%">'
            . '<tr><td style="padding:6px 12px 6px 0;color:#66758b">Name</td><td>' . $e($data['name']) . '</td></tr>'
            . '<tr><td style="padding:6px 12px 6px 0;color:#66758b">Email</td><td><a href="mailto:' . $e($data['email']) . '">' . $e($data['email']) . '</a></td></tr>'
            . '<tr><td style="padding:6px 12px 6px 0;color:#66758b">Company</td><td>' . $e($company) . '</td></tr>'
            . '<tr><td style="padding:6px 12px 6px 0;color:#66758b">Interest</td><td>' . $e($data['interest']) . '</td></tr>'
            . '</table>'
            . '<div style="margin-top:18px;padding:16px;background:#f8f9fb;border-left:3px solid #25c78a;white-space:pre-wrap;font-size:14px;line-height:1.6">' . $e($data['message']) . '</div>'
            . '<p style="margin-top:18px;font-size:12px;color:#66758b">Sent from IP ' . $e($ip) . '. Reply to this email to answer ' . $e($data['name']) . '.</p>'
            . '</div>'
        );
    }
}
