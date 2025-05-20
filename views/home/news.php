<!-- <div class="news" id="news">
    <div class="news-item">
        <div class="title">
            <a href="/media?n=ပတ်ဝန်းကျင်ထိခိုက်မှု">ပတ်ဝန်းကျင်ထိခိုက်မှုဆန်းစစ်ခြင်း (EIA) အစီရင်ခံစာကို
                အများပြည်သူသိရှိပြီး
                သဘောထားမှတ်ချက်ပေးနိုင်ရေး</a>
            <div class="extra">
                <a href="/media" class="category">သတင်းနှင့်မီဒီယာ</a>
                <p class="date">May 24, 2025</p>
            </div>
        </div>
        <a href="" class="logo-img"><img
                src="../static/images/Logo_of_Ministry_of_Natural_Resources_and_Environmental_Conservation_(Myanmar).png"
                alt="" srcset=""></a>
    </div>
    <hr class="hr-break">
    <div class="news-item">
        <div class="title">
            <a href="/media?n=ပတ်ဝန်းကျင်ထိခိုက်မှု">ပတ်ဝန်းကျင်ထိခိုက်မှုဆန်းစစ်ခြင်း (EIA) အစီရင်ခံစာကို
                အများပြည်သူသိရှိပြီး
                သဘောထားမှတ်ချက်ပေးနိုင်ရေး</a>
            <div class="extra">
                <a href="/media" class="category">သတင်းနှင့်မီဒီယာ</a>
                <p class="date">May 24, 2025</p>
            </div>
        </div>
        <a href="" class="logo-img"><img
                src="../static/images/Logo_of_Ministry_of_Natural_Resources_and_Environmental_Conservation_(Myanmar).png"
                alt="" srcset=""></a>
    </div>
    <hr class="hr-break">
    <div class="news-item">
        <div class="title">
            <a href="/media?n=ပတ်ဝန်းကျင်ထိခိုက်မှု">ပတ်ဝန်းကျင်ထိခိုက်မှုဆန်းစစ်ခြင်း (EIA) အစီရင်ခံစာကို
                အများပြည်သူသိရှိပြီး
                သဘောထားမှတ်ချက်ပေးနိုင်ရေး</a>
            <div class="extra">
                <a href="/media" class="category">သတင်းနှင့်မီဒီယာ</a>
                <p class="date">May 24, 2025</p>
            </div>
        </div>
        <a href="" class="logo-img"><img
                src="../static/images/Logo_of_Ministry_of_Natural_Resources_and_Environmental_Conservation_(Myanmar).png"
                alt="" srcset=""></a>
    </div>
    <hr class="hr-break">
    <div class="news-item">
        <div class="title">
            <a href="/media?n=ပတ်ဝန်းကျင်ထိခိုက်မှု">ပတ်ဝန်းကျင်ထိခိုက်မှုဆန်းစစ်ခြင်း (EIA) အစီရင်ခံစာကို
                အများပြည်သူသိရှိပြီး
                သဘောထားမှတ်ချက်ပေးနိုင်ရေး</a>
            <div class="extra">
                <a href="/media" class="category">သတင်းနှင့်မီဒီယာ</a>
                <p class="date">May 24, 2025</p>
            </div>
        </div>
        <a href="" class="logo-img"><img
                src="../static/images/Logo_of_Ministry_of_Natural_Resources_and_Environmental_Conservation_(Myanmar).png"
                alt="" srcset=""></a>
    </div>
    <hr class="hr-break">
</div> -->

<div class="news" id="news">
    <?php 
    require_once __DIR__.'/../../data/sample_data.php';
    foreach ($newsList as $news): ?>
        <div class="news-item">
            <div class="title">
                <a href="/media?n=<?= urlencode($news['slug']) ?>">
                    <?= htmlspecialchars($news['title']) ?>
                </a>
                <div class="extra">
                    <a href="<?= $news['category_link'] ?>" class="category"><?= $news['category'] ?></a>
                    <p class="date"><?= $news['date'] ?></p>
                </div>
            </div>
            <a href="" class="logo-img">
                <img src="<?= $news['image'] ?>" alt="">
            </a>
        </div>
        <hr class="hr-break">
    <?php endforeach; ?>
</div>
