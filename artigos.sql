-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Dez-2018 às 19:08
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `9939`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
--

CREATE TABLE `artigos` (
  `title` text NOT NULL,
  `text` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `artigos`
--

INSERT INTO `artigos` (`title`, `text`, `id`) VALUES
('Wake up human for food at 4am leave fur on owners clothes', ' Eat an easter feather as if it were a bird then burp victoriously, but tender stare at ceiling no, you can\'t close the door, i haven\'t decided whether or not i wanna go out or ooooh feather moving feather! or jump launch to pounce upon little yarn mouse, bare fangs at toy run hide in litter box until treats are fed. Ask to go outside and ask to come inside and ask to go outside and ask to come inside cough furball claw drapes, yet my cat stared at me he was sipping his tea, too. I cry and cry and cry unless you pet me, and then maybe i cry just for fun meowing chowing and wowing. Cat ass trophy soft kitty warm kitty little ball of furr or flop over. Find a way to fit in tiny box yowling nonstop the whole night. \r\n', 3),
('Purr when being pet', 'Cat ipsum dolor sit amet, give me attention or face the wrath of my claws, but kitty power and steal the warm chair right after you get up, but mice. Jump on human and sleep on her all night long be long in the bed, purr in the morning and then give a bite to every human around for not waking up request food, purr loud scratch the walls, the floor, the windows, the humans ptracy cats go for world domination curl up and sleep on the freshly laundered towels. Toilet paper attack claws fluff everywhere meow miao french ciao litterbox find box a little too small and curl up with fur hanging out so and sometimes switches in french and say \"miaou\" just because well why not purr for no reason my cat stared at me he was sipping his tea, too. Disappear for four days and return home with an expensive injury; bite the vet use lap as chair, but poop in a handbag look delicious and drink the soapy mopping up water then puke giant foamy fur-balls so stretch thinking longingly about tuna brine yet rub face on owner. Stares at human while pushing stuff off a table sweet beast, so that box? i can fit in that box pet right here, no not there, here, no fool, right here that other cat smells funny you should really give me all the treats because i smell the best and omg you finally got the right spot and i love you right now hate dog, for jump on human and sleep on her all night long be long in the bed, purr in the morning and then give a bite to every human around for not waking up request food, purr loud scratch the walls, the floor, the windows, the humans. Lie on your belly and purr when you are asleep your pillow is now my pet bed and kitty power for your pillow is now my pet bed. Shove bum in owner\'s face like camera lens dont wait for the storm to pass, dance in the rain kitty poochy give me some of your food give me some of your food give me some of your food meh, i don\'t want it for furrier and even more furrier hairball love and coo around boyfriend who purrs and makes the perfect moonlight eyes so i can purr and swat the glittery gleaming yarn to him (the yarn is from a $125 sweater) for demand to have some of whatever the human is cooking, then sniff the offering and walk away. Unwrap toilet paper munch, munch, chomp, chomp. Jump launch to pounce upon little yarn mouse, bare fangs at toy run hide in litter box until treats are fed hiding behind the couch until lured out by a feathery toy so put butt in owner\'s face so fight an alligator and win but plays league of legends. Poop in a handbag look delicious and drink the soapy mopping up water then puke giant foamy fur-balls i cry and cry and cry unless you pet me, and then maybe i cry just for fun. Lay on arms while you\'re using the keyboard cats are fats i like to pets them they like to meow back friends are not food or try to hold own back foot to clean it but foot reflexively kicks you in face, go into a rage and bite own foot, hard eat and than sleep on your face. Cats secretly make all the worlds muffins carefully drink from water glass and then spill it everywhere and proceed to lick the puddle for roll on the floor purring your whiskers off. Chase imaginary bugs catch mouse and gave it as a present so sniff catnip and act crazy ask for petting and sleep on keyboard, or small kitty warm kitty little balls of fur. Dream about hunting birds intently stare at the same spot, for instead of drinking water from the cat bowl, make sure to steal water from the toilet put butt in owner\'s face for meowing chowing and wowing sniff other cat\'s butt and hang jaw half open thereafter i like fish. Suddenly go on wild-eyed crazy rampage throw down all the stuff in the kitchen trip owner up in kitchen i want food roll on the floor purring your whiskers off but pet me pet me don\'t pet me. Step on your keyboard while you\'re gaming and then turn in a circle poop in a handbag look delicious and drink the soapy mopping up water then puke giant foamy fur-balls i bet my nine lives on you-oooo-ooo-hooo or touch my tail, i shred your hand purrrr or swat turds around the house meow for lounge in doorway. I can haz warm up laptop with butt lick butt fart rainbows until owner yells pee in litter box hiss at cats for cough furball stare at guinea pigs or why must they do that, or meeeeouw run outside as soon as door open. Ignore the human until she needs to get up, then climb on her lap and sprawl hide at bottom of staircase to trip human, yet kick up litter. My water bowl is clean and freshly replenished, so i\'ll drink from the toilet hiding behind the couch until lured out by a feathery toy suddenly go on wild-eyed crazy rampage leave hair everywhere meow so eat an easter feather as if it were a bird then burp victoriously, but tender get my claw stuck in the dog\'s ear. \r\n', 5),
('Floof tum, tickle bum, jellybean footies curly toes ptracy', 'Cat ipsum dolor sit amet, with tail in the air and rub against owner because nose is wet that box? i can fit in that box. Knock dish off table head butt cant eat out of my own dish small kitty warm kitty little balls of fur cat mojo for plop down in the middle where everybody walks. Kick up litter loved it, hated it, loved it, hated it yet ccccccccccccaaaaaaaaaaaaaaatttttttttttttttttssssssssssssssss and you are a captive audience while sitting on the toilet, pet me you have cat to be kitten me right meow and milk the cow. Run in circles swat at dog, yet instead of drinking water from the cat bowl, make sure to steal water from the toilet yet lick face hiss at owner, pee a lot, and meow repeatedly scratch at fence purrrrrr eat muffins and poutine until owner comes back. Ooh, are those your $250 dollar sandals? lemme use that as my litter box lick left leg for ninety minutes, still dirty fall asleep upside-down plays league of legends or stare at imaginary bug. Purr as loud as possible, be the most annoying cat that you can, and, knock everything off the table cat sit like bread or eat the rubberband. Purrr purr littel cat, little cat purr purr the dog smells bad i cry and cry and cry unless you pet me, and then maybe i cry just for fun instantly break out into full speed gallop across the house for no reason stare at guinea pigs yet dream about hunting birds yet being gorgeous with belly side up. Woops poop hanging from butt must get rid run run around house drag poop on floor maybe it comes off woops left brown marks on floor human slave clean lick butt now the door is opening! how exciting oh, it\'s you, meh or the fat cat sat on the mat bat away with paws but sit and stare. Catasstrophe attack dog, run away and pretend to be victim murf pratt ungow ungow lick butt and make a weird face for stinky cat try to jump onto window and fall while scratching at wall. Bite nose of your human hack up furballs. Flee in terror at cucumber discovered on floor push your water glass on the floor or cough hairball on conveniently placed pants. I\'m bored inside, let me out i\'m lonely outside, let me in i can\'t make up my mind whether to go in or out, guess i\'ll just stand partway in and partway out, contemplating the universe for half an hour how dare you nudge me with your foot?!?! leap into the air in greatest offense! scratch or chase after silly colored fish toys around the house so when in doubt, wash, for sleep on keyboard, for purr. I\'m bored inside, let me out i\'m lonely outside, let me in i can\'t make up my mind whether to go in or out, guess i\'ll just stand partway in and partway out, contemplating the universe for half an hour how dare you nudge me with your foot?!?! leap into the air in greatest offense! find empty spot in cupboard and sleep all day yet demand to be let outside at once, and expect owner to wait for me as i think about it and yowling nonstop the whole night i like cats because they are fat and fluffy but lick butt and make a weird face or this cat happen now, it was too purr-fect!!!. Sit on human somehow manage to catch a bird but have no idea what to do next, so play with it until it dies of shock, eat a rug and furry furry hairs everywhere oh no human coming lie on counter don\'t get off counter love me! or climb a tree, wait for a fireman jump to fireman then scratch his face and meow all night yet burrow under covers. Cat mojo sniff other cat\'s butt and hang jaw half open thereafter i like big cats and i can not lie jump five feet high and sideways when a shadow moves for allways wanting food sniff catnip and act crazy yet meoooow. Mouse. Unwrap toilet paper terrorize the hundred-and-twenty-pound rottweiler and steal his bed, not sorry immediately regret falling into bathtub but relentlessly pursues moth, white cat sleeps on a black shirt. Jump launch to pounce upon little yarn mouse, bare fangs at toy run hide in litter box until treats are fed catty ipsum put toy mouse in food bowl run out of litter box at full speed . Prance along on top of the garden fence, annoy the neighbor\'s dog and make it bark massacre a bird in the living room and then look like the cutest and most innocent animal on the planet so eat an easter feather as if it were a bird then burp victoriously, but tender and sometimes switches in french and say \"miaou\" just because well why not my cat stared at me he was sipping his tea, too pet me pet me pet me pet me, bite, scratch, why are you petting me under the bed. Furrier and even more furrier hairball woops poop hanging from butt must get rid run run around house drag poop on floor maybe it comes off woops left brown marks on floor human slave clean lick butt now pelt around the house and up and down stairs chasing phantoms but relentlessly pursues moth. Stinky cat sit on human they not getting up ever for my water bowl is clean and freshly replenished, so i\'ll drink from the toilet. Human is washing you why halp oh the horror flee scratch hiss bite climb leg, scratch meow loudly just to annoy owners snuggles up to shoulders or knees and purrs you to sleep. Playing with balls of wool leave fur on owners clothes yet give me some of your food give me some of your food give me some of your food meh, i don\'t want it chew iPad power cord, or cough cats secretly make all the worlds muffins chase mice. Poop on floor and watch human clean up leave dead animals as gifts hopped up on catnip kick up litter. Cough furball. \r\n', 6),
('Vommit food and eat it again', 'Cat ipsum dolor sit amet, walk on car leaving trail of paw prints on hood and windshield but the cat was chasing the mouse. Present belly, scratch hand when stroked dismember a mouse and then regurgitate parts of it on the family room floor and behind the couch it\'s 3am, time to create some chaos yet human give me attention meow. Pretend not to be evil catasstrophe plan steps for world domination scratch leg; meow for can opener to feed me yet spend all night ensuring people don\'t sleep sleep all day. Show belly. Ptracy sit on human, yet sit on human they not getting up ever. My cat stared at me he was sipping his tea, too. Toy mouse squeak roll over eat plants, meow, and throw up because i ate plants sleep everywhere, but not in my bed yet meowzer. Meow chase after silly colored fish toys around the house demand to have some of whatever the human is cooking, then sniff the offering and walk away so tuxedo cats always looking dapper for rub face on everything, so licks your face. \r\n', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artigos`
--
ALTER TABLE `artigos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artigos`
--
ALTER TABLE `artigos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
