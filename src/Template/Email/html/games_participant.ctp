<tr>
  <td style="color: #634840; font-size: 24px;">
   Ahoj <?= $participant->first_name ?>!
  </td>
</tr>
<tr>
  <td>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tr>
        <td style="padding: 20px 0 20px 0; color: #634840; font-size: 16px; line-height: 20px;">
          Prihlásil si sa na INSIDE Games 2018. Tešíme sa z toho! Pred INSIDE Games ti na túto mailovú adresu pošleme viac potrebných informácií.
          <br/>
          <br/>V prihláške si uviedol nasledovné informácie:
          <br/>Meno: <?= $participant->first_name ?>
          <br/>Priezvisko: <?= $participant->last_name ?>
          <br/>Dátum narodenia: <?= $participant->birthday ?>
          <br/>Adresa: <?= $participant->residence ?>
          <br/>E-mail: <?= $participant->email ?>
          <br/>Tvoje zaradenie v tíme: <?= $participant->team->name ?>
        </td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td style="padding: 30px 5px 20px 5px; color: #634840; font-size: 16px; line-height: 20px;">
    Uisťujeme ťa, že všetky tebou poskytnuté údaje sú v bezpečí a budeme s nimi narábať v súlade so zákonom a <a href="https://inside.sem.sk/pages/data_protection" target="_blank">podmienkami spracovania osobných údajov</a>, ktoré nájdeš na našom webe.
  </td>
</tr>
<tr>
  <td style="padding: 30px 5px 20px 5px; color: #634840; font-size: 16px; line-height: 20px; font-style:italic;">
    Tešíme sa na stretnutie!<br>
    <a href="https://www.inside.sem.sk">www.inside.sem.sk</a>
  </td>
</tr>