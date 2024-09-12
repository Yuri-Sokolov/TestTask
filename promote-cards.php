<?php
$promote = [
    'card1' => [
        'icon' => '<svg width="38" height="36" viewBox="0 0 38 36" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.35059 34.8977L36.8291 34.8977" stroke="#2F3337" stroke-width="1.23341" stroke-linecap="round" stroke-linejoin="round"/>
<rect x="13.9131" y="21.9099" width="22.5094" height="14.3478" rx="2.46681" transform="rotate(-68.4058 13.9131 21.9099)" fill="#FF7449"/>
<rect x="14.0704" y="29.9157" width="20.1939" height="13.0339" rx="1.85011" transform="rotate(-123.625 14.0704 29.9157)" stroke="#2F3337" stroke-width="1.23341"/>
</svg>
',
        'title' => 'Free demo licenses',
        'description' => 'You will get free NFR licenses for all iSpring desktop products and a free iSpring Learn LMS account. These resources will be
 a useful aid in negotiations with your prospective clients.'
    ],
    'card2' => [
        'icon' => '<svg width="34" height="40" viewBox="0 0 34 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M32.3566 4.63361C15.9459 6.38271 13.5237 14.1706 14.467 18.5117C14.5602 18.9405 14.9245 19.2549 15.3555 19.3371C29.1052 21.9596 33.19 12.181 33.6446 5.83513C33.6959 5.11921 33.0703 4.55754 32.3566 4.63361Z" fill="#FF7449"/>
<path d="M26.6601 11.1428C26.9548 10.9722 27.0554 10.5949 26.8848 10.3001C26.7141 10.0054 26.3368 9.90477 26.0421 10.0754L26.6601 11.1428ZM12.8617 22.6694C12.859 22.6754 12.9114 22.5804 13.0752 22.3552C13.2241 22.1504 13.4399 21.8716 13.7255 21.5297C14.2964 20.8463 15.1398 19.9181 16.2726 18.8325C18.538 16.6617 21.9563 13.8661 26.6601 11.1428L26.0421 10.0754C21.2459 12.8522 17.7495 15.709 15.4193 17.942C14.2543 19.0584 13.3797 20.0199 12.7789 20.739C12.4788 21.0983 12.2454 21.399 12.0775 21.6299C11.9245 21.8404 11.7927 22.0374 11.734 22.1698L12.8617 22.6694Z" fill="#2F3337"/>
<path d="M11.5965 25.9738C12.527 22.5647 13.441 15.4749 9.73145 11.5742" stroke="#2F3337" stroke-width="1.23341"/>
<path d="M5.53063 1.73804C12.801 5.9436 12.7321 10.6888 11.5108 13.1182C11.3041 13.5294 10.8387 13.7241 10.387 13.636C3.39911 12.2729 3.00057 6.2758 3.89577 2.41313C4.06423 1.68624 4.88475 1.36443 5.53063 1.73804Z" fill="white" stroke="#2F3337" stroke-width="1.23341"/>
<rect x="3.63721" y="26.0774" width="16.3038" height="10.4898" rx="3.08351" stroke="#2F3337" stroke-width="1.23341"/>
<rect x="1.06885" y="36.6265" width="21.4416" height="2.54056" rx="1.27028" fill="white" stroke="#2F3337" stroke-width="1.23341"/>
</svg>',
        'title' => 'Marketing aids',
        'description' => 'We support our partners at all stages of the sales process: from lead generation to closing and follow-up. We also provide ready-made marketing aids: guidelines, presentations, sales proposals, etc.'
    ],
    'card3' => [
        'icon' => '<svg width="37" height="35" viewBox="0 0 37 35" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="17.8113" cy="17.1308" r="8.22533" fill="#FF7449"/>
<circle cx="17.8106" cy="11.1324" r="10.4839" stroke="#2F3337" stroke-width="1.23341"/>
<circle cx="11.4512" cy="23.8543" r="10.4839" stroke="#2F3337" stroke-width="1.23341"/>
<circle cx="24.9444" cy="23.8543" r="10.4839" stroke="#2F3337" stroke-width="1.23341"/>
</svg>',
        'title' => 'Co-marketing activities',
        'description' => 'We are always here to help you grow the market and expand your customer base. Our marketing specialists gladly take part in partners’ promotional activities, like workshops and conferences. '
    ],
]
?>


<?php foreach ($promote as $card) : ?>
    <div class="promote__card">
        <div class="promote__card_icon">
            <?= $card['icon'] ?>
        </div>
        <h4 class="promote__card_title h4-title_dark">
            <?= $card['title'] ?>
        </h4>
        <span class="promote__card_description description_dark">
            <?= $card['description'] ?>
        </span>
    </div>
<?php endforeach; ?>