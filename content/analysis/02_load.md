---
Title: Laddningsanalys
Description: Analys av laddtid
Template: single_analysis
---

%meta.title%
-----------------------

I den här rapporten ska jag välja ut 3 webbplatser, för att göra mätningar relaterade till *page speed*, samt jämföra och diskutera förbättringsmöjligheter.

### Urval

Jag har valt att titta på de tre mest besökta webbsidorna för nyheter i sverige<span class="ref"><sup>1</sup></span>.

- expressen.se
- aftonbladet.se
- dn.se

En nyhets-sida har ofta en stor mängd innehåll att visa upp, men behöver samtidigt var snabb för att behålla användarna.

### Metod

Jag väljer ut tre olika sidor på varje webbplats (startsida, kultursida och debattsida), för att få ett tvärsnitt av webbplatsen. På varje sida mäts prestanda med hjäp av *Google Pagespeed Insights* <span class="ref"><sup>2</sup></span>, både för mobil och desktop. Med hjälp av utvecklarverkyget i *Mozilla Firefox*, under fliken *nätverk*, läser jag av **laddningstid**, **antal resurser** och **sidstorlek** tre gånger, och räknar ut ett medelvärde för dem. Jag laddar om sidan med <code>Ctrl+Shift+R</code>, för att resurser inte ska hämtas från cache-minnet.

### Resultat

<div class="calc-container">
    <iframe
    title="Spread sheet with results"
        class="calc-sheet"
        src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSMzAoHvpEBVvpez9ev6c4gQYprfu82ylZeB2Pgaom7ATXAQvI38HawONlUy9JPI5-lSBmX8zGjW8GM/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"
        frameborder="0">
    </iframe>
</div>

<div class="screenshot-container">
    <a href="%base_url%/image/expressen.png">
        <picture>
            <source
                media="(max-width: 440px)"
                srcset=
                    "%base_url%/image/expressen.png?sc=screenshot-sm,
                    %base_url%/image/expressen.png?sc=screenshot-sm&dpr=2 2x" />
            <img
                src="%base_url%/image/expressen.png?sc=screenshot-lg"
                srcset="%base_url%/image/expressen.png?sc=screenshot-lg&dpr=2 2x"
                alt="skärmdump from expressen.se">
            <figcaption>
                Några förbättringar som kan göras på Expressens webbplats är att reducera storleken på js-script/skjuta upp laddning av script, minska serverns första svarstid, och modernisera några bildformat.
            </figcaption>
        </picture>
    </a>
</div>

***

<div class="screenshot-container">
    <a href="%base_url%/image/aftonbladet.png">
        <picture>
            <source
                media="(max-width: 440px)"
                srcset=
                    "%base_url%/image/aftonbladet.png?sc=screenshot-sm,
                    %base_url%/image/aftonbladet.png?sc=screenshot-sm&dpr=2 2x" />
            <img
                src="%base_url%/image/aftonbladet.png?sc=screenshot-lg"
                srcset="%base_url%/image/aftonbladet.png?sc=screenshot-lg&dpr=2 2x"
                alt="skärmdump from aftonbladet.se">
            <figcaption>
                Möjliga förbättringar på aftonbladet.se är rätt storlek på bilder, modernare bildformat, reducering av tunga js-script, samt minskat beroende av tredjepartskod.
            </figcaption>
        </picture>
    </a>
</div>

***

<div class="screenshot-container">
    <a href="%base_url%/image/dn.png">
        <picture>
            <source
                media="(max-width: 440px)"
                srcset=
                    "%base_url%/image/dn.png?sc=screenshot-sm,
                    %base_url%/image/dn.png?sc=screenshot-sm&dpr=2 2x" />
            <img
                src="%base_url%/image/dn.png?sc=screenshot-lg"
                srcset="%base_url%/image/dn.png?sc=screenshot-lg&dpr=2 2x"
                alt="skärmdump from dn.se">
            <figcaption>
                Små förbättringar kan uppnås på dn.se genom optimering av js-script/när de laddas, första svarstid, och mindre tredjepartskod.
            </figcaption>
        </picture>
    </a>
</div>

### Analys

Alla tre sidorna kan göras snabbare genom att reducera mängden javascript, och låta delar av scripten laddas in senare. I enstaka fall kan stora bilder komprimeras, skalas ner eller sparas i ett modernare format. I några fall verkar serverns första svarstid vara onödigt lång, och beroenden av tredjepartscript för många.

Annonserna tar lång tid på sig att bli synliga på samtliga webbplatser, och är troligen en stor faktor för prestandabetyget.

Mobil-testerna har generellt väldigt lågt betyg för alla tre webbplatserna. Kanske beror det på att de alla erbjuder appar som alternativ.

Jag rangordnar webbplatsernas prestanda såhär:

1. Expressen
2. Dagens Nyheter
3. Aftonbladet

Betygen från *Pagespeed insights* pekar mot angiven rangordning. Jag har själv svårt att göra någon avvägning utifrån de andra mätvärdena. En sak jag lägger märke till när jag tittar i nätverksfliken i utvecklarverktyget, är att det ibland kan vara en enskild bild i fel storlek/format, som utgör en stor del av sidstorleken. I de fallen ser det ut att antingen vara misstag, eller att bilden kommer från tredje part, exempelvis en reklambild.

Hur snabb jag upplever att en webbsida är beror en del på kontexten. Men om jag avgränsar mig till nyhetssidor och desktop skulle jag säga att omkring 1 sekund upplevs som snabbt.

Dagens Nyheter är snabbast, men laddar även in färre resurser. Med Aftonbladet märker jag av en viss seghet innan jag kan scrolla. Expressen upplever jag vara lika snabb som DN. 


### Referenser

1. [https://ocast.com/se/toplists/orvesto-internet](https://ocast.com/se/toplists/orvesto-internet), 2023-12-04
2. [https://pagespeed.web.dev/](https://pagespeed.web.dev/), 2023-12-05

### Övrigt

Olof Jönsson, oljn22
