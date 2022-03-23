const { fdatasyncSync } = require("fs");

window.onload = function() {
    const options = {
        //...
    };
    const messages = {
       // ...
    };
    const cc = new CookieConsent(options, messages);
    cc.init();

    const cc = new CookieConsent({
        cookie: {
            domain: 'isnerez.infinityfreeapp.com'
            // ...
        }
        // ...
    });
    cc.init();
}
categories: [
{
    key: 'necessary',
    name: 'Nezbytné cookies',
    copy: 'Bez těchto cookies stránky nefungují správně, po zavření prohlížeče se automaticky smažou (např. správné zobrazení stránky, session id, nastavení souhlasů).'
},
{
    key: 'functionality',
    name: 'Funkční cookies',
    copy: 'Trvalé cookies si dokážou zapamatovat nastavení uživatele, takže příště nemusí zadávat údaje, které již použil (např. uživatelské jméno, jazyk).'
},
{
    key: 'analytics',
    name: 'Statistické a výkonnostní cookies',
    copy: 'Pomáhají anonymně zjišťovat, jaké stránky na webu jsou oblíbené a jak je uživatelé využívají, tyto informace slouží k dalšímu zlepšování a úpravám stránek.'
},
{
    key: 'personalization',
    name: 'Reklamní cookies',
    copy: 'Zjišťují, jaký typ reklam uživatele oslovuje a umožňují zobrazovat mu reklamy, které jsou více relevantní.'
}
]

// ...
forcedCategoryKeys: ['necessary']
// ...

{
    consentBar: {
        headline: 'Můžeme si u vás uložit cookies?',
        copy: 'Co že to znamená? Cookies jsou malé datové soubory, které slouží např. k tomu, aby si web pamatoval vaše nastavení a to, co vás zajímá, nebo abychom jej zlepšovali . Pro ukládání různých typů cookies od vás potřebujeme souhlas. Web bude fungovat i bez souhlasu, s ním ale o něco lépe.',
        ctaAcceptAll: 'Souhlasím se všemi',
        ctaDeclineAll: 'Odmítnout všechny',
        ctaPreferences: 'Podrobné nastavení',
    },
    preferencesDialog: {
        headline: 'Nastavení souhlasů s cookies',
        copy: 'Při vašich návštěvách webů z domény gov.cz používáme níže uvedené typy cookies. Vy nám udělujete souhlas k použití všech, nebo jen vybraných typů. Vaše dříve udělené souhlasy zde můžete upravit.',
        ctaSave: 'Uložit nastavení',
        information: 'Více informací o cookies a zpracování dat naleznete v <a href="https://portal.gov.cz/tiraz/osobni-udaje-a-cookies" rel="nofollow" target="_blank">Zpracování osobních údajů a cookies</a>.'
    }
}

const cc = new CookieConsent();
cc.on('initialized', function (data) {
    // ...
})
cc.init();

document.addEventListener('gcc_initialized', function (e) {
    // ...
});

window.CookieConsentController.preferences.open(); // Otevření dialogu
window.CookieConsentController.preferences.close(); // Zavření dialogu

// Otevření dialogu
document.dispatchEvent(new CustomEvent('open-cookie-preferences-purposes', {
    bubbles: true
}));

// Zavření dialogu
document.dispatchEvent(new CustomEvent('close-cookie-preferences-purposes', {
    bubbles: true
}));