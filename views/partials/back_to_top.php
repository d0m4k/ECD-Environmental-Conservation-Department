<style>
    #back_to_top {
        position: fixed;
        bottom: 30px;
        right: 30px;
        background-color: #333;
        color: #fff;
        padding: 12px 15px;
        border-radius: 50%;
        cursor: pointer;
        display: none;
        z-index: 1000;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    #back_to_top:hover {
        background-color: #555;
        transform: scale(1.1);
    }
</style>
<div id="back_to_top" title="Back to Top">
    <i class="fas fa-arrow-up"></i>
</div>
<script>
    const backToTop = document.getElementById("back_to_top");

    // Show button after scrolling down 100px
    window.onscroll = () => {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            backToTop.style.display = "block";
        } else {
            backToTop.style.display = "none";
        }
    };

    // Scroll to top on click
    backToTop.onclick = () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    };
</script>