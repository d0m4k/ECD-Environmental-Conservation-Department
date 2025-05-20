<div class="home-content">
    <form action="" method="get">
        <input type="search" placeholder="Type of search.." name="s" id="search">
        <button type="submit">
            <i class="fas fa-search"></i>
        </button>
    </form>
    <h2>ဦးစီးဌာနအကြောင်း</h2>
    <p>ပတ်ဝန်းကျင်ထိန်းသိမ်းရေးဦးစီးဌာနသည် ပတ်ဝန်းကျင်ထိန်းသိမ်းရေးနှင့်
        သစ်တောရေးရာဝန်ကြီးဌာနလက်အောက်ရှိ ဦးစီးဌာန (၆)ခုအနက်မှ ၂၀၁၂ခုနှစ်တွင်
        အသစ်တိုးချဲ့ဖွင့်လှစ်ခဲ့သည့် ဌာနတစ်ခုဖြစ်ပါသည်။ ပတ်ဝန်းကျင်ထိန်းသိမ်းရေး ဦးစီးဌာနသည် အမျိုးသား
        ပတ်ဝန်းကျင် ထိန်းသိမ်းရေးနှင့် ပတ်သက်သော လုပ်ငန်းများ အောင်မြင်စွာအကောင်အထည်
        ဖော်ဆောင်ရွက်နိုင်ရန်အတွက် သက်ဆိုင်ရာ နှီးနွယ်နေသော အစိုးရဝန်ကြီးဌာနများ၊
        အစိုးရမဟုတ်သောအဖွဲ့အစည်းများ၊ လူမှုရေးအသင်း အဖွဲ့များ၊ နိုင်ငံတကာအဖွဲ့အစည်းများနှင့်
        ချိတ်ဆက်ပူးပေါင်း ဆက်သွယ်၍ ပတ်ဝန်းကျင်ထိန်းသိမ်းရေး ဆိုင်ရာ မူဝါဒများ၊ နည်းဥပဒေများ၊ စီမံကိန်း၊
        စီမံချက်များ ရေးဆွဲအကောင် အထည်ဖော်ဆောင်ရွက်လျက်ရှိပါသည်။</p>
    <div class="calendar" id="calendar">

    </div>
</div>

<script>
    function generateCalendar(year, month) {
        const calendar = document.getElementById("calendar");
        const date = new Date(year, month);
        const monthName = date.toLocaleString("default", { month: "long" });
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        const startDay = new Date(year, month, 1).getDay();

        const today = new Date();
        const isCurrentMonth = today.getFullYear() === year && today.getMonth() === month;

        let html = `<table>
        <thead>
            <tr><th colspan="7">${monthName} ${year}</th></tr>
            <tr>
                <th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th>
                <th>Thu</th><th>Fri</th><th>Sat</th>
            </tr>
        </thead>
        <tbody><tr>`;

        for (let i = 0; i < startDay; i++) {
            html += `<td></td>`;
        }

        for (let day = 1; day <= daysInMonth; day++) {
            let isToday = isCurrentMonth && day === today.getDate();
            html += `<td class="${isToday ? 'today' : ''}">${day}</td>`;
            if ((day + startDay) % 7 === 0) {
                html += `</tr><tr>`;
            }
        }

        html += `</tr></tbody></table>`;
        calendar.innerHTML = html;
    }
    // Generate current month calendar
    document.addEventListener("DOMContentLoaded", () => {
        const today = new Date();
        generateCalendar(today.getFullYear(), today.getMonth());
    });

</script>