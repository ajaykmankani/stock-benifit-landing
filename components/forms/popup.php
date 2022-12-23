<style>
    @import url("https://fonts.googleapis.com/css?family=Nunito:400,600,700");

    * {
        box-sizing: border-box;
    }

    body {
        font-family: "Nunito", sans-serif;
        color: rgba(0, 0, 0, 0.7);
    }



    .modal {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 60px;
        /* background: rgba(51, 51, 51, 0.5); */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        transition: 0.4s;
    }

    .modal-container {
        display: flex;
        max-width: 720px;
        width: 100%;
        border-radius: 10px;
        overflow: hidden;
        position: absolute;
        opacity: 0;
        pointer-events: none;
        transition-duration: 0.3s;
        background: #fff;
        transform: translateY(100px) scale(0.4);
    }

    .modal-title {
        font-size: 26px;
        margin: 0;
        font-weight: 400;
        color: #55311c;
    }

    .modal-desc {
        margin: 6px 0 30px 0;
    }

    .modal-left {
        padding: 60px 30px 20px;
        background: #fff;
        flex: 1.5;
        transition-duration: 0.5s;
        transform: translateY(80px);
        opacity: 0;
    }

    /* .modal-button {
        color: #7d695e;
        font-family: "Nunito", sans-serif;
        font-size: 18px;
        cursor: pointer;
        border: 0;
        outline: 0;
        padding: 10px 40px;
        border-radius: 30px;
        background: white;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.16);
        transition: 0.3s;
    } */

    .modal-button:hover {
        border-color: rgba(255, 255, 255, 0.2);
        background: rgba(255, 255, 255, 0.8);
    }

    .modal-right {
        flex: 2;
        font-size: 0;
        transition: 0.3s;
        overflow: hidden;
    }

    .modal-right img {
        width: 100%;
        height: 100%;
        transform: scale(2);
        -o-object-fit: cover;
        object-fit: cover;
        transition-duration: 1.2s;
    }

    .modal.is-open {
        height: 100%;
        background: rgba(51, 51, 51, 0.85);
    }

    .modal.is-open .modal-button {
        opacity: 0;
    }

    .modal.is-open .modal-container {
        opacity: 1;
        transition-duration: 0.6s;
        pointer-events: auto;
        transform: translateY(0) scale(1);
    }

    .modal.is-open .modal-right img {
        transform: scale(1);
    }

    .modal.is-open .modal-left {
        transform: translateY(0);
        opacity: 1;
        transition-delay: 0.1s;
    }

    .modal-buttons {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .modal-buttons a {
        color: rgba(51, 51, 51, 0.6);
        font-size: 14px;
    }

    .sign-up {
        margin: 60px 0 0;
        font-size: 14px;
        text-align: center;
    }

    .sign-up a {
        color: #8c7569;
    }

    .input-button {
        padding: 8px 12px;
        outline: none;
        border: 0;
        color: #fff;
        border-radius: 4px;
        background: #8c7569;
        font-family: "Nunito", sans-serif;
        transition: 0.3s;
        cursor: pointer;
    }

    .input-button:hover {
        background: #55311c;
    }

    .input-label {
        font-size: 11px;
        text-transform: uppercase;
        font-family: "Nunito", sans-serif;
        font-weight: 600;
        letter-spacing: 0.7px;
        color: #8c7569;
        transition: 0.3s;
    }

    .input-block {
        display: flex;
        flex-direction: column;
        padding: 10px 10px 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        margin-bottom: 20px;
        transition: 0.3s;
    }

    .input-block input {
        outline: 0;
        border: 0;
        padding: 4px 0 0;
        font-size: 14px;
        font-family: "Nunito", sans-serif;
    }

    .input-block input::-moz-placeholder {
        color: #ccc;
        opacity: 1;
    }

    .input-block input:-ms-input-placeholder {
        color: #ccc;
        opacity: 1;
    }

    .input-block input::placeholder {
        color: #ccc;
        opacity: 1;
    }

    .input-block:focus-within {
        border-color: #8c7569;
    }

    .input-block:focus-within .input-label {
        color: rgba(140, 117, 105, 0.8);
    }

    .icon-button {
        outline: 0;
        position: absolute;
        right: 10px;
        top: 12px;
        width: 32px;
        height: 32px;
        border: 0;
        background: 0;
        padding: 0;
        cursor: pointer;
    }

    .scroll-down {
        position: fixed;
        top: 50%;
        left: 50%;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        color: #7d695e;
        font-size: 32px;
        font-weight: 800;
        transform: translate(-50%, -50%);
    }

    .scroll-down svg {
        margin-top: 16px;
        width: 52px;
        fill: currentColor;
    }

    @media (max-width: 750px) {
        .modal-container {
            width: 90%;
        }

        .modal-right {
            display: none;
        }
    }
</style>


<div class="modal">
    <div class="modal-container">
        <div class="modal-left">
            <h1 class="modal-title">Welcome!</h1>
            <p class="modal-desc">Fanny pack hexagon food truck, street art waistcoat kitsch.</p>
            <form action="components/function.php" method="post">
                <div class="input-block">
                    <label for="email" class="input-label">Name</label>
                    <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" placeholder="Your Name" required>
                </div>
                <div class="input-block">
                    <label for="password" class="input-label">Mobile</label>
                    <input type="text" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control" name="phone" placeholder="Your Phone Number" required>
                </div>
                <div class="input-block">
                    <label for="password" class="input-label">Mobile</label>
                    <select data-msg-required="Please select a service." class="form-control" name="service" required>
                        <option value="" selected>Select Service</option>
                        <option value="NIFTY / Bank NIFTY">NIFTY / Bank NIFTY</option>
                        <option value="Equity Cash / Intraday">Equity Cash / Intraday</option>
                        <option value="Option (Call - Put)">Option (Call - Put)</option>
                        <option value="Future (Derivatives)">Future (Derivatives)</option>
                        <option value="index">index</option>
                    </select>
                </div>
                <div class="modal-buttons">
                    <!-- <a href="" class="">Forgot your password?</a> -->
                    <button class="input-button">Submit</button>
                </div>
            </form>
            <p class="sign-up">Don't have an account? <a href="#">Sign up now</a></p>
        </div>
        <div class="modal-right">
            <img src="img/popup.jpg" alt="">
        </div>
        <button class="icon-button close-button">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                <path d="M 25 3 C 12.86158 3 3 12.86158 3 25 C 3 37.13842 12.86158 47 25 47 C 37.13842 47 47 37.13842 47 25 C 47 12.86158 37.13842 3 25 3 z M 25 5 C 36.05754 5 45 13.94246 45 25 C 45 36.05754 36.05754 45 25 45 C 13.94246 45 5 36.05754 5 25 C 5 13.94246 13.94246 5 25 5 z M 16.990234 15.990234 A 1.0001 1.0001 0 0 0 16.292969 17.707031 L 23.585938 25 L 16.292969 32.292969 A 1.0001 1.0001 0 1 0 17.707031 33.707031 L 25 26.414062 L 32.292969 33.707031 A 1.0001 1.0001 0 1 0 33.707031 32.292969 L 26.414062 25 L 33.707031 17.707031 A 1.0001 1.0001 0 0 0 32.980469 15.990234 A 1.0001 1.0001 0 0 0 32.292969 16.292969 L 25 23.585938 L 17.707031 16.292969 A 1.0001 1.0001 0 0 0 16.990234 15.990234 z"></path>
            </svg>
        </button>
    </div>

</div>

<!-- <button class="modal-button">Click here to login</button> -->
<script>
    const body = document.querySelector("body");
    const modal = document.querySelector(".modal");
    const modalButton = document.querySelector(".modal-button");
    const closeButton = document.querySelector(".close-button");
    const scrollDown = document.querySelector(".scroll-down");
    let isOpened = false;

    const openModal = () => {
        modal.classList.add("is-open");
        body.style.overflow = "hidden";
    };

    const closeModal = () => {
        modal.classList.remove("is-open");
        body.style.overflow = "initial";
    };

    window.addEventListener("scroll", () => {
        if (window.scrollY > window.innerHeight / 3 && !isOpened) {
            isOpened = true;
            scrollDown.style.display = "none";
            openModal();
        }
    });

    modalButton.addEventListener("click", openModal);
    closeButton.addEventListener("click", closeModal);

    document.onkeydown = evt => {
        evt = evt || window.event;
        evt.keyCode === 27 ? closeModal() : false;
    };
</script>