<?php

$words = [
  "all","also","and","another","appeared","as","at","be","beginning","blood","but","Christ","claim","complete","concerning","confess","darkness","deceive","declare","do","eternal","eyes","faithful","father","fellowship","forgive","forgiveness","from","God","hands","has","have","he","heard","him","his","if","in","incarnation","is","it","Jesus","joy","just","liar","lie","life","light","light","live","looked","make","may","message","no","not","of","one","our","ourselves","out","proclaim","purifies","purify","seen","sin","sinned","sins","so","son","testify","that","the","there","this","to","touched","truth","unrighteousness","us","walk","was","we","what","which","will","with","without","word","write","yet","you"
  ];

$wordsLen = count($words);
$passwordGenerated = "";

$n_words = 0;

if (isset($_GET["n_words"])) {
    $n_words = $_GET["n_words"];

    for($i = 1; $i <= $n_words; $i++) {
          $passwordGenerated[] = $words[mt_rand(0,$wordsLen-1)];

}
else {
  $n_words == 4;
}
