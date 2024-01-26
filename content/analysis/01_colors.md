---
Title: Färg- och textanalys
Description: Analys av färgval och typsnitt
Template: single_analysis
---

%meta.title%
-----------------------

I den här rapporten ska jag välja ut tre webbplatser, undersöka dess val av färg och typsnitt, samt analysera resultatet i relation till vilken upplevd känsla innehållet skapar.

### Urval

Jag väljer att titta på hemsidor för tre populära lokala restauranger i Karlskrona. Urvalet blir avgränsat till något som är relaterbart för mig själv, och webbplatsernas syften och storlek är jämförbara.
Jag använder [Tripadvisor][1], och väljer tre restauranger jag väl känner till, bland de tio med högst betyg.

### Metod

Jag identifierade ett antal olika färger, och plockade ut färgkoderna (hexadeciamal) med hjälp av tillägget 'chroma' i chrome, samt i något fall med hjälp av utveklarverktyget (till exempel för att se färgändring vid :hover). Typsnitt för h1-h3-element, samt p-element läste jag av med hjälp av utvecklarverktyget (computed font-family).

### Resultat

#### Vinberga Vinkiosk

![Vinberga Vinkiosk](%assets_url%/img/vinberga.png) {.screenshot}

<table class="color-table">
    <tr>
        <td style="background-color: #232F38;">
        <td style="background-color: #445664;">
        <td style="background-color: #D9AE63;">
    </tr>
</table>

Skärmdump och färgpalett från Vinberga Vinkiosks hemsida visar ett komplementärt färgschema, med en lugn, dov blå som primärfärg, och en mer mättad, livlig gul som  komplementärfärg. En mörkare variant av blå och gul förekommer också, samt vit för text.
Känslan blir lugn, kvalitativ, hantverksmässig och klassisk, med hjälp av den blå färgen och det skrivmaskinlika typsnittet (Courier New), samt lagom livlig och aptitretande (gula färgklickar), vilket rimmar bra med restaurangens profil.


#### Antonios

![Antonios](%assets_url%/img/antonios.png) {.screenshot}
<table class="color-table">
    <tr>
        <td style="background-color: #004a6e;">
        <td style="background-color: #005783;">
        <td style="background-color: #005a87;">
        <td style="background-color: #EBC66C;">
        <td style="background-color: #8D352C;">
        <td style="background-color: #E3BBBA;">
        <td style="background-color: #E6D7D5;">
        <td style="background-color: #ecebe1;">
    </tr>
</table>

Restaurang Antonios hemsida har ett tertiärt färgschema, med halvdova blåa toner för meny och text, ett spektrum av röda färger för footer, och en senapsgul inramning. Vitt och grått används även flitigt som bakgrunder.
Känslan i de kontrasterande färgerna, det höga stotliga rubriktypsnittet (nobel-condensed), den blåa texten på grågul bakgrund och den djärvt färgsatta footern, ger ett modernt, design-medvetet intryck, som leder tankarna till hav (blå, sandfärgad) och italien, vilket stämmer bra med restaurangens profil.

#### Biobaren

![Biobaren](%assets_url%/img/biobaren.png) {.screenshot}
<table class="color-table">
    <tr>
        <td style="background-color: #000;">
        <td style="background-color: #fff;">
        <td style="background-color: #B86927;">
        <td style="background-color: #CC8D2F;">
        <td style="background-color: #dfb50c;">
        <td style="background-color: #6A881E;">
    </tr>
</table>

Biobaren har i grunden ett monokromatiskt svart-vit 'dark theme', men använder en ganska mättad, färgsprakande gul som accentfärg för knappar, och liknande härliga gula toner från ost, bröd och pommes frites i bakgrundsbilden, vilken nästan skapar ett analogt färgschema i sig, med gula och även gröna toner.
Stämningen präglas av det mörka temat, vilket förstärks av att bilden ser ut att vara tagen på kvällen. Det rustika och enkla typsnittet (Raleway), som används för både rubriker och brödtext, och kvälls-stämmningen passar bra med konceptet som tydligt framgår i versaler (BURGARE OCH BÄRS!). 

#### Typsnitt

| Webbplats             | Rubriker             | Brödtext              |
|-----------------------|----------------------|-----------------------|
| Vinberga Vinkiosk     | Courier New, monospace | Courier New, monospace |
| Antonios              | nobel, nobel-condensed, sans-serif | chaparral-pro, serif |
| Biobaren              | Raleway, sans-serif  | Raleway, sans-serif   |

### Analys

Ett genomgående tema för de tre olika restaurangerna är att färgen gul förekommer. Enligt *The Principles of Beautiful Web Design*<span class="ref"><sup>1</sup></span> är färgen gul (och orange) stimulerande för aptiten, vilket passar bra i sammanhanget. Det blir särskilt tydligt i fallet med biobaren, där den färgsprakande bakgrundsbilden verkligen får det att vattnas i munnen.
Biobaren och Vinkiosken har valt mörkare färgtoner, vilket leder sinnestämmningen mer mot kväll. Kanske har Antonos valt ett ljusare tema för att även locka gäster på en lunch? 

Jag tycker alla tre restaurangerna har lyckats väl med att spegla den profil de har i verkligheten, och de inbjuder till ett besök!
### Referenser

1.  Beaird, Jason; Walker, Alex; George, James. The Principles of Beautiful Web Design. 4th Edition. Kap. 2.

### Författare

Olof Jönsson (oljn22)

[1]: https://www.tripadvisor.se/FindRestaurants?geo=189843&establishmentTypes=10591&broadened=true "Restauranger i Karlskrona"