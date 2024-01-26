---
Title: Prestanda (uppdrag 6)
Description: Analys av projektsidan Maxime Jazz
Template: single_analysis
---

%meta.title%
-----------------------

I den här rapporten undersöker jag jazzpianisten *Maxime Jazz* hemsida, genom att göra mätningar relaterade till *page speed*, samt diskutera förbättringsmöjligheter.

### Urval

Maxime Jazz hemsida är designad av undertecknad.

[Länk till Maximes Jazz webbplats](https://www.student.bth.se/~oljn22/dbwebb-kurser/design/me/kmom10/)

### Metod

Jag gör mätningar på webbplatsens fyra huvudsidor **hem**, **biografi**, **portfolio** och **kontakt**. På varje sida mäts **prestanda** med hjäp av *Google PageSpeed Insights* <span class="ref"><sup>1</sup></span>, både för mobil och desktop. Med hjälp av utvecklarverkyget i *Mozilla Firefox*, under fliken *nätverk*, läser jag av **laddningstid**, **antal resurser** och **sidstorlek** tre gånger, och räknar ut ett medelvärde för dem. Jag laddar om sidan med <code>Ctrl+Shift+R</code>, för att resurser inte ska hämtas från cache-minnet.

### Resultat

<div class="screenshot-container">
    <a href="%base_url%/image/maxime.png">
        <picture>
            <source
                media="(max-width: 440px)"
                srcset=
                    "%base_url%/image/maxime.png?sc=screenshot-sm2,
                    %base_url%/image/maxime.png?sc=screenshot-sm2&dpr=2 2x" />
            <img
                src="%base_url%/image/maxime.png?sc=screenshot-lg2"
                srcset="%base_url%/image/maxime.png?sc=screenshot-lg2&dpr=2 2x"
                alt="Skärmdump from Maxime Jazz hemsida"
                width=600
                height=236 />
        </picture>
    </a>
</div>

<div class="calc-container calc-2">
    <iframe
        title="Spread sheet with results"
        class="calc-sheet"
        src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSMzAoHvpEBVvpez9ev6c4gQYprfu82ylZeB2Pgaom7ATXAQvI38HawONlUy9JPI5-lSBmX8zGjW8GM/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"
        frameborder="0">
    </iframe>
</div>

#### Diagnostik från *PageSpeed Insights*

1. Css-koden skulle kunna delas upp i två delar. En del som är kritisk för varje sidas första rendering (placeras inline), och en mindre kritisk (laddas in efter att sidan renderat).
2. Bakgrundsbilder skulle kunna laddas in i förväg med `<link rel="preload">`.
3. Bilder skulle kunna skickas i modernare bildformat, exempelvis som *WebP* istället för *JPEG*.
4. Cachelagringspolicyn skulle kunna förbättras (1år rekommenderas som utgångsdatum).
5. Några förskjutningar i layout (CLS) skulle kunna undvikas.


### Analys

Alla fyra sidorna håller en relativt hög nivå vad gäller prestanda både för mobil och desktop, men det finns ett antal små saker som skulle kunna optimeras.

När det gäller att göra uppdelning av css-koden, krävs en ganska omfattande omstrukturering, och tidsvinningen lär vara relativt begränsad i just det här fallet.

I en del fall kan det vara bra att förladda bakgrundsbilder, som annars inte börjar laddas förrän css-resursen är tillgänglig. Svårigheten här är att bakgrundsbilderna är responsiva för olika skärmbredder, och det blir inte konstruktivt att förladda en handfull olika bilder, när bara en behövs. Dessutom är bakgrundsbilderna inte en primär del av innehållet, och leder inte till layoutförskjutningar när de renderas.

Bilder hanteras responsivt med hjälp av *Cimage*, där stöd för *WebP* etc saknas.

Samantaget tycker jag prestandan god, med snabb genomsnittlig laddningstid (under en halv sekund), effektiv hantering av bilder, och relativt odramatiska skiftningar i layout.

### Referenser

1. [https://pagespeed.web.dev/](https://pagespeed.web.dev/), 2024-01-26

### Författare

Olof Jönsson, oljn22
