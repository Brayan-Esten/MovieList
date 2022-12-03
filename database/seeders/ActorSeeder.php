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

            'biography' => '
                Emily Olivia Leah Blunt was born on 23 February 1983 in the London Borough of Wandsworth, the second of four 
                children born to Joanna, a former actress and teacher, and barrister Oliver Blunt, QC. Her siblings are Felicity, Sebastian, and Susannah. 
                Her grandfather was Major General Peter Blunt, and one of her paternal uncles is Crispin Blunt, Conservative Member of Parliament for Reigate. 
                From age seven to 14, Blunt had difficulties with stuttering. She credits a school teacher for helping her manage the stutter through acting. 
                She went on to sit on the board of directors for the American Institute for Stuttering. 
                Blunt attended Ibstock Place School in Roehampton, southwest London and, at age 16, went to Hurtwood House near Dorking, 
                Surrey, a private sixth form college known for its performing arts programme. There, she was discovered and signed by an agent.
            ',

            'dob' => '1983-02-23',
            'pob' => 'Roehampton, London, England, UK',
            'image_url' => 'img/actors/emily-blunt.jpg',
            'popularity' => rand(0, 100)

        ]);

        Actor::create([
            'name' => 'John Krasinski',
            'gender' => 'male',

            'biography' => "
                John Burke Krasinski was born on October 20, 1979, at St. Elizabeth's Hospital in the Brighton neighborhood of Boston, 
                the youngest of three boys of nurse Mary Clare (born 1949) and internist Ronald Krasinski (born 1946). 
                His mother is of Irish ancestry, while his father is of Polish descent. He was raised Catholic[10] in the Boston suburb of Newton, 
                Massachusetts. Krasinski made his stage debut as Daddy Warbucks in a sixth-grade school production of the musical Annie. Afterwards, 
                he co-starred in a satirical play written and cast by his future The Office co-star B. J. Novak when they were high school seniors. 
                Krasinski and Novak graduated from Newton South High School in 1997. Before entering college, Krasinski taught English as a foreign 
                language in Costa Rica for six months. While there, he saved a woman from drowning after she was caught in a riptide at a beach in Manuel Antonio National Park. 
                Following his time in Costa Rica, Krasinski attended Brown University, where he studied English and playwriting and wrote an honors thesis entitled 'Contents Under Pressure'. He graduated from Brown in 2001.
            ",

            'dob' => '1979-10-20',
            'pob' => 'Newton, Massachusetts, USA',
            'image_url' => 'img/actors/john-krasinski.jpg',
            'popularity' => rand(0, 100)

        ]);

        Actor::create([
            'name' => 'Millicent Simmonds',
            'gender' => 'female',

            'biography' => "
                Simmonds grew up in Bountiful, Utah in the United States. She has four siblings; two older and two younger than her.
                Prior to turning 12 months old, Simmonds lost her hearing due to a medication overdose. Her mother learned American Sign Language and 
                taught the family so they could communicate with her. Simmonds said without her family using ASL, 'I wouldn't have a relationship with 
                my own family, I wouldn't have communication.' Simmonds also has a cochlear implant. Simmonds's mother also encouraged her to read books extensively. 
                When Simmonds was three years old, she started attending the Jean Massieu School of the Deaf, where she participated in its drama club. Her first play was in A Midsummer Night's Dream as Puck. 
                After completing sixth grade, she mainstreamed at the Mueller Park Junior High School in the fall of 2015. She has performed at the Utah Shakespeare Festival in Cedar City, 
                Utah, and her primary film experience before Wonderstruck was a deaf student's short, 'Color the World'.
            ",
            
            'dob' => '2003-03-06',
            'pob' => 'Bountiful, Utah, USA',
            'image_url' => 'img/actors/millicent-simmonds.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'Colin Farrell',
            'gender' => 'male',

            'biography' => "
                Colin James Farrell was born in the Castleknock suburb of Dublin on 31 May 1976, the son of Rita and Eamon Farrell. 
                His father played football for Shamrock Rovers FC and ran a health food shop. His uncle, Tommy Farrell, also played for Shamrock Rovers. 
                He has an older brother named Eamon Jr. and two sisters named Claudine (who now works as his personal assistant) and Catherine. He was educated at St. 
                Brigid's National School, followed by the exclusive all-boys private school Castleknock College, and then Gormanston College in County Meath. 
                He unsuccessfully auditioned for the boy band Boyzone around this time. He was inspired to try acting when Henry Thomas' performance in E.T. 
                the Extra-Terrestrial (1982) moved him to tears. With his brother's encouragement, he attended the Gaiety School of Acting, but dropped out when he 
                was cast as Danny Byrne in the BBC drama Ballykissangel. While travelling in Sydney at the age of 18, Farrell became a suspect in an attempted murder 
                case. The police sketch looked remarkably like him and he had even described blacking out during the night in question; his only alibi was a journal kept 
                by his friend, which explained that the two had been taking MDMA on the other side of town that night. 
            ",
            
            'dob' => '1976-05-31',
            'pob' => 'Castleknock, Dublin, Ireland',
            'image_url' => 'img/actors/colin-farrell.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'Brendan Gleeson',
            'gender' => 'male',

            'biography' => "
                Gleeson was born in Dublin, the son of Pat (1925-2007) and Frank Gleeson (1918-2010). Gleeson has described himself as having been an avid reader as a child. He received his second-level education at St Joseph's CBS in Fairview, Dublin where he was a member of the school drama group. He received his Bachelor of Arts at University College Dublin, majoring in English and Irish. After training as an actor, he worked for several years as a secondary school teacher of Irish and English at the now defunct Catholic Belcamp College in North County Dublin, which closed in 2004. He was working simultaneously as an actor while teaching, doing semi-professional and professional productions in Dublin and surrounding areas. He left the teaching profession to commit full-time to acting in 1991. In an NPR interview to promote Calvary in 2014, Gleeson stated he was molested as a child by a Christian Brother in primary school but was in 'no way traumatised by the incident.'
            ",
            
            'dob' => '1955-03-29',
            'pob' => 'Dublin, Ireland',
            'image_url' => 'img/actors/brendan-gleeson.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'Tom Hardy',
            'gender' => 'male',

            'biography' => "
                Edward Thomas Hardy was born in the Hammersmith district of London on 15 September 1977, the only child of artist and painter Anne (née Barrett) and novelist and comedy writer Edward 'Chips' Hardy. He is of Irish descent on his mother's side. He was raised in London's East Sheen suburb. Hardy attended Tower House School, Reed's School, and Duff Miller Sixth Form College. He later studied at Richmond Drama School and the Drama Centre London, now a part of Central Saint Martins. He has named Gary Oldman, with whom he would later work on Tinker Tailor Soldier Spy, as his 'hero' and added that he mirrored scenes from Oldman while at drama school.
            ",
            
            'dob' => '1977-09-15',
            'pob' => 'Hammersmith, London, England, UK',
            'image_url' => 'img/actors/tom-hardy.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'Michelle Williams',
            'gender' => 'female',

            'biography' => '
                Michelle Ingrid Williams was born on September 9, 1980, in Kalispell, Montana, to Carla, a homemaker, and Larry R. Williams, an author and commodities trader.  She has Norwegian ancestry and her family has lived in Montana for generations. Her father twice ran unsuccessfully for the United States Senate as a Republican Party nominee. In Kalispell, Williams lived with her three paternal half-siblings and her younger sister, Paige. Although she has described her family as "not terribly closely knit", she shared a close bond with her father, who taught her to fish and shoot, and encouraged her to become a keen reader. Williams has recounted fond memories of growing up in the vast landscape of Montana. When she was nine, the family moved to San Diego, California. She has said of the experience, "It was less happy probably by virtue of it being my preteen years, which are perhaps unpleasant wherever you go." She mostly kept to herself and was self-reliant.
            ',
            
            'dob' => '1980-09-09',
            'pob' => 'Kalispell, Montana, USA',
            'image_url' => 'img/actors/michelle-williams.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'Riz Ahmed',
            'gender' => 'male',

            'biography' => "
                Ahmed was born on 1 December 1982 in Wembley, a suburb in the London Borough of Brent, to a British-Pakistani family of Muhajir background. His parents moved to England from Karachi, Pakistan, during the 1970s. Ahmed's father is a shipping broker, and he is a descendant of Shah Muhammad Sulaiman, the first Muslim Chief Justice of the Allahabad High Court during British colonial rule in India. Ahmed attended Merchant Taylors' School, Northwood, through a scholarship programme. He graduated from Christ Church, Oxford University, with a degree in Philosophy, Politics and Economics (PPE). He experienced a culture shock at Oxford, nearly dropping out due to the isolating atmosphere. Instead, Ahmed organized parties to celebrate cultures which did not conform to the dominant 'elitist, white' and 'black-tie' culture of Oxford. He later studied acting at the Royal Central School of Speech and Drama.
            ",
            
            'dob' => '1982-12-01',
            'pob' => 'London, England, UK',
            'image_url' => 'img/actors/riz-ahmed.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'Woody Harrelson',
            'gender' => 'male',

            'biography' => "
                Woodrow Tracy Harrelson was born in Midland, Texas, on July 23, 1961, to secretary Diane and convicted hitman Charles Voyde Harrelson. He was raised in a Presbyterian household alongside his two brothers, Jordan and Brett, the latter of whom also became an actor. Their father received a life sentence for the 1979 killing of federal judge John H. Wood Jr. Harrelson has stated that his father was rarely around during his childhood. Charles died in the United States Penitentiary, Administrative Maximum Facility on March 15, 2007. Harrelson's family was poor and relied on his mother's wages. In 1973, he moved to his mother's native city of Lebanon, Ohio, where he attended Lebanon High School, from which he graduated in 1979. He spent the summer of 1979 working at Kings Island amusement park.
            ",
            
            'dob' => '1961-06-23',
            'pob' => 'Midland, Texas, USA',
            'image_url' => 'img/actors/woody-harrelson.jpg',
            'popularity' => 0

        ]);

        Actor::create([
            'name' => 'Tom Cruise',
            'gender' => 'male',

            'biography' => "
                Cruise was born on July 3, 1962, in Syracuse, New York, to electrical engineer Thomas Cruise Mapother III (1934-1984) and special education teacher Mary Lee (née Pfeiffer; 1936–2017). His parents were both from Louisville, Kentucky, and had English, German, and Irish ancestry. Cruise has three sisters named Lee Anne, Marian, and Cass. One of his cousins, William Mapother, is also an actor who has appeared alongside Cruise in five films. Cruise grew up in near poverty and had a Catholic upbringing. He later described his father as 'a merchant of chaos', a 'bully', and a 'coward' who beat his children. He elaborated, '[My father] was the kind of person where, if something goes wrong, they kick you. It was a great lesson in my life—how he'd lull you in, make you feel safe and then, bang! For me, it was like, 'There's something wrong with this guy. Don't trust him. Be careful around him.'
            ",
            
            'dob' => '1962-06-03',
            'pob' => 'Syracuse, New York, USA',
            'image_url' => 'img/actors/tom-cruise.jpg',
            'popularity' => 0

        ]);
        
    }
}
