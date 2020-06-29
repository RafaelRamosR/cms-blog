const formValidate = (constraints) => {

    // Hook up the form so we can prevent it from being posted
    const form = document.querySelector("#formRegister");
    form.addEventListener("submit", (e) => {
      e.preventDefault();
      handleFormSubmit(form);
    });

    // Hook up the inputs to validate on the fly
    const inputs = document.querySelectorAll("input, textarea, select");
    for (let item of inputs) {
      item.addEventListener("change", () => {
        const errors = validate(form, constraints) || {};
        showErrorsForInput(item, errors[item.name])
      });
    }

    const handleFormSubmit = (form) => {
      // validate the form against the constraints
      const errors = validate(form, constraints);
      if (!errors) {
        return showSuccess();
      }
      // then we update the form to reflect the results
      showErrors(form, errors || {});
    }

    // Updates the inputs with the validation errors
    const showErrors = (form, errors) => {
      // We loop through all the inputs and show the errors for that input
      const arr = form.querySelectorAll("input[name], select[name]")
      // Since the errors can be null if no errors were found we need to handle
      arr.forEach(input => {
        showErrorsForInput(input, errors && errors[input.name]);
      });
    }

    // Shows the errors for a specific input
    const showErrorsForInput = (input, errors) => {
      // This is the root of the input
      const formGroup = closestParent(input.parentNode, "form-group")
      //Not all inputs need validation like hidden types
      if(formGroup != null){
        // Find where the error messages will be insert into
        const messages = formGroup.querySelector(".messages");
        // First we remove any old messages and resets the classes
        resetFormGroup(formGroup);
        // If we have errors
        if (errors) {
          // we first mark the group has having errors
          formGroup.classList.add("has-error");
          // then we append all the errors
          errors.forEach(error => {
            addError(messages, error);
          });
        } else {
          // otherwise we simply mark it as success
          formGroup.classList.add("has-success");
        }
      }
    }

    // Recusively finds the closest parent that has the specified class
    const closestParent = (child, className) => {
      if (!child || child == document) {
        return null;
      }
      if (child.classList.contains(className)) {
        return child;
      }
      return closestParent(child.parentNode, className);
    }

    const resetFormGroup = (formGroup) => {
      // Remove the success and error classes
      formGroup.classList.remove("has-error");
      formGroup.classList.remove("has-success");
      // and remove any oldmessages
      const arr = formGroup.querySelectorAll(".text-error")
      arr.forEach(el => {
        el.parentNode.removeChild(el);
      });
    }

    // Adds the specified error with the following markup
    // <p class="text-error">[message]</p>
    const addError = (messages, error) => {
      const block = document.createElement("p");
      block.classList.add("text-error");
      block.innerText = error;
      messages.appendChild(block);
    }

    const showSuccess = () => {
      // We made it \:D/
      alert("Success!");
    }
  };