/**
 * Russian phone mask: +7 (XXX) XXX-XX-XX
 * Usage: initPhoneMask(inputElement)
 */
function initPhoneMask(input) {
  function format(value) {
    var digits = value.replace(/\D/g, '');

    // Normalize: if starts with 8 or 7, treat as country code
    if (digits.length > 0 && (digits[0] === '8' || digits[0] === '7')) {
      digits = digits.substring(1);
    }

    // Cap at 10 digits (without country code)
    digits = digits.substring(0, 10);

    var result = '+7';
    if (digits.length > 0) result += ' (' + digits.substring(0, 3);
    if (digits.length >= 3) result += ') ';
    if (digits.length > 3) result += digits.substring(3, 6);
    if (digits.length > 6) result += '-' + digits.substring(6, 8);
    if (digits.length > 8) result += '-' + digits.substring(8, 10);

    return result;
  }

  input.addEventListener('focus', function () {
    if (!input.value) {
      input.value = '+7 ';
      setTimeout(function () { input.setSelectionRange(3, 3); }, 0);
    }
  });

  input.addEventListener('input', function () {
    var pos = input.selectionStart;
    var before = input.value;
    var formatted = format(before);
    input.value = formatted;

    // Adjust cursor position
    var diff = formatted.length - before.length;
    var newPos = pos + diff;
    if (newPos < 3) newPos = 3; // after "+7 "
    input.setSelectionRange(newPos, newPos);
  });

  input.addEventListener('keydown', function (e) {
    // Allow backspace to clear the whole field if only "+7" remains
    if (e.key === 'Backspace' && input.value === '+7') {
      e.preventDefault();
      input.value = '';
    }
  });

  input.addEventListener('blur', function () {
    if (input.value === '+7' || input.value === '+7 (') {
      input.value = '';
    }
  });

  input.addEventListener('paste', function (e) {
    e.preventDefault();
    var paste = (e.clipboardData || window.clipboardData).getData('text');
    input.value = format(paste);
  });
}
