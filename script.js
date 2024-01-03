function copyToClipboard(elementId) {
    // Get the text field
    let copyText = document.getElementById(elementId);

    console.log(copyText.textContent);

    // Copy the text inside the text field
    navigator.clipboard.writeText(copyText.textContent).then(() => {
        // Success!
        console.log('Copied to clipboard');
      }
    ).catch(err => {
        console.log('Something went wrong', err);
      }
    )
  }