<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Actor;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Actor::create([
            'name' => 'Emily Blunt',
            'gender' => 'female',

            'biography' => 'Emily Olivia Leah Blunt was born on 23 February 1983 in the London Borough of Wandsworth, the second of four children born to Joanna, a former actress and teacher, and barrister Oliver Blunt, QC. Her siblings are Felicity, Sebastian, and Susannah. Her grandfather was Major General Peter Blunt, and one of her paternal uncles is Crispin Blunt, Conservative Member of Parliament for Reigate. From age seven to 14, Blunt had difficulties with stuttering. She credits a school teacher for helping her manage the stutter through acting. She went on to sit on the board of directors for the American Institute for Stuttering. Blunt attended Ibstock Place School in Roehampton, southwest London and, at age 16, went to Hurtwood House near Dorking, Surrey, a private sixth form college known for its performing arts programme. There, she was discovered and signed by an agent.',

            'dob' => '1983-02-23',
            'pob' => 'Roehampton, London, England, UK',
            'image_url' => 'img/actors/emily-blunt.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'John Krasinski',
            'gender' => 'male',

            'biography' => "John Burke Krasinski was born on October 20, 1979, at St. Elizabeth's Hospital in the Brighton neighborhood of Boston, the youngest of three boys of nurse Mary Clare (born 1949) and internist Ronald Krasinski (born 1946). His mother is of Irish ancestry, while his father is of Polish descent. He was raised Catholic[10] in the Boston suburb of Newton, Massachusetts. Krasinski made his stage debut as Daddy Warbucks in a sixth-grade school production of the musical Annie. Afterwards, he co-starred in a satirical play written and cast by his future The Office co-star B. J. Novak when they were high school seniors. Krasinski and Novak graduated from Newton South High School in 1997. Before entering college, Krasinski taught English as a foreign language in Costa Rica for six months. While there, he saved a woman from drowning after she was caught in a riptide at a beach in Manuel Antonio National Park. Following his time in Costa Rica, Krasinski attended Brown University, where he studied English and playwriting and wrote an honors thesis entitled 'Contents Under Pressure'. He graduated from Brown in 2001.",

            'dob' => '1979-10-20',
            'pob' => 'Newton, Massachusetts, USA',
            'image_url' => 'img/actors/john-krasinski.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'Millicent Simmonds',
            'gender' => 'female',

            'biography' => "Simmonds grew up in Bountiful, Utah in the United States. She has four siblings; two older and two younger than her.Prior to turning 12 months old, Simmonds lost her hearing due to a medication overdose. Her mother learned American Sign Language and taught the family so they could communicate with her. Simmonds said without her family using ASL, \"I wouldn't have a relationship with my own family, I wouldn't have communication. \"Simmonds also has a cochlear implant. Simmonds's mother also encouraged her to read books extensively. When Simmonds was three years old, she started attending the Jean Massieu School of the Deaf, where she participated in its drama club. Her first play was in A Midsummer Night's Dream as Puck. After completing sixth grade, she mainstreamed at the Mueller Park Junior High School in the fall of 2015. She has performed at the Utah Shakespeare Festival in Cedar City, Utah, and her primary film experience before Wonderstruck was a deaf student's short, 'Color the World'.",
            
            'dob' => '2003-03-06',
            'pob' => 'Bountiful, Utah, USA',
            'image_url' => 'img/actors/millicent-simmonds.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'Keanu Reeves',
            'gender' => 'male',

            'biography' => "Keanu Charles Reeves, whose first name means \cool breeze over the mountains' in Hawaiian, was born September 2, 1964 in Beirut, Lebanon. He is the son of Patricia Taylor, a showgirl and costume designer, and Samuel Nowlin Reeves, a geologist. Keanu's father was born in Hawaii, of British, Portuguese, Native Hawaiian, and Chinese ancestry, and Keanu's mother is originally from England. After his parents' marriage dissolved, Keanu moved with his mother and younger sister, Kim Reeves, to New York City, then Toronto. Stepfather #1 was Paul Aaron, a stage and film director - he and Patricia divorced within a year, after which she went on to marry (and divorce) rock promoter Robert Miller and hair salon owner Jack Bond. Reeves never reconnected with his biological father. In high school, Reeves was lukewarm toward academics but took a keen interest in ice hockey (as team goalie, he earned the nickname 'The Wall') and drama. He eventually dropped out of school to pursue an acting career.",
            
            'dob' => '1964-09-02',
            'pob' => 'Beirut, Lebanon',
            'image_url' => 'img/actors/keanu-reeves.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'Carrie-Anne Moss',
            'gender' => 'female',

            'biography' => "Carrie-Anne Moss was born and raised in Vancouver, Canada. At age 20, after studying at the American Academy of Dramatic Arts, she moved to Europe to pursue a career in modeling. While in Spain she was cast in the TV show Dark Justice which was produced in Barcelona for its first season and Los Angeles for its second. Once in LA, Carrie-Anne was cast in other series regular opportunities like Matrix (which coincidentally presaged the movie that would later make her famous), and then Aaron Spelling's Models Inc. Carrie-Anne's work was gaining attention when the late great Mali Finn brought her in to audition for The Wachowski's, who offered her the opportunity to create the iconic cyber warrior 'Trinity'. Alongside her 'One' Keanu Reeves, in stride with Laurence Fishburne and the multifaceted Hugo Weaving. Carrie-Anne Moss galvanized her place in cinematic history in one of the highest grossing sci-fi action franchises of all time.",
            
            'dob' => '1967-08-21',
            'pob' => 'British Columbia, Canada',
            'image_url' => 'img/actors/carrie-anne-moss.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'Colin Farrell',
            'gender' => 'male',

            'biography' => "Colin James Farrell was born in the Castleknock suburb of Dublin on 31 May 1976, the son of Rita and Eamon Farrell. His father played football for Shamrock Rovers FC and ran a health food shop. His uncle, Tommy Farrell, also played for Shamrock Rovers. He has an older brother named Eamon Jr. and two sisters named Claudine (who now works as his personal assistant) and Catherine. He was educated at St. 
            Brigid's National School, followed by the exclusive all-boys private school Castleknock College, and then Gormanston College in County Meath. He unsuccessfully auditioned for the boy band Boyzone around this time. He was inspired to try acting when Henry Thomas' performance in E.T. the Extra-Terrestrial (1982) moved him to tears. With his brother's encouragement, he attended the Gaiety School of Acting, but dropped out when he 
            was cast as Danny Byrne in the BBC drama Ballykissangel. While travelling in Sydney at the age of 18, Farrell became a suspect in an attempted murder case. The police sketch looked remarkably like him and he had even described blacking out during the night in question; his only alibi was a journal kept by his friend, which explained that the two had been taking MDMA on the other side of town that night.",
            
            'dob' => '1976-05-31',
            'pob' => 'Castleknock, Dublin, Ireland',
            'image_url' => 'img/actors/colin-farrell.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'Brendan Gleeson',
            'gender' => 'male',

            'biography' => "Gleeson was born in Dublin, the son of Pat (1925-2007) and Frank Gleeson (1918-2010). Gleeson has described himself as having been an avid reader as a child. He received his second-level education at St Joseph's CBS in Fairview, Dublin where he was a member of the school drama group. He received his Bachelor of Arts at University College Dublin, majoring in English and Irish. After training as an actor, he worked for several years as a secondary school teacher of Irish and English at the now defunct Catholic Belcamp College in North County Dublin, which closed in 2004. He was working simultaneously as an actor while teaching, doing semi-professional and professional productions in Dublin and surrounding areas. He left the teaching profession to commit full-time to acting in 1991. In an NPR interview to promote Calvary in 2014, Gleeson stated he was molested as a child by a Christian Brother in primary school but was in \"no way traumatised by the incident.\"",
            
            'dob' => '1955-03-29',
            'pob' => 'Dublin, Ireland',
            'image_url' => 'img/actors/brendan-gleeson.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'Tom Hardy',
            'gender' => 'male',

            'biography' => "Edward Thomas Hardy was born in the Hammersmith district of London on 15 September 1977, the only child of artist and painter Anne (née Barrett) and novelist and comedy writer Edward 'Chips' Hardy. He is of Irish descent on his mother's side. He was raised in London's East Sheen suburb. Hardy attended Tower House School, Reed's School, and Duff Miller Sixth Form College. He later studied at Richmond Drama School and the Drama Centre London, now a part of Central Saint Martins. He has named Gary Oldman, with whom he would later work on Tinker Tailor Soldier Spy, as his 'hero' and added that he mirrored scenes from Oldman while at drama school.",
            
            'dob' => '1977-09-15',
            'pob' => 'Hammersmith, London, England, UK',
            'image_url' => 'img/actors/tom-hardy.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'Michelle Williams',
            'gender' => 'female',

            'biography' => 'Michelle Ingrid Williams was born on September 9, 1980, in Kalispell, Montana, to Carla, a homemaker, and Larry R. Williams, an author and commodities trader.  She has Norwegian ancestry and her family has lived in Montana for generations. Her father twice ran unsuccessfully for the United States Senate as a Republican Party nominee. In Kalispell, Williams lived with her three paternal half-siblings and her younger sister, Paige. Although she has described her family as "not terribly closely knit", she shared a close bond with her father, who taught her to fish and shoot, and encouraged her to become a keen reader. Williams has recounted fond memories of growing up in the vast landscape of Montana. When she was nine, the family moved to San Diego, California. She has said of the experience, "It was less happy probably by virtue of it being my preteen years, which are perhaps unpleasant wherever you go." She mostly kept to herself and was self-reliant.',
            
            'dob' => '1980-09-09',
            'pob' => 'Kalispell, Montana, USA',
            'image_url' => 'img/actors/michelle-williams.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'Riz Ahmed',
            'gender' => 'male',

            'biography' => "Ahmed was born on 1 December 1982 in Wembley, a suburb in the London Borough of Brent, to a British-Pakistani family of Muhajir background. His parents moved to England from Karachi, Pakistan, during the 1970s. Ahmed's father is a shipping broker, and he is a descendant of Shah Muhammad Sulaiman, the first Muslim Chief Justice of the Allahabad High Court during British colonial rule in India. Ahmed attended Merchant Taylors' School, Northwood, through a scholarship programme. He graduated from Christ Church, Oxford University, with a degree in Philosophy, Politics and Economics (PPE). He experienced a culture shock at Oxford, nearly dropping out due to the isolating atmosphere. Instead, Ahmed organized parties to celebrate cultures which did not conform to the dominant 'elitist, white' and 'black-tie' culture of Oxford. He later studied acting at the Royal Central School of Speech and Drama.",
            
            'dob' => '1982-12-01',
            'pob' => 'London, England, UK',
            'image_url' => 'img/actors/riz-ahmed.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'Woody Harrelson',
            'gender' => 'male',

            'biography' => "Woodrow Tracy Harrelson was born in Midland, Texas, on July 23, 1961, to secretary Diane and convicted hitman Charles Voyde Harrelson. He was raised in a Presbyterian household alongside his two brothers, Jordan and Brett, the latter of whom also became an actor. Their father received a life sentence for the 1979 killing of federal judge John H. Wood Jr. Harrelson has stated that his father was rarely around during his childhood. Charles died in the United States Penitentiary, Administrative Maximum Facility on March 15, 2007. Harrelson's family was poor and relied on his mother's wages. In 1973, he moved to his mother's native city of Lebanon, Ohio, where he attended Lebanon High School, from which he graduated in 1979. He spent the summer of 1979 working at Kings Island amusement park.",
            
            'dob' => '1961-06-23',
            'pob' => 'Midland, Texas, USA',
            'image_url' => 'img/actors/woody-harrelson.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'Tom Cruise',
            'gender' => 'male',

            'biography' => "Cruise was born on July 3, 1962, in Syracuse, New York, to electrical engineer Thomas Cruise Mapother III (1934-1984) and special education teacher Mary Lee (née Pfeiffer; 1936–2017). His parents were both from Louisville, Kentucky, and had English, German, and Irish ancestry. Cruise has three sisters named Lee Anne, Marian, and Cass. One of his cousins, William Mapother, is also an actor who has appeared alongside Cruise in five films. Cruise grew up in near poverty and had a Catholic upbringing. He later described his father as 'a merchant of chaos', a 'bully', and a 'coward' who beat his children. He elaborated, \"My 'father' was the kind of person where, if something goes wrong, they kick you. It was a great lesson in my life—how he'd lull you in, make you feel safe and then, bang! For me, it was like, 'There's something wrong with this guy. Don't trust him. Be careful around him.\"",
            
            'dob' => '1962-06-03',
            'pob' => 'Syracuse, New York, USA',
            'image_url' => 'img/actors/tom-cruise.jpg',
            'popularity' => 0

        ]);
        

        Actor::create([
            'name' => 'Jennifer Connelly',
            'gender' => 'female',

            'biography' => "Jennifer Lynn Connelly was born on December 12, 1970, in Cairo, New York. After graduating from high school, Connelly studied English literature at Yale University in 1988. She has described herself as a conscientious student who wasn't really concerned with having a social life or sleeping or eating much.\" I was really nerdy and pretty much stayed in the law-school library, which is open 24 hours, most of the time I wasn't in class\". After two years at Yale, Connelly transferred to Stanford University to study drama. There, she trained with Roy London, Howard Fine, and Harold Guskin. Encouraged by her parents to continue with her film career, Connelly left college and returned to the movie industry the same year.",
            
            'dob' => '1970-12-12',
            'pob' => 'Catskill Mountains, New York, USA',
            'image_url' => '/img/actors/jennifer-connelly.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'Miles Teller',
            'gender' => 'male',

            'biography' => "Teller was born in Pennsylvania to parents Merry, a real estate agent, and Michael, a nuclear power plant engineer. He has two older sisters, Erin and Dana. His paternal grandfather was of Russian Jewish descent, and his ancestry also includes English and Irish forebears. Teller spent his early years in Pennsylvania and Delaware before his family moved to Citrus County, Florida, at age twelve. Growing up, he was involved with acting, was president of his high school's drama club, and played alto saxophone, drums, piano, and guitar. He also played baseball competitively and had dreams of turning professional. He graduated from Lecanto High School in Lecanto, Florida. Subsequently, he attended the New York University Tisch School of the Arts; there, he studied method acting at the Lee Strasberg Theatre and Film Institute and screen acting with Stonestreet Studios. He earned a BFA in drama in 2009.",
            
            'dob' => '1987-02-20',
            'pob' => 'Downingtown, Pennsylvania, USA',
            'image_url' => '/img/actors/miles-teller.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'Dwayne Johnson',
            'gender' => 'male',

            'biography' => "Johnson was born in Hayward, California on May 2, 1972, the son of Ata Johnson (née Maivia; born 1948) and former professional wrestler Rocky Johnson (born Wayde Douglas Bowles; 1944–2020). Growing up, Johnson lived briefly in Grey Lynn in Auckland, New Zealand with his mother's family, where he played rugby and attended Richmond Road Primary School before returning to the U.S. Johnson's father was a Black Nova Scotian with a small amount of Irish ancestry. His mother is Samoan. His father and tag team partner Tony Atlas were the first black tag team champions in WWE history, in 1983. His mother is the adopted daughter of Peter Maivia, who was also a professional wrestler. Johnson's maternal grandmother Lia was the first female pro wrestling promoter, taking over Polynesian Pacific Pro Wrestling after her husband's death in 1982 and managing it until 1988. Through his maternal grandfather Maivia, Johnson is a non-blood relative to the Anoa'i wrestling family. In 2008, Johnson inducted his father and grandfather into the WWE Hall of Fame.",
            
            'dob' => '1972-05-02',
            'pob' => 'Hayward, California, USA',
            'image_url' => '/img/actors/dwayne-johnson.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'Aldis Hodge',
            'gender' => 'male',

            'biography' => "Hodge was born on September 20, 1986, in Onslow County, North Carolina. Both of his parents, Aldis Basil Hodge and Yolette Evangeline Richardson, served in the U.S. Marine Corps. Hodge's mother is from Florida, while his father is originally from Dominica. Aldis is the younger brother of actor Edwin Hodge. Hodge played both the clarinet and the violin as a child, but as an adult, his focus is on the violin; he purchased his first at the age of 18. In addition to acting, Hodge designs watches, writes, and paints. In 2007, Hodge was awarded the role of Alec Hardison in the TNT series Leverage on the day of his 21st birthday. In 2009, he received a Saturn Award nomination for Best Supporting Actor on Television for this role.",
            
            'dob' => '1986-09-20',
            'pob' => 'Onslow County, North Carolina, USA',
            'image_url' => '/img/actors/aldis-hodge.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'Pierce Brosnan',
            'gender' => 'male',

            'biography' => "Brosnan was born on 16 May 1953 in Drogheda, County Louth, the only child of May (née Smith) and carpenter Thomas Brosnan. He has the same name as his grandfather, Pierce Brosnan, who in turn was named after his parents' surnames: John Brosnan and Margaret Pierce.[better source needed] For 12 years, he lived in Navan, County Meath, and said in 1999 that he considers it to be his hometown. His father abandoned the family when Brosnan was an infant. When he was four years old, his mother moved to London to work as a nurse. From that point on, he was largely brought up by his maternal grandparents, Philip and Kathleen Smith. After their deaths, he lived with an aunt and then an uncle, but was subsequently sent to live in a boarding house run by a woman named Eileen. He later said, \"Childhood was fairly solitary. I never knew my father. He left when I was an infant. To be Irish Catholic in the 1950s, and have a marriage which was not there, a father who was not there  the mother, the wife suffered greatly. My mother was very courageous. She took the bold steps to go away and be a nurse in England. Basically wanting a better life for her and myself. My mother came home once a year, twice a year.\"",
            
            'dob' => '953-05-16',
            'pob' => 'Drogheda, County Louth, Ireland',
            'image_url' => '/img/actors/pierce-brosnan.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'Allison Janney',
            'gender' => 'female',

            'biography' => "Janney was born on November 19, 1959, in Boston, Massachusetts, and raised in Dayton, Ohio. She attended the Miami Valley School in Dayton, where she was named a distinguished alumna in 2005, and the Hotchkiss School in Connecticut, where she was named Alumna of the Year in 2016. Janney initially aspired to a career in figure skating, but her tall stature and a freak accident when she was a teenager put an end to that dream. She attended Kenyon College in Gambier, Ohio, where she majored in theatre. During her freshman year, Janney met actors Paul Newman and Joanne Woodward at a play for the inaugural event of the college's newly built Bolton Theater, which Newman was directing. The couple encouraged her to continue acting and offered her guidance during the early days in her career. She went on to train at the Neighborhood Playhouse School of the Theatre in New York and then received a scholarship to study at the Royal Academy of Dramatic Art in mid-1984.",
            
            'dob' => '1959-11-19',
            'pob' => 'Boston, Massachusetts, USA',
            'image_url' => '/img/actors/allison-janney.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'Jurnee Smollett',
            'gender' => 'female',

            'biography' => "Jurnee Diana Smollett (born October 1, 1986) is an American actress. She began her career as a child actress appearing on television sitcoms, including On Our Own (1994-1995) and Full House (1992-1994). She gained greater recognition with her role in the critically acclaimed Kasi Lemmons' directed film Eve's Bayou (1997). As an adult, Smollett has starred in the films The Great Debaters (2007), Temptation: Confessions of a Marriage Counselor (2013), and Birds of Prey (2020). Her television roles include the NBC sports drama Friday Night Lights (2009-2011), the WGN America period drama Underground (2016-2017), and the HBO fantasy horror dramas True Blood (2013-2014) and Lovecraft Country (2020), receiving a nomination for the Primetime Emmy Award for Outstanding Lead Actress in a Drama Series for the latter. In 2020, Smollett portrayed superhero Dinah Lance / Black Canary in the DC Extended Universe (DCEU) feature film Birds of Prey, a role which she will reprise in the HBO Max film Black Canary, starring in the latter.",
            
            'dob' => '1986-10-01',
            'pob' => 'New York City, New York, USA',
            'image_url' => '/img/actors/jurnee-smollett.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'Logan Marshall-Green',
            'gender' => 'male',

            'biography' => "Marshall-Green was born in Charleston, South Carolina, to teacher parents. He was raised by his mother, Lowry Marshall, in Cranston, Rhode Island, while she taught theatre at Brown University. He has a twin brother named Taylor. They both attended Barrington High School in the early 1990s. He did his undergraduate studies at the University of Tennessee, Knoxville, where he also wrote for the school newspaper, The Daily Beacon, as an entertainment writer covering the bar, music, and theater scene.[citation needed] He attended the National Theater Institute in Waterford, Connecticut, and then went on to earn his Master's in Fine Arts from New York University's Graduate Acting Program at the Tisch School of the Arts.",
            
            'dob' => '1976-11-01',
            'pob' => 'Charleston, South Carolina, USA',
            'image_url' => '/img/actors/logan-marshall-green.jpg',
            'popularity' => 0

        ]);
    }
}
