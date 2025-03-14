var isIE = !!window.MSInputMethodContext && !!document.documentMode;

if (isIE) {
  var promiseScript = document.createElement("script");
  promiseScript.type = "text/javascript";
  promiseScript.src =
    "https://cdn.jsdelivr.net/npm/promise-polyfill@8.1.3/dist/polyfill.min.js";

  var fetchScript = document.createElement("script");
  fetchScript.type = "text/javascript";
  fetchScript.src =
    "https://cdn.jsdelivr.net/npm/whatwg-fetch@3.4.0/dist/fetch.umd.min.js";

  document.head.appendChild(promiseScript);
  document.head.appendChild(fetchScript);
} else {
  window.fetch = fetch;
}

var downloadPDFButtons = document.querySelectorAll('.ty-buttons.thankYouDownloadPDF');
downloadPDFButtons && downloadPDFButtons.forEach(function (pdfButton) {
  pdfButton.addEventListener('click', function (e) {
    e.preventDefault();
    if (!e.target.disabled) {
      e.target.disabled = true;

      window.fetch(e.target.href).then(function (res) {
        if (res.status == '200') {
          e.target.disabled = false;
          return res.blob();
        } else if (res.status == '400') {
          e.target.innerHTML = 'Link expired';
          return null;
        } else {
          console.error('Something went wrong.');
          return null;
        }
      }).then(function (res) {
        if (res) {
          var url = window.URL.createObjectURL(res);
          var a = document.createElement('a');
          a.target = '_blank';
          a.href = url;
          var pdfNameSelector = e.target.parentElement.parentElement.querySelector('.pdf-name');
          if (pdfNameSelector) {
            a.download = e.target.parentElement.parentElement.querySelector('.pdf-name').innerHTML;
            document.body.appendChild(a);
            a.click();
          }
          a.remove();
        }
      });
    }
    return false;
  });
});

function redirectTo(url, target) {
  var a = document.createElement('a');
  a.href = url;
  if (target) {
    a.target = target;
  }
  document.body.appendChild(a);
  a.click();
  a.remove();
}

var fillAnotherFormButtons = document.querySelectorAll('.thankYouFillAnotherForm .thankyou-btn-wrapper');
fillAnotherFormButtons && fillAnotherFormButtons.forEach(function (fillAnotherButton) {
  fillAnotherButton.addEventListener('click', function (e) {
    e.preventDefault();
    if (window.openedInPortal) {
      redirectTo(e.target.href, '_blank');
      return;
    }

    if (e.target.href) {
      var url = e.target.href;
      var a = document.createElement('a');
      a.target = '_blank';
      a.href = url;
      document.body.appendChild(a);
      a.click();
      a.remove();
    }
    return false;
  });
});

var thankYouFillAgainButton = document.querySelector('.thankYouFillAgain .ty-buttons');

if (thankYouFillAgainButton && thankYouFillAgainButton.href) {
  var isPrefill = thankYouFillAgainButton.href.indexOf('prefill') > -1;

  if (!isPrefill) {
    thankYouFillAgainButton.href = window.publishURL;
  }
}

var fillAgainButton = document.querySelector('.thankYouFillAgain');
fillAgainButton?.addEventListener('click', function (e) {
  if (window.parent !== window) {
    if (window.openedInPortal) {
      e.preventDefault();
      window.parent.postMessage({
        action: {
          formID: window.formID,
          name: 'thankYouFillAgain',
          payload: { prefillURL: thankYouFillAgainButton.href }
        },
        forJFApps: true
      }, '*');
      return;
    }
  }
});

var editSubmissionButton = document.querySelector('.thankYouEditSubmission');
editSubmissionButton?.addEventListener('click', function (e) {
  if (window.parent !== window) {
    if (window.openedInPortal) {
      e.preventDefault();
      redirectTo(e.target.href, '_blank');
    }
  }
});

