-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.40-MariaDB-log - mariadb.org binary distribution
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица crossover.article
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `article_uid_index` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы crossover.article: ~9 rows (приблизительно)
DELETE FROM `article`;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` (`id`, `uid`, `text`, `img`, `created_at`, `updated_at`, `title`) VALUES
	(7, 11, 'When LG unveiled its hardy V10 last year, it was... well, it was a little weird. With a beefy body, a double-selfie camera and a tiny second screen, the V10 was the result of LG being a little weird. Lo and behold, the phone did surprisingly well around here. Then the G5 happened. Being the first modular smartphone to sell at massive scale, the G5 represented LG fully embracing that weirdness. It was also gutsy, ambitious and ultimately disappointing -- the company even admitted the device "failed to generate sales" after replacing some high-level mobile execs. Ouch. Now, though, LG has revealed the V20, and it might succeed where the G5 failed because it isn\'t nearly as imaginative.\n\nPut another way, the V20 is not modular. The leaked renders that made the rounds before today were spot on, but people (including us) misinterpreted what that button on the phone\'s right side was. It\'s for popping V20\'s metal back plate off so you can swap out its 3,200mAh. It\'s a lot like opening a powder compact, an analogy LG couldn\'t get enough of.\n\nThe V20\'s foundation is mostly the same high-powered stuff we got with the G5 -- there\'s the usual Snapdragon 820 and 4GB of RAM, not to mention the same two-camera setup that pairs an 8-megapixel wide-angle sensor and a 16-megapixel standard sensor around back. LG also decided to release the V20 with a 5.7-inch Quad HD screen, 64GB of storage (up from the G5\'s 32GB) and a shiny new build of Android 7.0 Nougat, all squeezed into a sturdy, aluminum alloy frame. Two potential issues right off the bat: the phone\'s removable back means it can\'t be waterproof, and its face is highly reminiscent of the BlackBerry Z10. Surely LG could have drawn inspiration from a more successful phone. Still, the V20 feels much, much more premium than the G5 did.\n\nSo, what else is new here? Well, the second, smaller display picked up a few new features along the way, the like the ability to display longer signatures. The screen itself is also brighter than the V10\'s, and you can enlarge notifications that roll in, but there\'s a good chance you won\'t love it now if you didn\'t before. On the software side, the V20 is the first Nougat phone with the ability to search deep in apps you\'ve installed instead of just pre-loaded Google apps. It\'s one of those things that should\'ve been part of core Android for a while now -- too bad LG announced the feature after we played with the phone.\n\n\n\nBeyond that, there are a lot of audio and video improvements. LG updated its Steady Record feature to make on-the-go footage come out much crisper, thanks in large part to Qualcomm\'s gyro-based electronic stabilization. The phone\'s dual camera array is also helped by three forms of autofocus -- laser, phase detection and contrast -- to identify targets even faster in both photos and video. Video effects that ape traditional film and some impressive Hi-Fi audio recording chops make it clear the V20 is trying to be a real production powerhouse.\n\nAnd while you had to buy extra hardware to coax the G5 into playing high-quality audio -- hardware that wasn\'t even available everywhere -- the V20 does it just fine out of the box. LG representatives didn\'t go into a ton of detail about how the V20\'s "Quad" DAC works, short of mentioning how it cranks up volume, minimizes distortion and supports lossless music files. Still, the effect was clear: I tried running some tracks downloaded from the Google Play Store through the V20 and a pair of someone else\'s expensive Audeze headphones and the difference in volume and punchiness was a pleasant surprise.\n\nAs first impressions go, the V20 leaves a pretty good one. It\'s a solidly-built device that took parts of what made the G5 special and mashed it up with features that improve things people do every day. At the same time, it feels as though every decision LG made here was the safe choice. That\'s not necessarily a bad thing. It\'s true that Innovative products -- even ones that, like the G5, weren\'t properly polished -- influence our expectations for the future. In the meantime, though, safe bets can still pay off big, and LG has done some good work here. Stay tuned for our full review soon.', '1473234686804', '2016-09-07 07:51:27', '2016-09-07 07:51:27', 'LG\'s new V20 wants to be the all-in-one flagship the G5 wasn\'t'),
	(8, 11, 'Google\'s Safe Browsing initiative already prevents you from accessing shady websites, among other things. Now, the initiative is also making it easier for your favorite online destinations to combat various security issues as soon as they hit. The Safe Browsing console has expanded its Security Issues report to provide website owners with more context and detailed explanations about a particular security problem it finds. That could be any of the six types it can detect, including malware, deceptive pages, and harmful or uncommon downloads.\n\nBesides the detailed reports, the Safe Browsing console now also recommends different courses of action website owners can take, along with sample URLs they can use to unearth the source of the problem. These new features could help website developers fight off hackers and address potential security breaches as soon as possible, which can keep you and your information safe in turn.\n\nThe team\'s announcement post comes with a call to register for developers who haven\'t taken advantage of Safe Browsing yet:\n\n"We on the Safe Browsing team definitely recommend registering your site in Search Console even if it is not currently experiencing a security issue. We send notifications through Search Console so webmasters can address any issues that appear as quickly as possible."', '14732347492272', '2016-09-07 07:52:30', '2016-09-07 07:52:30', 'Google helps your favorite websites fight hackers'),
	(9, 11, 'GE has so far invested around $1.5 billion in 3D printing tech over the past six years, and its planned acquisition of Germany\'s SLM Solutions Group and Sweden\'s Arcam would only bolster its position in the business. At a combined cost of $1.4 billion, both companies offer an expansion of GE\'s additive manufacturing efforts, which is, as GE chairman Jeffrey R. Immelt explains, "part of GE\'s evolution into a digital industrial company."\n\nIf the acquisitions go through, both companies would end up under David L. Joyce, chief executive and president of GE Aviation, with both facilities from Arcam and SLM retaining their own management and employees. Though the pricing breakdown for both companies wasn\'t yet made public by GE, the company had offered about $33.26 (285 Swedish kronor) a share for the company, with about $42.40 for SLM Solutions.', '14732348012822', '2016-09-07 07:53:22', '2016-09-07 07:53:22', 'GE puts up $1.4 billion to acquire two 3D printing firms'),
	(10, 11, 'image we\'re all familiar with: that one with a view of its equator, bands and the Great Red Spot. That\'s why the photos above and below the fold might look like an alien world, when in reality, they\'re snapshots of the gas giant from a different angle. NASA\'s Juno spacecraft captured the planet\'s north polar region on cam two hours before its closest approach in late August. It was 120,000 miles away when the JunoCam took these pics, but it got as close as 2,600 miles above Jupiter\'s surface. The last time we caught a glimpse of the gas giant\'s polar region was back in 1974 when the Pioneer 11 probe passed by.\n\nBesides sending back new images of the planet, Juno has also beamed back radio emissions associated with its dramatic auroras. NASA had to shift the emissions\' audio rendition to a lower register since they\'re way above the range our ears can hear.', '1473234851870', '2016-09-07 07:54:12', '2016-09-07 07:54:12', 'Juno sends back a rare view of Jupiter\'s north pole'),
	(11, 11, 'Researchers have discovered a possible link between bipolar disorder and certain blood markers. The UK-based longitudinal study (PDF) started when kids were nine years old, examining if the presence of the infection-fighting interleukin-6 (IL-6), C-reactive protein and asthma or eczema had a link to hypomania when the participants were 22 years old. Turns out that higher levels of IL-6 at childhood are indicative of hypomanic symptoms later in life -- depression and psychosis -- which can lead to bipolar disorder.\n\n"Those in the top third of IL-6 at nine years had an increased risk of hypomanic symptoms aged 22 years, compared with those in the bottom third," the research paper says. What\'s more, that association apparently gets stronger when factors like sex, ethnicity and socio-economic status are taken into account. Asthma, eczema and C-reactive protein? None of those showed any relationship to hypomanic symptoms, while IL-6 and hypomania remained constant.\n\nIL-6 itself is naturally produced by the body at times of aerobic exercise, fever, infection and other trauma. New Scientist writes that the chemical can alter how the brain works as well. Specifically, the subgenual cingulate area where anxiety, memory, mood, sleep and self-esteem are governed. Treating those affected areas could help allay the effects of bipolar disorder.', '14732349006525', '2016-09-07 07:55:00', '2016-09-07 07:55:00', 'Blood test results could help predict bipolar symptoms'),
	(13, 11, 'No, Apple didn\'t invent the color pink, but it certainly made "rose gold" famous. It all started last year with the company\'s first rose gold iPhones, the 6s and 6s Plus, which quickly inspired other manufacturers to embellish their own devices with identical hues. It\'s no surprise, then, that the IFA 2016 show floor is filled with rose gold gadgets, although some would prefer to be described as "copper" or "luxury pink." Whatever it may be, it\'s become a major trend in the tech world, one that shows no sign of slowing down. With that in mind, take a look at some of the best rose gold gadgets we found in Berlin.\n\n', '14732456297692', '2016-09-07 10:53:50', '2016-09-07 10:53:50', 'IFA 2016: The rose gold edition'),
	(14, 11, 'Clubs and Looking for Group features are being rolled out to Preview members on Xbox One today and then the Xbox app on Windows 10, iOS and Android devices in the near future. Both features were originally announced during E3 2016, but now there\'s a chance to actually try them out in the wild.\n\nClubs are exactly what they sound like: Groups created and managed by players meant to foster a sense of community among anyone getting together to play a certain game. Anyone can create or join different Clubs, and you can create one for nearly anything, such as a group for your inner circle of friends to best each other at Halo or something of that nature.\n\n\nClub members can coordinate parties, play games, communicate via voice and text chat and share content across the Club together. All Clubs for a specific game will be grouped together in the Game Hub. If you\'ve got a unique name in the hopper for one you want to put together, you\'ll want to go ahead and grab it if you\'re in the Preview because there can only be one with the same name.\n\nSimilarly, Looking for Group will assist you in finding someone to play with. You can create your own LFG post with requirements such as the game you need help with, how many people you require, rules, and other types of prerequisites you want to set to make the experience as pleasant as possible. You can browse other LFG requests to see if there\'s anyone you want to join in and assist as well.\n\nIn addition to Clubs and Looking for Group becoming available today, the Gamerscore Leaderboard for Xbox One and Windows 10 app has been improved to display results for a 30-day rolling period. Plus, emojis are coming to the Xbox One\'s virtual keyboard. When communicating with Clubs or others in Groups, you can utilize various emojis with a special keyboard of them.\n\nMore details on the online tournament Arena will be coming soon, but for now these updates should tide Xbox One owners over with new social options. Now get out there and make some Clubs for us to join.', '14732457536467', '2016-09-07 10:55:53', '2016-09-07 10:55:53', 'Xbox One update preview shows off new social features'),
	(15, 11, 'New tracking method adapted to all budgets.\nLost your car and can’t remember where you parked? It happens to the best of us: wandering aimlessly through parking lots, clicking the panic button on your key chain to get your headlights to illuminate.\nYou don’t need some spendy radio transponder to keep tabs on your car. Uplinking your wheels to the great eye in the sky without breaking the bank is easier than you think.\nStandalone GPS and radio triangulation units can cost hundreds. And that’s not counting the installation and (frequently hefty) activation and monthly fees associated with whatever service you do choose. For most of us, it’s overkill.\nThe good news is that some of life’s biggest problems seem to be disappearing because of new technology.. If you frequently forget where you parked your car, there is a tiny gadget and app that could be what you’re looking for.\nWhat is it about?\nIt’s about Trackr, A small and discreet device the size of a coin that is revolutionizing the market..\ntrackr-bravo-4\nBut… How does it work?\nVery easy! It will take less than five minutes to put it to work. You simply have to pair it with your smartphone and download the free application which will allow you to locate it anytime.\nOnce this is done, you simply have to put it on your key chain, in your wallet or in any object you want to locate always. In this case you just have to hide it in your car.\nllavero-trackr\nNow just have to open the application on your mobile and you can see on the map the position of your device. If you get to lose your car, simply select “find device” and you’ll get the coordinates of the new location.\n\nHow much is it going to cost me?\nYou’re probably thinking that this device will be very expensive…. nope. This is the best part, you can acquire one for so little, the price is about 27$. Not bad considering it gives peace of mind.', '14732458066640', '2016-09-07 10:56:46', '2016-09-07 10:56:46', 'How to track your vehicle on the cheap, using your smartphone?'),
	(16, 11, 'PlayStation VR is expensive enough by itself, so you probably don\'t relish the idea of spending more just to get a taste of what the PS4 headset is like. Thankfully, you won\'t have to. Sony has revealed that PSVR\'s accompanying demo disc will include samples of eight games. A handful are definitely lighter releases that serve more as showcases (PlayStation VR Worlds most notably), but there are also tasters of games you might well buy later. You can play demos for Battlezone, Driveclub VR, the ubiquitous VR sampler EVE: Valkyrie and RIGS: Mechanized Combat League, among others.\n\nThis lineup surfaced on Sony\'s European PlayStation Blog, so don\'t be surprised if the lineup changes depending on your region. Should it remain largely intact from country to country, though, it\'s good news for many future PSVR owners. Yes, the demos are ultimately there to get you to buy games, but the breadth is important. You won\'t run out of things to try minutes after opening the box, and you\'ll get a genuinely diverse range of experiences that will give you a feel for what\'s possible in VR. That\'s particularly important when many players will know very little about VR, let alone have first-hand experience.', '14732458714152', '2016-09-07 10:57:52', '2016-09-07 10:57:52', 'The PlayStation VR includes a demo disc loaded with games'),
	(17, 11, 'NASA astronaut Jeff Williams has landed back on the planet after a record-breaking stint aboard the International Space Station. He just spent 172 days on the orbiting lab, bringing his total time spent in space to 534 days, 2 hours and 48 minutes. That makes Williams the most experienced NASA astronaut, snatching the title of "American who has spent the most time off the planet" from his colleague Scott Kelly. If you\'ll recall, Kelly came home from a one-year ISS mission in March, which brought his total to 520 days, 10 hours and 33 minutes.\n\nExpedition 48\'s Commander Williams installed an ISS space taxi dock with fellow astronaut Kate Rubins in mid-August. The dock would give Boeing and SpaceX a way to ferry astronauts to the station, finally freeing NASA from hitching a ride on Russian rockets. Since those taxis won\'t be ready until 2017 or 2018, though, Williams had to come home aboard a Soyuz with Russian cosmonauts Alexey Ovchinin and Oleg Skripochka. Besides breaking records and doing spacewalks, he also captured stunning photos of our planet from above during his stay -- check them out if you need one more reason to feel envious as a land-locked space lover.', '14732459487537', '2016-09-07 10:59:09', '2016-09-07 10:59:09', 'NASA\'s most experienced astronaut lands back on Earth'),
	(18, 11, 'Not gonna lie. I\'m a giant smartwatch nerd, and an even bigger Michael Kors fan. So when I received the invitation to review the company\'s new Android Wear timepieces, I was stoked. The Michael Kors Access range falls in line with partner company Fossil Group\'s mission to smarten up its range of wristwatches across its brands, from Fossil (duh) and Kate Spade to Emporio Armani, Diesel and Skagen. And that should only mean good things for the fashionable wearable industry. But, try as I might, I\'m having a hard time staying excited about the new MK smartwatches.', '14732460262316', '2016-09-07 11:00:27', '2016-09-07 11:00:27', 'Michael Kors Access smartwatches\' value is face deep'),
	(19, 11, 'The long-rumoured death of the iPhone\'s headphone jack has left everybody wondering: What\'s going to become of Apple\'s EarPods? Well, they\'ll probably go wireless, but according to one analyst, they won\'t come with your iPhone. They\'ll be sold separately -- and they might be expensive. KGI Securities\' Ming-Chi Kuo believes that Apple will announce a pair of high-end "AirPod" earbuds tomorrow as a premium accessory for iPhone 7 buyers. They won\'t come in the box like Apple\'s current earbuds, he says, and may not even use Bluetooth.\n\nAccording to Kuo, Apple may have designed a "Bluetooth-like communications chip" with more strict limits on power consumption. This same low-power chip may also be used to communicate with smart car systems and other home accessories. The Analyst even goes as far as to name Taiwan Semiconductor as the company he believes developed the chip.\n\nSo, if Apple\'s wireless answer to removing the headphone jack is going to be a premium accessory, what about the average user? Not to worry: Kuo believes the iPhone 7 will bundle in a pair of lighting-connector compatible earbuds or, at bare minimum, a 3.5mm to lighting adapter. Even so, take this report with a grain of salt -- Kuo has a strong history of getting these kinds of predictions right, but we won\'t know for sure until tomorrow.', '14732461701012', '2016-09-07 11:02:51', '2016-09-07 11:02:51', 'Apple\'s high-end wireless earbuds may not ship with iPhone 7'),
	(20, 13, 'Google is changing the way it indexes fashion-related content as part of an experiment involving outfits posted by fashion bloggers. Shop the Look culls various products from outfit searches so you can purchase pieces of said outfit as seen in the photo. You\'ll be able to tap through the image and explore what\'s available in a visually similar manner to the outfit via Shopping ads.\n\nFor instance, if you searched for an outfit like "little black dress," Google would offer up search results from social influencers that match the terms. If you\'re in the US on a mobile device, you\'ll see a blogger wearing a dress, glasses and shoes that link to online shops where you can purchase them.\n\nIf you\'re in the business of fashion and want your products to be seen, this might be a great way to go in the future. Given how often potential clothes buyers tend to search for images of the outfits they want to wear, ads that show exactly what they\'re looking for are a natural fit.', '14732471831625', '2016-09-07 11:19:44', '2016-09-07 11:19:44', 'Inspirational\' fashion ads sell exactly the look you\'re Googling');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;


-- Дамп структуры для таблица crossover.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `aid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_aid_index` (`aid`),
  KEY `comments_uid_index` (`uid`),
  KEY `comments_lid_index` (`lid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы crossover.comments: ~6 rows (приблизительно)
DELETE FROM `comments`;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` (`id`, `created_at`, `updated_at`, `aid`, `uid`, `text`, `lid`) VALUES
	(1, '2016-09-08 17:10:16', '2016-09-08 17:10:16', 0, 14, 'First comment ', 18),
	(2, '2016-09-08 17:10:30', '2016-09-08 17:10:30', 1, 14, 'Second comment', 18),
	(3, '2016-09-08 17:10:55', '2016-09-08 17:10:55', 1, 14, 'Other comment', 18),
	(4, '2016-09-08 17:11:06', '2016-09-08 17:11:06', 2, 14, 'Trello ', 18),
	(5, '2016-09-08 20:33:38', '2016-09-08 20:33:38', 0, 15, 'First comment ', 19),
	(6, '2016-09-08 20:33:49', '2016-09-08 20:33:49', 5, 15, 'Test2 ', 19);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;


-- Дамп структуры для таблица crossover.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы crossover.migrations: ~10 rows (приблизительно)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_10_12_000000_create_users_table', 1),
	('2014_10_12_100000_create_password_resets_table', 1),
	('2016_09_05_093821_create_atricle_table', 1),
	('2016_09_05_094439_create_comments_tale', 1),
	('2016_09_05_100442_add_email_confirmation', 1),
	('2016_09_05_134535_add_avatar_to_user', 1),
	('2016_09_05_155559_add_title_to_article', 1),
	('2016_09_05_184900_add_aid_to_comments', 1),
	('2016_09_06_145448_create_codes_tables', 1),
	('2016_09_07_150703_DropUsersCodesUnique', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Дамп структуры для таблица crossover.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы crossover.password_resets: ~0 rows (приблизительно)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


-- Дамп структуры для таблица crossover.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isConfirmed` int(11) NOT NULL DEFAULT '0',
  `confCode` int(11) NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'none',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы crossover.users: ~5 rows (приблизительно)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `isConfirmed`, `confCode`, `avatar`) VALUES
	(11, 'Alfred', 'enfros2000@gmail.com', '$2y$10$RSy.9CJCxq9bpfsrEPF2bOO9J2hiSSUq3X.wduir9cFb3bayxxA/.', '0LL3VVPCwjBiKT07MlBpfP41khm6nCr20aBL5Poabuk6HPOxy5Xe6yCelHsO', '2016-09-07 07:39:00', '2016-09-08 21:45:49', 0, 0, '1170'),
	(12, 'Serge', 'serge.bbsio@gmail.com', '$2y$10$SRN5cwi85TwM7imQx7gd0u/A4ToAYkJeGqDnUmePsUuu4fB0CMCvW', 'Aj1IfIBlb91yL7bYdlHiGiRuuzWj1ejtkZejB9tniJ9Q3DCDU1EBuPqWwpTJ', '2016-09-07 10:00:56', '2016-09-07 10:38:09', 0, 0, 'none'),
	(13, 'Galager', 'webmaster@blackbox-studio.ru', '$2y$10$dk4XYjcwN4834Ztit85bm..EZWRsLW4TR/ELEXzsNED9SSxmWt1oC', NULL, '2016-09-07 11:18:39', '2016-09-07 11:18:39', 0, 0, 'none'),
	(14, 'NewUser', 'serge.bbstudio@gmail.com', '$2y$10$1VVfT86IlFu8Ba.TR/6c/uUShYhWHqhlNpKDdvOSj0KTa1tEIqkv.', NULL, '2016-09-08 17:09:36', '2016-09-08 17:09:56', 0, 0, '1498'),
	(15, 'Galager2', 'g2524534@mvrht.com', '$2y$10$FvdjjnwAGelgB/wDRPfHBebE8eMEJNPHupL2bd8wrow8aXLA2B.X6', 'mlx4Zq7vXubTKi0TmGsO3cHbNl6g5VMPMttobqFlGpV4u53atWveOlDNBQfQ', '2016-09-08 20:33:09', '2016-09-08 20:37:40', 0, 0, '1580');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Дамп структуры для таблица crossover.users_codes
CREATE TABLE IF NOT EXISTS `users_codes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `isActivated` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы crossover.users_codes: ~2 rows (приблизительно)
DELETE FROM `users_codes`;
/*!40000 ALTER TABLE `users_codes` DISABLE KEYS */;
INSERT INTO `users_codes` (`id`, `email`, `code`, `isActivated`, `created_at`, `updated_at`) VALUES
	(16, 'jlind@hotmail.com', 12898, 0, '2016-09-08 11:30:55', '2016-09-08 11:30:55'),
	(19, 'wintheiser.monique@gmail.com', 41409, 0, '2016-09-08 11:32:02', '2016-09-08 11:32:02');
/*!40000 ALTER TABLE `users_codes` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
