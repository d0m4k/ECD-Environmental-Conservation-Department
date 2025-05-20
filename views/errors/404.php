<style>
    #error-404 {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        /* height: 100vh; */
        /* background: #fdf6e3; */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #333;
        overflow: hidden;
        text-align: center;
    }
    #error-404 div:first-child{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #error-404 .number {
        font-size: 10rem;
        font-weight: bold;
        animation: bounce 1.2s ease-in-out infinite;
    }

    #error-404 .number:nth-child(3) {
        animation-delay: 0.3s;
    }

    #error-404 .ghost {
        width: 100px;
        height: 100px;
        background: #fff;
        border-radius: 50% 50% 40% 40%;
        position: relative;
        animation: float 2s ease-in-out infinite;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    #error-404 .ghost::before,
    #error-404 .ghost::after {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        background: #fff;
        border-radius: 50%;
        bottom: -10px;
    }

    #error-404 .ghost::before {
        left: 10px;
    }

    #error-404 .ghost::after {
        right: 10px;
    }

    #error-404 .face {
        font-size: 2rem;
        position: absolute;
        top: 25%;
        left: 50%;
        transform: translateX(-50%);
    }

    #error-404 .message {
        font-size: 1.5rem;
        margin-top: 20px;
        animation: fadeIn 2s ease-in-out;
    }

    /* Animations */
    @keyframes bounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
</style>
<div id="error-404">
    <div>
        <div class="number">4</div>
        <div class="ghost">
            <div class="face">👻</div>
        </div>
        <div class="number">4</div>
    </div>
    <p class="message">Oops! Page not found.</p>
</div>