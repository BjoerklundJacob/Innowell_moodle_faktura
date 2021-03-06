# Innowell_moodle_faktura
Moodle er et e-learningsystem som vi benytter til at uddanne mange studerende hele året rundt. De studerende køber adgang til online materiale i form af tekster, quizzer, opgaver m.m. hvor vi har faglærere der retter og senere sender dem til en eksamen. Dette koster selvfølgelig penge og derfor skal brugerne have adgang til en faktura i PDF-format hver gang de tilmelder sig et kursus/uddannelse.  
Derfor skal der udvikles et Moodle plugin som kan dette. 
- Pluginet skal på hver brugers profil have en liste over brugerens fakturaer. 
- Fakturaerne i listen skal fungere som links til en PDF faktura, der genereres ved klik.  
- Listen af en brugers fakturaer skal kunne ses af brugeren selv og alle administratorer for Moodle.  
- Den genererede PDF skal vises i browseren uden at gemme det på serveren. Idéen med dette er at alle fakturaerne ikke fylder på den server, hvor Moodle er anvendt. Derfor skal PDF fakturaen ikke genereres når at en bruger tilmelder sig et kursus.  
En faktura skal indeholde:  
- Navn på bruger  
- Adresse på bruger  
- Dato på tilmelding  
- Unik faktura id. Dette id skal være det samme, hvis fakturaen lukkes og åbnes igen.  
- Kursus navn  
- Kursus pris. Denne pris er altid 1.000 kr.  
Fakturaens udseende er ikke vigtigt  

## Hjælp
Generering af en faktura i PDF format kan ske ved brug af FPDF http://www.fpdf.org/  
Før du kan begynde at lave pluginet så skal der opsættes en webserver og Moodle skal installeres. Dette kan dog gøres nemt på Windows og Mac med moodles portable webserver samt Moodle som bygger på XAMPP.  
- Windows https://docs.moodle.org/310/en/Complete_install_packages_for_Windows#Install_complete_package_process 
- Mac https://docs.moodle.org/310/en/Installation_Package_for_OS_X#Download_and_install  
- Linux / Container https://bitnami.com/stack/moodle/installer  
Efter moodle er installeret så kan du eventuelt installere Moodle Adminer.  https://moodle.org/plugins/local_adminer Dette plugin bruges til at se moodle databasen. Dette kan give et bedre overblik over dataet Moodle har, som du skal benytte.   
Derefter kan du tage udgangspunkt i https://docs.moodle.org/dev/Blocks for at udvikle pluginet.  Dette er en af de muligheder man har for at tilføje ekstra funktionalitet til moodle.  
Moodles database tilgås igennem deres Database API https://docs.moodle.org/dev/Data_manipulation_API   

## Evaluering
Løsningen bliver vurderet på hvor godt opgaven er løst og hvor godt man har udnyttet de midler der er tilgængelige. Dette inkluderer både PHP og Moodle.
