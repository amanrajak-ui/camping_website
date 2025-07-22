document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('form');
  form?.addEventListener('submit', e => {
    const pass = form.querySelector('input[name=password]');
    const pass2 = form.querySelector('input[name=confirm_password]');
    if (pass2 && pass?.value !== pass2.value) {
      e.preventDefault();
      alert('Passwords do not match.');
    }
  });
});
