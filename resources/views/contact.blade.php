@extends('layouts.app')
@section('content')
    <header class="header">
        <div class="container-1440 center">
            <div class="heading-container">
                <div style="-webkit-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);-moz-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);-ms-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(-5DEG) skew(0, 0);opacity:0"
                    class="heading-row-1">
                    <h1>Get in <span class="spark-right">touch</span></h1>
                </div>
                <div style="-webkit-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);-moz-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);-ms-transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);transform:translate3d(0, 2EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(6DEG) skew(0, 0);opacity:0"
                    class="heading-row-2">
                    <h2>(we <span class="underline-wavey brand-color-2 h2">can&#x27;t wait</span> to hear from you)</h2>
                </div>
            </div>
        </div>
    </header>
    <div style="-webkit-transform:translate3d(0, 4EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 4EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 4EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 4EM, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
        class="section">
        <div class="container-1100">
            <div class="card">
                <div class="w-form">
                    <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form" method="get"
                        data-wf-page-id="68dfbb9a900caecaec945b88"
                        data-wf-element-id="7147b94a-7bc5-cc86-8e8a-6e189632aa67">
                        <div class="_2-column-grid">
                            <div><label for="Name-Contact-Form" class="field-label">Name</label><input
                                    class="text-field w-input" maxlength="256" name="Name-Contact-Form"
                                    data-name="Name (Contact Form)" placeholder="" type="text" id="Name-Contact-Form"></div>
                            <div><label for="Email-Address-Contact-Form-3" class="field-label">Email Address</label><input
                                    class="text-field w-input" maxlength="256" name="Email-Address-Contact-Form"
                                    data-name="Email Address (Contact Form)" placeholder="" type="email"
                                    id="Email-Address-Contact-Form-3" required=""></div>
                            <div><label for="Phone-Number-Contact-Form" class="field-label">Phone Number</label><input
                                    class="text-field w-input" maxlength="256" name="Phone-Number-Contact-Form"
                                    data-name="Phone Number (Contact Form)" placeholder="" type="tel"
                                    id="Phone-Number-Contact-Form" required=""></div>
                            <div><label for="" class="field-label">I&#x27;m Interested In</label><select id="field"
                                    name="field" data-name="field" class="select-field w-select">
                                    <option value="">Select one...</option>
                                    <option value="I&#x27;d like to adopt a cat">I&#x27;d like to adopt a cat</option>
                                    <option value="I&#x27;d like to adopt a dog">I&#x27;d like to adopt a dog</option>
                                    <option value="I&#x27;d like to volunteer">I&#x27;d like to volunteer</option>
                                    <option value="I&#x27;d like to be a foster carer">I&#x27;d like to be a foster carer
                                    </option>
                                </select></div>
                        </div><label for="Message-Field-Contact-Form" class="field-label">Message</label><textarea
                            name="Message-Field-Contact-Form" maxlength="5000" id="Message-Field-Contact-Form"
                            data-name="Message Field (Contact Form)" placeholder=""
                            class="text-area w-input"></textarea><label class="w-checkbox checkbox-field">
                            <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div><input
                                type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox"
                                style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-label w-form-label"
                                for="checkbox">I&#x27;d like to sign up to UCase newsletter</span>
                        </label><input type="submit" data-wait="Please wait..." class="button full-width w-button"
                            value="Submit">
                    </form>
                    <div class="success-message w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="error-message w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    document.body.className = '';



</script>