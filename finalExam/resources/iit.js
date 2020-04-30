function validate(formObj) {
  
  if (formObj.name.value === '') {
    alert('Please enter a lab name');
    formObj.name.focus();
    return false;
  }
  
  if (formObj.description.value === '') {
    alert('Please enter a lab description');
    formObj.description.focus();
    return false;
  }
  
  if (formObj.url.value === '') {
    alert('Please enter a lab url');
    formObj.url.focus();
    return false;
  }
    
  return true;
}
