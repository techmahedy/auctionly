import '../css/app.css';
import './bootstrap';

document.documentElement.dataset.clientReady = 'true';

// Copy buttons on code blocks.
document.querySelectorAll<HTMLButtonElement>('button.copy[data-copy]').forEach((button) => {
    button.addEventListener('click', () => {
        const text = button.dataset.copy ?? '';
        const done = () => {
            button.textContent = 'copied';
            setTimeout(() => { button.textContent = 'copy'; }, 1500);
        };
        navigator.clipboard.writeText(text).then(done, () => { button.textContent = 'select text'; });
    });
});

// Contact modal: opens from any [data-contact] button and posts the form with fetch.
const dialog = document.querySelector<HTMLDialogElement>('#contact-dialog');
const form = document.querySelector<HTMLFormElement>('#contact-form');

if (dialog && form) {
    const submit = form.querySelector<HTMLButtonElement>('#contact-submit')!;
    const alertBox = form.querySelector<HTMLElement>('#contact-alert')!;
    const success = dialog.querySelector<HTMLElement>('#contact-success')!;
    const successText = dialog.querySelector<HTMLElement>('#contact-success-text')!;
    const interest = form.querySelector<HTMLSelectElement>('#cf-interest')!;

    const setErrors = (errors: Record<string, string>) => {
        form.querySelectorAll<HTMLElement>('.field').forEach((field) => {
            const name = field.querySelector<HTMLElement>('[name]')?.getAttribute('name') ?? '';
            const message = errors[name] ?? '';
            field.classList.toggle('invalid', message !== '');
            const slot = field.querySelector<HTMLElement>('.field-error');
            if (slot) slot.textContent = message;
            field.querySelector('[name]')?.setAttribute('aria-invalid', message !== '' ? 'true' : 'false');
        });
    };
    const showAlert = (message: string) => { alertBox.textContent = message; alertBox.hidden = message === ''; };
    const setLoading = (loading: boolean) => {
        submit.dataset.loading = String(loading);
        submit.disabled = loading;
        submit.setAttribute('aria-busy', String(loading));
    };
    let inflight: AbortController | null = null;
    // Back to the initial state: empty fields, no errors, form visible, no pending request.
    const reset = () => {
        inflight?.abort();
        inflight = null;
        form.reset();
        setErrors({});
        showAlert('');
        setLoading(false);
        form.hidden = false;
        success.hidden = true;
    };

    document.querySelectorAll<HTMLElement>('[data-contact]').forEach((trigger) => {
        trigger.addEventListener('click', () => {
            const wanted = trigger.dataset.contact ?? '';
            if (Array.from(interest.options).some((o) => o.value === wanted)) interest.value = wanted;
            dialog.showModal();
            form.querySelector<HTMLInputElement>('#cf-name')?.focus();
        });
    });

    dialog.querySelectorAll('[data-contact-close]').forEach((b) => b.addEventListener('click', () => dialog.close()));
    dialog.addEventListener('click', (event) => { if (event.target === dialog) dialog.close(); });
    // 'close' fires for every way out: the buttons, Escape and a click on the backdrop.
    dialog.addEventListener('close', reset);

    form.addEventListener('submit', async (event) => {
        event.preventDefault();
        if (submit.disabled) return;
        showAlert('');
        setErrors({});
        setLoading(true);
        inflight = new AbortController();
        const { signal } = inflight;

        try {
            const response = await fetch('/contact', {
                method: 'POST',
                signal,
                headers: { Accept: 'application/json', ...(window.__DOPPAR_FRONTEND__?.headers ?? {}) },
                body: new FormData(form),
            });
            const payload = await response.json().catch(() => ({}));

            if (response.ok && payload.ok) {
                successText.textContent = payload.message ?? successText.textContent;
                form.reset();
                form.hidden = true;
                success.hidden = false;
                success.focus();
            } else if (response.status === 422 && payload.errors) {
                setErrors(payload.errors);
                showAlert(payload.message ?? 'Please fix the highlighted fields.');
                form.querySelector<HTMLElement>('.field.invalid [name]')?.focus();
            } else if (response.status === 429) {
                showAlert('Too many messages from this address. Please wait a few minutes and try again.');
            } else {
                showAlert(payload.message ?? 'We could not send your message. Please try again in a minute.');
            }
        } catch {
            if (!signal.aborted) showAlert('Network error. Check your connection and try again.');
        } finally {
            if (!signal.aborted) setLoading(false);
        }
    });
}
