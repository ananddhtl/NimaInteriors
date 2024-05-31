-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2024 at 07:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nimainteriors`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Hoe lang duurt de plaatsing van een nieuwe keuken?', '1715324870.jpeg', '<h2 class=\"ql-align-center\">Van Droom naar Realiteit: Keukenexpertise bij Nima Interiors</h2><p><br></p><p class=\"ql-align-justify\">Heb je al geruime tijd een levendig beeld, een schets, of zelfs een volledig ontwerp van je ideale keuken in gedachten? Een droomkeuken die je niet loslaat, maar waarvan je nog niet&nbsp;zeker weet hoe je die in werkelijkheid tot leven kunt brengen? Bij Nima Interiors kan je rekenen op uitstekende expertise. Wij geloven dat de fijnste details het verschil maken</p><p class=\"ql-align-justify\">Vanaf het allereerste moment tot de laatste handeling, zijn wij er om je te begeleiden bij het verwezenlijken van jouw project. Bij ons ben je meer dan een klant; je bent een partner in het creëren van iets buitengewoons. Onze showroom staat open voor al je vragen en twijfels. Aarzel niet om een afspraak te maken. We streven ernaar om jouw wensen te begrijpen en bieden advies op maat, afgestemd op jouw unieke behoeften.</p><p class=\"ql-align-justify\">Onze details maken het verschil. Nadat we elk aspect hebben besproken, gaan we over naar het ontwerp dat perfect aansluit bij jouw wensen.&nbsp;<span style=\"color: rgb(0, 0, 0);\">Bij Nima Interiors staat vakmanschap centraal. We streven naar perfectie en zetten ons in om jouw dromen tot in de kleinste details te realiseren. Kan je het dromen? Dan kunnen wij het maken.</span></p><p><br></p>', '2024-05-10 05:07:50', '2024-05-10 05:07:50'),
(3, 'Benieuwd naar de werkwijze bij Nima Interiors?', '1715325065.jpeg', '<h2>Van Droom naar Realiteit: Keukenexpertise bij Nima Interiors</h2><p class=\"ql-align-justify\">Heb je al geruime tijd een levendig beeld, een schets, of zelfs een volledig ontwerp van je ideale keuken in gedachten? Een droomkeuken die je niet loslaat, maar waarvan je nog niet&nbsp;zeker weet hoe je die in werkelijkheid tot leven kunt brengen? Bij Nima Interiors kan je rekenen op uitstekende expertise. Wij geloven dat de fijnste details het verschil maken</p><p class=\"ql-align-justify\">Vanaf het allereerste moment tot de laatste handeling, zijn wij er om je te begeleiden bij het verwezenlijken van jouw project. Bij ons ben je meer dan een klant; je bent een partner in het creëren van iets buitengewoons. Onze showroom staat open voor al je vragen en twijfels. Aarzel niet om een afspraak te maken. We streven ernaar om jouw wensen te begrijpen en bieden advies op maat, afgestemd op jouw unieke behoeften.</p><p class=\"ql-align-justify\">Onze details maken het verschil. Nadat we elk aspect hebben besproken, gaan we over naar het ontwerp dat perfect aansluit bij jouw wensen.&nbsp;<span style=\"color: rgb(0, 0, 0);\">Bij Nima Interiors staat vakmanschap centraal. We streven naar perfectie en zetten ons in om jouw dromen tot in de kleinste details te realiseren. Kan je het dromen? Dan kunnen wij het maken.</span></p><p><br></p>', '2024-05-10 05:11:05', '2024-05-10 05:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `streetno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcodeandcity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `fname`, `lname`, `phonenumber`, `email`, `streetno`, `postcodeandcity`, `iam`, `project`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Gopal', 'Tamang', 486567418, 'gopal.tamang@queswin.be', '87', '2060', 'particulars', 'newconstruction', 'test', '2024-05-06 05:15:22', '2024-05-06 05:15:22'),
(2, 'Gopal', 'Tamang', 486567418, 'gopal.tamang@queswin.be', '87', '2060', 'particulars', 'newconstruction', 'test', '2024-05-06 05:17:18', '2024-05-06 05:17:18'),
(3, 'Gopal', 'Tamang', 486567418, 'gopal.tamang@queswin.be', '87', '2060', 'particulars', 'newconstruction', 'test', '2024-05-06 05:20:44', '2024-05-06 05:20:44'),
(4, 'Gopal', 'Tamang', 486567418, 'gopal.tamang@queswin.be', '87', '2060', 'particulars', 'newconstruction', 'test', '2024-05-06 05:22:09', '2024-05-06 05:22:09'),
(5, 'Gopal', 'Tamang', 486567418, 'gopal.tamang@queswin.be', '87', '2060', 'architect', 'renovation', 'test', '2024-05-06 08:02:02', '2024-05-06 08:02:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hero_sections`
--

CREATE TABLE `hero_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `merchant_details`
--

CREATE TABLE `merchant_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `stnameandstnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcodeandcity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insta_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pininterest_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_05_082450_create_contact_us_table', 1),
(6, '2024_05_05_082643_create_blogs_table', 1),
(7, '2024_05_05_085158_create_merchant_details_table', 1),
(8, '2024_05_05_085735_create_projects_table', 1),
(9, '2024_05_05_085756_create_project_images_table', 1),
(10, '2024_05_05_090125_create_hero_sections_table', 1),
(11, '2024_05_05_090216_create_galleries_table', 1),
(12, '2024_05_10_071647_sessions_table', 2),
(13, '2024_05_11_094437_create_termanand_conditions_table', 2),
(14, '2024_05_11_094513_create_privacy_declaration_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacy_declarations`
--

CREATE TABLE `privacy_declarations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_declarations`
--

INSERT INTO `privacy_declarations` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<h1 class=\"ql-align-center\">Privacyverklaring</h1><p class=\"ql-align-center\"><br></p><p><em>Nima Interiors, gevestigd aan Herentalsebaan 301, 2150 Borsbeek België, is verantwoordelijk voor de verwerking van persoonsgegevens zoals weergegeven in deze privacyverklaring.</em></p><p>Persoonsgegevens die wij verwerken</p><p>Nima Interiors verwerkt uw persoonsgegevens doordat u gebruik maakt van onze diensten en/of omdat u deze zelf aan ons verstrekt. Hieronder vindt u een overzicht van de persoonsgegevens die wij verwerken:</p><ul><li>Voor- en achternaam</li><li>Adresgegevens</li><li>Telefoonnummer</li><li>E-mailadres</li><li>IP-adres</li><li>Locatiegegevens</li><li>Internetbrowser en apparaat type</li><li>Gegevens over uw activiteiten op onze website</li><li>Gegevens over uw surfgedrag over verschillende websites heen (bijvoorbeeld omdat dit bedrijf onderdeel is van een advertentienetwerk)</li><li>Overige persoonsgegevens die u actief verstrekt bijvoorbeeld door een profiel op deze website aan te maken, in correspondentie en telefonisch</li></ul><p><br></p><p><br></p><p><strong>Bijzondere en/of gevoelige persoonsgegevens die wij verwerken</strong></p><p><br></p><p>Onze website en/of dienst heeft niet de intentie gegevens te verzamelen over websitebezoekers die jonger zijn dan 16 jaar. Tenzij ze toestemming hebben van ouders of voogd. We kunnen echter niet controleren of een bezoeker ouder dan 16 is. Wij raden ouders dan ook aan betrokken te zijn bij de online activiteiten van hun kinderen, om zo te voorkomen dat er gegevens over kinderen verzameld worden zonder ouderlijke toestemming. Als u er van overtuigd bent dat wij zonder die toestemming persoonlijke gegevens hebben verzameld over een minderjarige, neem dan contact met ons op via info@nimainteriors.com, dan verwijderen wij deze informatie.</p><p>Met welk doel en op basis van welke grondslag wij persoonsgegevens verwerken&nbsp;</p><p>Nima Interiors verwerkt uw persoonsgegevens voor de volgende doelen:</p><ul><li>Verzenden van onze nieuwsbrief en/of reclamefolder</li><li>U te kunnen bellen of e-mailen indien dit nodig is om onze dienstverlening uit te kunnen voeren</li><li>U te informeren over wijzigingen van onze diensten en producten</li><li>Om goederen en diensten bij u af te leveren</li><li>Nima Interiors analyseert uw gedrag op de website om daarmee de website te verbeteren en het aanbod van producten en diensten af te stemmen op uw voorkeuren.</li></ul><p><br></p><p><br></p><p><strong>Geautomatiseerde besluitvorming</strong></p><p><br></p><p>Nima Interiors neemt niet op basis van geautomatiseerde verwerkingen besluiten over zaken die (aanzienlijke) gevolgen kunnen hebben voor personen. Het gaat hier om besluiten die worden genomen door computerprogramma\'s of -systemen, zonder dat daar een mens (bijvoorbeeld een medewerker van Nima Interiors) tussen zit.</p><p>Hoe lang we persoonsgegevens bewaren</p><p>Nima Interiors bewaart uw persoonsgegevens niet langer dan strikt nodig is om de doelen te realiseren waarvoor uw gegevens worden verzameld.</p><p>Delen van persoonsgegevens met derden</p><p>Nima Interiors verstrekt uitsluitend aan derden en alleen als dit nodig is voor de uitvoering van onze overeenkomst met u of om te voldoen aan een wettelijke verplichting.</p><p>Cookies, of vergelijkbare technieken, die wij gebruiken</p><p>Nima Interiors gebruikt alleen technische, functionele cookies en analytische cookies die geen inbreuk maken op uw privacy. Een cookie is een klein tekstbestand dat bij het eerste bezoek aan deze website wordt opgeslagen op uw computer, tablet of smartphone. De cookies die wij gebruiken zijn noodzakelijk voor de technische werking van de website en uw gebruiksgemak. Ze zorgen ervoor dat de website naar behoren werkt en onthouden bijvoorbeeld uw voorkeursinstellingen. Ook kunnen wij hiermee onze website optimaliseren. U kunt zich afmelden voor cookies door uw internetbrowser zo in te stellen dat deze geen cookies meer opslaat. Daarnaast kunt u ook alle informatie die eerder is opgeslagen via de instellingen van uw browser verwijderen.</p><p><br></p><p><strong>Gegevens inzien, aanpassen of verwijderen</strong></p><p><br></p><p>U heeft het recht om uw persoonsgegevens in te zien, te corrigeren of te verwijderen. Daarnaast heeft u het recht om uw eventuele toestemming voor de gegevensverwerking in te trekken of bezwaar te maken tegen de verwerking van uw persoonsgegevens door Nima Interiors en heeft u het recht op gegevensoverdraagbaarheid. Dat betekent dat u bij ons een verzoek kunt indienen om de persoonsgegevens die wij van u beschikken in een computerbestand naar u of een ander, door u genoemde organisatie, te sturen. U kunt een verzoek tot inzage, correctie, verwijdering, gegevensoverdraging van uw persoonsgegevens of verzoek tot intrekking van uw toestemming of bezwaar op de verwerking van uw persoonsgegevens sturen naar info@nimainteriors.com. Om er zeker van te zijn dat het verzoek tot inzage door u is gedaan, vragen wij u een kopie van uw identiteitsbewijs met het verzoek mee te sturen. Maak in deze kopie uw pasfoto, MRZ (machine readable zone, de strook met nummers onderaan het paspoort), paspoortnummer en Burgerservicenummer (BSN) zwart. Dit ter bescherming van uw privacy. We reageren zo snel mogelijk, maar binnen vier weken, op uw verzoek. Nima Interiors wil u er tevens op wijzen dat u de mogelijkheid heeft om een klacht in te dienen bij de nationale toezichthouder, de Autoriteit Persoonsgegevens. Dat kan via de volgende link: https://autoriteitpersoonsgegevens.nl/nl/contact-met-de-autoriteit-persoonsgegevens/tip-ons</p><p><br></p><p><br></p><p><strong>Hoe wij persoonsgegevens beveiligen</strong></p><p><br></p><p>Nima Interiors neemt de bescherming van uw gegevens serieus en neemt passende maatregelen om misbruik, verlies, onbevoegde toegang, ongewenste openbaarmaking en ongeoorloofde wijziging tegen te gaan. Als u de indruk heeft dat uw gegevens niet goed beveiligd zijn of er aanwijzingen zijn van misbruik, neem dan contact op met onze klantenservice.</p>', '2024-05-11 08:00:43', '2024-05-11 08:00:43');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'Inspiratie', 'We streven ernaar om samen met jou een ontwerp te creëren dat perfectie benadert. Bij Nima Interiors hechten we waarde aan jouw input en streven we naar een resultaat dat jouw verwachtingen overtreft en de essentie van een droomkeuken weerspiegelt.', '1715181423.jpeg', '2024-05-08 13:17:03', '2024-05-08 13:17:03'),
(4, 'Realisaties', 'Bij Nima Interiors staat vakmanschap van de hoogste kwaliteit centraal. Elk detail van jouw keuken wordt met zorg en precisie behandeld, van de keuze van de materialen tot de afwerking van de kleinste details. Met onze strenge controle en oog voor detail streven we naar niets minder dan perfectie in elk aspect van het ontwerp en de productie.', '1715328058.jpeg', '2024-05-10 06:00:58', '2024-05-10 06:00:58'),
(5, '3D-renders', 'Onze toewijding aan vakmanschap betekent dat geen detail over het hoofd wordt gezien. Van de keuze van de materialen tot de afwerking van de kleinste details, elk aspect van jouw keuken wordt met de grootste zorg en aandacht behandeld.', '1715328115.jpeg', '2024-05-10 06:01:55', '2024-05-10 06:01:55');

-- --------------------------------------------------------

--
-- Table structure for table `project_images`
--

CREATE TABLE `project_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_images`
--

INSERT INTO `project_images` (`id`, `project_id`, `images`, `created_at`, `updated_at`) VALUES
(17, 1, 'admin/projectimages/1715353132_NimaInspiratie (17 van 90).png', '2024-05-10 12:58:55', '2024-05-10 12:58:55'),
(18, 1, 'admin/projectimages/1715353433_NimaInspiratie (19 van 90).png', '2024-05-10 13:03:56', '2024-05-10 13:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `termand_conditions`
--

CREATE TABLE `termand_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `termand_conditions`
--

INSERT INTO `termand_conditions` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<h1 class=\"ql-align-center\"><span style=\"color: rgb(136, 136, 136);\">Algemene Verkoopsvoorwaarden</span></h1><p><em>Met uitzondering van aanvullende, dan wel afwijkende voorwaarden vermeld op de voorzijde van onze voor akkoord ondertekende bestelbon, hetzij op leveringsbon of op de voorzijde van de factuur, gebeurt elke verkoop en levering door Nima Interiors, onder toepassing van onderhavige algemene voorwaarden, die de cliënten van Nima Interiors geacht worden te aanvaarden zonder voorbehoud. Verwijzing door de koper naar eigen voorwaarden doen hieraan geen afbreuk, tenzij schriftelijk akkoord daartoe.</em></p><p><br></p><ul><li>Al onze offertes zijn schriftelijk en zijn slechts geldig voor een termijn van één maand, gerekend vanaf de datum van verzending. Na verloop van één maand kunnen de vooropgestelde prijzen herzien worden. Al onze offertes zijn geldig onder voorbehoud van eventuele wijzigingen na opmeting op de werf.</li><li>De prijsofferte of bestelbon wordt pas als een wederkerige overeenkomst ten overstaan van Nima Interiors beschouwd, na ontvangst door Nima Interiors van een door de koper geschreven en voor akkoord gehand tekende kopij van onderhavige prijsofferte. Iedere wijziging of aanvulling van de oorspronkelijke overeenkomst, gebeurt schriftelijk, en dient voor akkoord door beide partijen te worden ondertekend.</li><li>De levering omvat hetgeen vermeld is op de bestelbon. Wat niet vermeld wordt en dus bijbesteld wordt door de koper, maakt het voorwerp uit van een facturatie aan specifieke meerprijs. Prijzen van een offerte zijn slechts geldig voor de gehele bestelling. Voor deelbestellingen dient een nieuwe offerte opgemaakt te worden. Prijzen gehanteerd bij vroegere bestellingen zijn niet bindend voor latere nieuwe bestellingen. Wijzigingen binnen hetzelfde prijssegment worden geaccepteerd tot en met de dag van de opmeting. Indien de gevraagde wijzigingen leiden tot een prijsstijging, zal dit aan de koper gemeld worden, die alsdan finaal zal beslissen tot al dan niet wijziging van de oorspronkelijke offerte.</li><li>Eénmaal de goederen geleverd zijn, is Nima Interiors niet langer verantwoordelijk voor gebeurlijke beschadiging en vallen zij onder de verantwoordelijkheid van de koper, bouwpromotor of aannemer belast met de uitvoering. Indien de opmeting door de koper zelf gebeurt, is de koper verantwoordelijk voor de juistheid van de opgegeven maten.</li><li>Eventueel vermelde leveringstermijnen kunnen beïnvloed worden door eigen aanleveringen. Eventuele vertraging in de aanlevering geeft geen aanleiding tot enige garantie, noch tot schadevergoeding vanwege Nima Interiors en kan de koop niet teniet doen, noch een reden zijn van weigering der koopwaren. Een bestelling kan bij aankoop op afroep geplaatst worden, doch moet alleszins afgenomen worden uiterlijk binnen de 12 maanden volgend op de bestelling. Indien een bestelling op afroep geplaatst werd, doch geen afroep kan plaats vinden binnen de 49 dagen na de geraamde afroepdatum, kan Nima Interiors overgaan tot aflevering, en is de klant gehouden tot afname en betaling. Indien de klant de levering vraagt van de onder afroep geplaatste order, dient hij zulks tijdig te doen teneinde Nima Interiors in de mogelijkheid te stellen om de nodige schikkingen te treffen en planning te voorzien, waarbij een voorafgaandelijke periode van 12 weken een minimum is. Indien door reden eigen aan klant en eender van welke oorzaak de leverdatum wijzigt zullen er stockage- en extra transportkosten worden aangerekend.</li><li>De afgesproken prijs geldt voor de plaatsing op een voorbereide werf, nl. een werf, gekenmerkt door sterke, loodrechte, haakse, effen en droge muren, met aanwezigheid van operationele water-, gas- en elektriciteitstoevoer voor alle in de bestelbon voorziene toestellen.</li><li>Het personeel, een ploegverantwoordelijke, een werfverantwoordelijke, of de projectverantwoordelijke van de koper kunnen rechtsgeldig de bon der geleverde goederen aftekenen en verbinden de koper. Indien er niemand op het opgegeven leveringsadres aanwezig is op het ogenblik van de levering, wordt de leveringsbon geacht overeen te stemmen met de werkelijkheid.</li><li>Behoudens afwijkende bepalingen zijn alle rekeningen contant betaalbaar op de zetel van</li><li>Nima Interiors in de munt waarin de factuur is opgesteld. Alle prijzen zijn inclusief BTW, tenzij anders vermeld. BTW- tariefwijzigingen zijn ten laste van de koper en zijn geen reden tot annulatie van de overeenkomst. De prijzen worden vastgesteld op volgende wijze: Elke prijs wordt vastgesteld inclusief BTW, tenzij anders vermeld. Indien het BTW-tarief gewijzigd wordt vóór de facturering van het saldo van de prijs, wordt de prijs van de nog te factureren werken overeenkomstig aangepast. Bij elke bestelling dient een voorschot betaald te worden ten belope van 50% van de bestelbon (inclusief taksen). Het saldo van de levering wordt per overschrijving voldaan ten laatste 3 werkdagen voor levering of middels (gecertificeerde) bankcheque op moment van de levering. Betalingen in contanten mogen slechts tot 3000 € aanvaard worden. Montagekosten worden op het eind van de montage betaald aan de monteur. Indien de montagekost begrepen is in de bestelling, zal ter gelegenheid van de specifieke opmetingsdetail, de tegenwaarde ervan meegedeeld worden, dewelke alsdan als saldo der koopprijs bij beëindiging der montage dient betaald te worden. Vóór elke afhaling van goederen, dient de koper aan de verkoper aan te tonen dat hij het totale bedrag van zijn factuur, of van het saldo ervan, betaald heeft. Bankkosten verbonden aan een betaling, zijn steeds ten laste van de koper. Aanvaarding van wissels of andere betalingsmiddelen, doet geen schuldhernieuwing ontstaan. Behoudens andersluidende bepaling, zullen de transportkosten en stilstandkosten (wachttijd) van meer dan 10 minuten, voor elke aangevatte periode van 10 minuten, aanleiding geven tot een forfaitaire vergoeding.</li><li>De koper is bij iedere vertraging in de betaling van rechtswege en zonder ingebrekestelling een conventionele intrest verschuldigd van 7% vanaf de vervaldag van de factuur, zijnde één maand na de verzendingsdatum. De intresten van iedere begonnen maand worden voor de ganse maand aangerekend. Indien na aanmaning de klant in gebreke blijft het factuurbedrag te betalen is tevens een schadevergoeding verschuldigd van 10%, onverminderd het recht van Nima Interiors om alle kosten te verhalen om de schuld in te vorderen, met inbegrip van de kosten van juridische bijstand. De niet-betaling op de vervaldag van één enkele factuur, maakt het verschuldigd saldo van alle andere, zelfs niet vervallen facturen, van rechtswege onmiddellijk opeisbaar. Deelbetalingen worden eerst aangerekend op openstaande kosten, intresten en vervallen facturen (de oudste eerst). Een gebrek aan stipte betaling wordt beschouwd als een ernstige tekortkoming, wat Nima Interiors gerechtigd de werken en leveringen stop te zetten en/of een eenzijdige verbreking door Nima Interiors van de overkomst verrechtvaardigt. Wanneer klant aanvaardt om facturen elektronisch te ontvangen, dan zullen deze niet langer in een papieren vorm (via post) bezorgd worden. De facturen worden per mail verzonden naar het opgegeven e-mailadres. Alle geleverde materialen blijven exclusief eigendom van Nima Interiors, tot op het ogenblik dat alle betalingen vereffend zijn. Nima Interiors kan de levering van bestelde materialen opschorten, tot aanzuivering van alle achterstallige betalingen, waarbij nieuwe bestellingen contant dienen voldaan te worden, voorafgaandelijk aan de nieuwe levering. Indien er betalingsachterstand is, wordt iedere binnen garantieperiode tijdig aangevraagde tussenkomst opgeschort tot op het ogenblik van aanzuivering inclusief aankleven tot op die datum. Vanaf de levering, zijn de risico\'s van verlies en beschadiging voor de koper. Geleverde en niet-gebruikte koopwaar, worden slechts teruggenomen, mits voorafgaandelijk schriftelijk akkoord van Nima Interiors, tegen maximaal 70% van de netto gefactureerde waarde, en onder aanrekening van de transport- en eventuele herpakkingskosten.</li><li>Showroomkeukens worden gekocht in de staat waarin ze zich in de toonzaal bevinden, waarbij de koper, behoudens andersluidend akkoord, zelf instaat voor demontage en het transport. De koper blijft volledig verantwoordelijk voor eventuele schade ontstaan ten gevolge van transport of montage.</li><li>Behoudens andersluidende overeenkomst, worden de bestelde materialen geleverd in hun basisuitvoering. Voor natuurstenen werkbladen is 2 of 3 cm de standaard dikte. De koper aanvaardt de eventuele afwijkingen inzake kleur, maatvoering en oppervlaktetextuur, dewelke gangbaar zijn voor het desbetreffend product, dan wel binnen de sector als tolereerbaar worden aanzien. De materialen worden geleverd conform de normen van de eigen leverancier/fabrikant, waarin begrepen de door deze laatste tussentijds aangebrachte technische wijzigingen aan het materiaal. Voor elektro- apparatuur kan de fabrikant onaangekondigd typenummers wijzigen. De koper aanvaardt een toestel met dezelfde technische eigenschappen als het initieel bestelde model.</li><li>Alle klachten omtrent de uitvoering van de overeenkomst, dan wel omtrent de factuur, dient de koper te melden bij aangetekend schrijven, uiterlijk binnen de twee werkdagen na de levering. Het verwerken der materialen impliceert een aanvaarding.</li><li>Eventuele tekortkomingen aan de geleverde materialen/montage, is geen reden om betaling te onthouden. Nima Interiors komt haar leveringsverplichting na, in zoverre de keuken, met uitzondering voor showroomkeuken, geacht wordt zich te bevinden in een staat van oplevering, waarbij minieme tekortkomingen deel uitmaken, hetzij van nalevering, dan wel service-garantie.</li><li>Er wordt slechts garantie verstrekt, indien een specifieke bepaling daaromtrent is opgenomen in de offerte of bestelbon, dan wel wettelijk bindend is. De door Nima Interiors eventueel geboden fabrieksgarantie, slaat op materiaal en constructiefouten, waarbij uit hoofde van normale slijtage vanaf het 2de jaar, een afschrijvingspercentage gehanteerd wordt van 1% per jaar. Indien de kwaliteiten en/of eigenschappen van de geleverde materialen, in opspraak zouden zijn, en niets bepaald wordt omtrent de omvang van de garantie, zal enkel waarborg verstrekt worden in de mate dat, en gedurende de periode dat er waarborg kan worden bekomen van de eigen leverancier-fabrikant van de producten en materialen. De eventuele waarborg beperkt zich ten allen tijde tot een nalevering, hetzij het vervangen van de gebrekkige materialen, of evenwaardige, indien de oorspronkelijke niet meer beschikbaar zouden zijn. Eventuele derving of andere kosten blijven voor rekening van de koper, waarbij iedere interventie, vanaf 12 maanden na montagedatum, slechts zal geschieden onder aanrekening van uurloon en verplaatsingskosten. Tenzij Nima Interiors de plaatsing zelf zou hebben doorgevoerd van de door haar geleverde materialen, is deze onder geen enkel beding verantwoordelijk voor de goede plaatsing, noch de finale werking van de door haar geleverde systemen, hetzij materialen. Nima Interiors waarborgt geen enkel gebrek die haar oorsprong vindt in de bestaande constructies, de ondergrond, niet-aangeduide leidingen in de muur, dan wel ingevolge tussenkomsten en/of nalatigheden van de klant of een derde.</li><li>Mechanische of elektrische schade, ontstaan bij herstelling van een toestel of installatie, is ten laste van de koper, tenzij opzet vanwege Nima Interiors. Indien een bestek van herstelling of installatie vereist wordt, worden de onderzoekskosten aan de cliënt aangerekend. Bij definitieve herstelling wordt deze som als voorschot aangerekend op de totale herstelkosten. Is de oorzaak van een defect niet te wijten aan de door Nima Interiors eerder doorgevoerde herstelling, dan is er geen recht op waarborg. Garantie op herstellingen is steeds beperkt tot de vervangen onderdelen en het werkloon voor het plaatsen van die onderdelen, zonder enig recht op een hogere tussenkomst, ongeacht de omvang en aard der gevolgschade. De garantie geldt slechts in de mate en gedurende de periode dat er waarborg kan worden bekomen van de eigen leverancier-fabrikant van die producten en materialen. De garantie wordt geboden gedurende 8 dagen na herstelling.</li><li>Onderdelen voor bijkomende herstellingen nl., andere onderdelen dan de voorafgaandelijk vervangen onderdelen, vallen niet onder voornoemde waarborg, evenmin als het daaraan verbonden werkloon en de eventuele verplaatsingskosten. Schade ten gevolge van verkeerd gebruik, gebruik niet overeenstemmend met die van een goede huisvader, onkunde, netstoringen, overspanning, blikseminslag, inductie, vocht, slechte koeling, oververwarming, atmosferische storingen, verstopte leidingen en pompen, bevriezing, overbelasting bij installaties en toestellen, defecte zekeringen en stroomonderbreking van gelijk welke aard ook, verkeerde reinigingsmethoden of reinigingsmiddelen, geven geen recht op waarborg.</li><li>De koper kan zijn bestelling slechts annuleren indien de verkoop is gesloten buiten de onderneming van de verkoper; per aangetekend schrijven aan Nima Interiors binnen de 7 dagen na bestelling, en geeft aanleiding tot integrale terugbetaling van het gestorte voorschot binnen de 15 dagen na ontvangst van het aangetekend schrijven. Bij laattijdige annulering of annulering van een verkoop in toonzaal, betaalt de koper een vergoeding, gelijk aan de reeds uitgevoerde prestaties en de reeds aangekochte materialen, alsmede een forfaitaire vergoeding, gelijk aan de geldelijke waarde van 30% van het geplaatste order. Deze vergoeding is onmiddellijk opvorderbaar na ingebrekestelling. Weigering, niet-afname, of niet laten afleveren der goederen binnen de 2 maanden na de bij de bestelling geraamde leveringsperiode, wordt aanzien als contractbreuk waarbij integrale vergoeding kan worden gevorderd voor alle door de koper veroorzaakte schade.</li><li>Alle taksen en heffingen in verband met de verkoop zijn ten laste van de koper, zoals van toepassing op het ogenblik van de levering. Indien van overheidswege de toepasselijke BTW-normen zouden worden gewijzigd, is de koper gehouden deze eventuele meerkost te dragen.</li><li>Ingeval van betwisting zijn alleen de rechtbanken van Antwerpen bevoegd, dan wel het Vredegerecht van Antwerpen, indien de aard of het belang van het geschil, de bevoegdheid van het Vredegerecht zou rechtvaardigen. Geschillen worden beslecht conform Belgisch recht.</li></ul><p>BIJKOMENDE ALGEMENE VOORWAARDEN PARTICULIEREN &amp; AANNEMERS</p><p>Bestelling</p><ul><li>De prijsofferte wordt slechts als bestelling beschouwd, na ontvangst van het geschreven en gehandtekend akkoord van onderhavig document door de koper.</li><li>Leveringstermijn</li><li>De leveringstermijn bedraagt 8 tot 10 weken na definitieve opmeting en bestelling.</li><li>Levering</li><li>Eénmaal de goederen geleverd, vallen zij onder de verantwoordelijkheid van de koper, bouwpromotor of aannemer belast met de uitvoering. Het op niveau brengen van keukenmateriaal gebeurt door de zorgen van Nima Interiors. De binnenliften worden gratis en op continue basis ter beschikking van Nima Interiors gesteld om het transport van de meubelen binnen de werf te verzekeren. Indien de omstandigheden zulks vereisen, zal een buitenlift en/of werflift ter beschikking van Nima Interiors worden gesteld.</li><li>Technische plannen</li><li>De technische plannen worden overgemaakt aan Nima Interiors binnen de 8 werkdagen, na de definitieve bestelling, en na ontvangst van het te betalen voorschot. Alle bijkomende werken, rechtstreeks te wijten aan een slechte of onvolledige uitvoering van de technische plannen, zullen in regie gefactureerd worden. De door Nima Interiors opgestelde plannen maken deel uit van de overeenkomst en worden door de klant ondertekend. Wanneer de klant nalaat deze plannen te ondertekenen, en binnen de 8 dagen na het overmaken van de plannen, geen aangetekende schriftelijke bemerkingen aan Nima Interiors overmaakt, worden de plannen geacht aanvaard te zijn.</li><li>Werfvoorbereiding</li><li>Plaatsing van contactdozen, elektrische en sanitaire aansluitingen vallen onder de verantwoordelijkheid van de koper, bouwpromotor of de aannemer, belast met de uitvoering, en dit in overeenstemming met de technische plannen. Het plaatsen van de stopkranen valt onder de verantwoordelijkheid van de uitvoerende loodgieter. Ingeval er geen loodgieter zou aangesteld zijn bij de aanvang van de plaatsingswerken, zullen de door Nima Interiors te plaatsen stopkranen gefactureerd worden, De muurboring voor de luchtafvoerbuis van de dampkappen en de externe ventilatieroosters, vallen onder de verantwoordelijkheid van de koper, bouwpromotor of de aannemer belast met de uitvoering, in overeenstemming met onze technische plannen.</li><li>Plaatsingswerken</li><li>De montage van de keukens kan slechts starten nadat de technische plannen volledig en conform werden uitgevoerd, en de plaatsing van de vloerwerken en het stukwerk beëindigd werd. Over de gehele looptijd van de plaatsingswerken, stelt de koper, bouwheer of de aannemer belast met de uitvoering, elektriciteit en water, gratis ter beschikking van Nima Interiors. Indien de geplande plaatsingswerken bij aanvang dienen te worden uitgesteld om redenen die vreemd zijn aan Nima Interiors of haar onderaannemers, heeft Nima Interiors het recht op een schadevergoeding van min. 125 euro excl. BTW, per opgelopen werkdag vertraging. Elke bijkomende verplaatsing, niet toe te schrijven aan Nima Interiors of haar onderaannemers, wordt gefactureerd. De aansluiting van de elektrische en sanitaire toestellen gebeurt door onze zorgen, voor zover zij door Nima Interiors geleverd werden, en de nodige voorzieningen aanwezig zijn. Apparaten afkomstig van andere leveranciers kunnen op aanvraag door Nima Interiors geïnstalleerd worden aan de lopende tarieven, voor zover deze aanwezig zijn op de werf bij aanvang van de plaatsingswerken en op verantwoordelijkheid van de koper/bouwheer.</li></ul><p>BIJKOMENDE ALGEMENE VOORWAARDEN SCHRIJNWERKERS</p><ul><li>Studies, offertes en overeenkomsten</li><li>De offertes zijn slechts bindend wanneer zij door de zaakvoerder of de aangestelde van Nima Interiors werden ondertekend, en blijven 1 maand geldig. Alle studies, plannen, documenten, schetsen, tekeningen, stalen en ontwerpen, blijven eigendom van Nima Interiors, beschermd door de intellectuele rechten. Bij overhandiging aan de klant mogen zij niet misbruikt worden, noch door de klant, noch door derden. De klant is aansprakelijk voor elk eventueel misbruik, en Nima Interiors behoudt zich het recht om schadevergoeding te eisen. Deze bedraagt minstens 10% van de overeengekomen som. Op het eerste verzoek van Nima Interiors worden bovenvermelde stukken teruggegeven.</li><li>Uitvoering</li><li>De uitvoering wordt geschorst door onvoorziene omstandigheden, buiten de wil van Nima Interiors, zonder dat enige vergoeding verschuldigd is aan de klant. Indien de uitvoeringstermijn wordt opgeschort of onderbroken door de klant of zijn aangestelden, of door derden die in opdracht van de klant werken, is de klant een vergoeding verschuldigd van 25 euro per dag voor gederfde winst. Nima Interiors bepaalt zelf wanneer zij de werken opnieuw aanvat, zonder dat hiervoor enige vergoeding wegens vertraging verschuldigd is.</li><li>De werf dient door de klant normaal toegankelijk gemaakt te worden, en afgewerkt te worden om de normale uitvoering van de werken op een veilige manier mogelijk te maken. Nutteloze verplaatsingskosten en te lange wachttijden (meer dan 15 minuten) zullen worden aangerekend aan 15 euro per 15 minuten.</li></ul>', '2024-05-11 08:00:22', '2024-05-11 08:02:36'),
(2, '<h1 class=\"ql-align-center\"><strong style=\"color: rgb(136, 136, 136);\">Algemene Verkoopsvoorwaarden</strong></h1><p class=\"ql-align-center\"><br></p><p><em>Met uitzondering van aanvullende, dan wel afwijkende voorwaarden vermeld op de voorzijde van onze voor akkoord ondertekende bestelbon, hetzij op leveringsbon of op de voorzijde van de factuur, gebeurt elke verkoop en levering door Nima Interiors, onder toepassing van onderhavige algemene voorwaarden, die de cliënten van Nima Interiors geacht worden te aanvaarden zonder voorbehoud. Verwijzing door de koper naar eigen voorwaarden doen hieraan geen afbreuk, tenzij schriftelijk akkoord daartoe.</em></p><p><br></p><ul><li>Al onze offertes zijn schriftelijk en zijn slechts geldig voor een termijn van één maand, gerekend vanaf de datum van verzending. Na verloop van één maand kunnen de vooropgestelde prijzen herzien worden. Al onze offertes zijn geldig onder voorbehoud van eventuele wijzigingen na opmeting op de werf.</li><li>De prijsofferte of bestelbon wordt pas als een wederkerige overeenkomst ten overstaan van Nima Interiors beschouwd, na ontvangst door Nima Interiors van een door de koper geschreven en voor akkoord gehand tekende kopij van onderhavige prijsofferte. Iedere wijziging of aanvulling van de oorspronkelijke overeenkomst, gebeurt schriftelijk, en dient voor akkoord door beide partijen te worden ondertekend.</li><li>De levering omvat hetgeen vermeld is op de bestelbon. Wat niet vermeld wordt en dus bijbesteld wordt door de koper, maakt het voorwerp uit van een facturatie aan specifieke meerprijs. Prijzen van een offerte zijn slechts geldig voor de gehele bestelling. Voor deelbestellingen dient een nieuwe offerte opgemaakt te worden. Prijzen gehanteerd bij vroegere bestellingen zijn niet bindend voor latere nieuwe bestellingen. Wijzigingen binnen hetzelfde prijssegment worden geaccepteerd tot en met de dag van de opmeting. Indien de gevraagde wijzigingen leiden tot een prijsstijging, zal dit aan de koper gemeld worden, die alsdan finaal zal beslissen tot al dan niet wijziging van de oorspronkelijke offerte.</li><li>Eénmaal de goederen geleverd zijn, is Nima Interiors niet langer verantwoordelijk voor gebeurlijke beschadiging en vallen zij onder de verantwoordelijkheid van de koper, bouwpromotor of aannemer belast met de uitvoering. Indien de opmeting door de koper zelf gebeurt, is de koper verantwoordelijk voor de juistheid van de opgegeven maten.</li><li>Eventueel vermelde leveringstermijnen kunnen beïnvloed worden door eigen aanleveringen. Eventuele vertraging in de aanlevering geeft geen aanleiding tot enige garantie, noch tot schadevergoeding vanwege Nima Interiors en kan de koop niet teniet doen, noch een reden zijn van weigering der koopwaren. Een bestelling kan bij aankoop op afroep geplaatst worden, doch moet alleszins afgenomen worden uiterlijk binnen de 12 maanden volgend op de bestelling. Indien een bestelling op afroep geplaatst werd, doch geen afroep kan plaats vinden binnen de 49 dagen na de geraamde afroepdatum, kan Nima Interiors overgaan tot aflevering, en is de klant gehouden tot afname en betaling. Indien de klant de levering vraagt van de onder afroep geplaatste order, dient hij zulks tijdig te doen teneinde Nima Interiors in de mogelijkheid te stellen om de nodige schikkingen te treffen en planning te voorzien, waarbij een voorafgaandelijke periode van 12 weken een minimum is. Indien door reden eigen aan klant en eender van welke oorzaak de leverdatum wijzigt zullen er stockage- en extra transportkosten worden aangerekend.</li><li>De afgesproken prijs geldt voor de plaatsing op een voorbereide werf, nl. een werf, gekenmerkt door sterke, loodrechte, haakse, effen en droge muren, met aanwezigheid van operationele water-, gas- en elektriciteitstoevoer voor alle in de bestelbon voorziene toestellen.</li><li>Het personeel, een ploegverantwoordelijke, een werfverantwoordelijke, of de projectverantwoordelijke van de koper kunnen rechtsgeldig de bon der geleverde goederen aftekenen en verbinden de koper. Indien er niemand op het opgegeven leveringsadres aanwezig is op het ogenblik van de levering, wordt de leveringsbon geacht overeen te stemmen met de werkelijkheid.</li><li>Behoudens afwijkende bepalingen zijn alle rekeningen contant betaalbaar op de zetel van</li><li>Nima Interiors in de munt waarin de factuur is opgesteld. Alle prijzen zijn inclusief BTW, tenzij anders vermeld. BTW- tariefwijzigingen zijn ten laste van de koper en zijn geen reden tot annulatie van de overeenkomst. De prijzen worden vastgesteld op volgende wijze: Elke prijs wordt vastgesteld inclusief BTW, tenzij anders vermeld. Indien het BTW-tarief gewijzigd wordt vóór de facturering van het saldo van de prijs, wordt de prijs van de nog te factureren werken overeenkomstig aangepast. Bij elke bestelling dient een voorschot betaald te worden ten belope van 50% van de bestelbon (inclusief taksen). Het saldo van de levering wordt per overschrijving voldaan ten laatste 3 werkdagen voor levering of middels (gecertificeerde) bankcheque op moment van de levering. Betalingen in contanten mogen slechts tot 3000 € aanvaard worden. Montagekosten worden op het eind van de montage betaald aan de monteur. Indien de montagekost begrepen is in de bestelling, zal ter gelegenheid van de specifieke opmetingsdetail, de tegenwaarde ervan meegedeeld worden, dewelke alsdan als saldo der koopprijs bij beëindiging der montage dient betaald te worden. Vóór elke afhaling van goederen, dient de koper aan de verkoper aan te tonen dat hij het totale bedrag van zijn factuur, of van het saldo ervan, betaald heeft. Bankkosten verbonden aan een betaling, zijn steeds ten laste van de koper. Aanvaarding van wissels of andere betalingsmiddelen, doet geen schuldhernieuwing ontstaan. Behoudens andersluidende bepaling, zullen de transportkosten en stilstandkosten (wachttijd) van meer dan 10 minuten, voor elke aangevatte periode van 10 minuten, aanleiding geven tot een forfaitaire vergoeding.</li><li>De koper is bij iedere vertraging in de betaling van rechtswege en zonder ingebrekestelling een conventionele intrest verschuldigd van 7% vanaf de vervaldag van de factuur, zijnde één maand na de verzendingsdatum. De intresten van iedere begonnen maand worden voor de ganse maand aangerekend. Indien na aanmaning de klant in gebreke blijft het factuurbedrag te betalen is tevens een schadevergoeding verschuldigd van 10%, onverminderd het recht van Nima Interiors om alle kosten te verhalen om de schuld in te vorderen, met inbegrip van de kosten van juridische bijstand. De niet-betaling op de vervaldag van één enkele factuur, maakt het verschuldigd saldo van alle andere, zelfs niet vervallen facturen, van rechtswege onmiddellijk opeisbaar. Deelbetalingen worden eerst aangerekend op openstaande kosten, intresten en vervallen facturen (de oudste eerst). Een gebrek aan stipte betaling wordt beschouwd als een ernstige tekortkoming, wat Nima Interiors gerechtigd de werken en leveringen stop te zetten en/of een eenzijdige verbreking door Nima Interiors van de overkomst verrechtvaardigt. Wanneer klant aanvaardt om facturen elektronisch te ontvangen, dan zullen deze niet langer in een papieren vorm (via post) bezorgd worden. De facturen worden per mail verzonden naar het opgegeven e-mailadres. Alle geleverde materialen blijven exclusief eigendom van Nima Interiors, tot op het ogenblik dat alle betalingen vereffend zijn. Nima Interiors kan de levering van bestelde materialen opschorten, tot aanzuivering van alle achterstallige betalingen, waarbij nieuwe bestellingen contant dienen voldaan te worden, voorafgaandelijk aan de nieuwe levering. Indien er betalingsachterstand is, wordt iedere binnen garantieperiode tijdig aangevraagde tussenkomst opgeschort tot op het ogenblik van aanzuivering inclusief aankleven tot op die datum. Vanaf de levering, zijn de risico\'s van verlies en beschadiging voor de koper. Geleverde en niet-gebruikte koopwaar, worden slechts teruggenomen, mits voorafgaandelijk schriftelijk akkoord van Nima Interiors, tegen maximaal 70% van de netto gefactureerde waarde, en onder aanrekening van de transport- en eventuele herpakkingskosten.</li><li>Showroomkeukens worden gekocht in de staat waarin ze zich in de toonzaal bevinden, waarbij de koper, behoudens andersluidend akkoord, zelf instaat voor demontage en het transport. De koper blijft volledig verantwoordelijk voor eventuele schade ontstaan ten gevolge van transport of montage.</li><li>Behoudens andersluidende overeenkomst, worden de bestelde materialen geleverd in hun basisuitvoering. Voor natuurstenen werkbladen is 2 of 3 cm de standaard dikte. De koper aanvaardt de eventuele afwijkingen inzake kleur, maatvoering en oppervlaktetextuur, dewelke gangbaar zijn voor het desbetreffend product, dan wel binnen de sector als tolereerbaar worden aanzien. De materialen worden geleverd conform de normen van de eigen leverancier/fabrikant, waarin begrepen de door deze laatste tussentijds aangebrachte technische wijzigingen aan het materiaal. Voor elektro- apparatuur kan de fabrikant onaangekondigd typenummers wijzigen. De koper aanvaardt een toestel met dezelfde technische eigenschappen als het initieel bestelde model.</li><li>Alle klachten omtrent de uitvoering van de overeenkomst, dan wel omtrent de factuur, dient de koper te melden bij aangetekend schrijven, uiterlijk binnen de twee werkdagen na de levering. Het verwerken der materialen impliceert een aanvaarding.</li><li>Eventuele tekortkomingen aan de geleverde materialen/montage, is geen reden om betaling te onthouden. Nima Interiors komt haar leveringsverplichting na, in zoverre de keuken, met uitzondering voor showroomkeuken, geacht wordt zich te bevinden in een staat van oplevering, waarbij minieme tekortkomingen deel uitmaken, hetzij van nalevering, dan wel service-garantie.</li><li>Er wordt slechts garantie verstrekt, indien een specifieke bepaling daaromtrent is opgenomen in de offerte of bestelbon, dan wel wettelijk bindend is. De door Nima Interiors eventueel geboden fabrieksgarantie, slaat op materiaal en constructiefouten, waarbij uit hoofde van normale slijtage vanaf het 2de jaar, een afschrijvingspercentage gehanteerd wordt van 1% per jaar. Indien de kwaliteiten en/of eigenschappen van de geleverde materialen, in opspraak zouden zijn, en niets bepaald wordt omtrent de omvang van de garantie, zal enkel waarborg verstrekt worden in de mate dat, en gedurende de periode dat er waarborg kan worden bekomen van de eigen leverancier-fabrikant van de producten en materialen. De eventuele waarborg beperkt zich ten allen tijde tot een nalevering, hetzij het vervangen van de gebrekkige materialen, of evenwaardige, indien de oorspronkelijke niet meer beschikbaar zouden zijn. Eventuele derving of andere kosten blijven voor rekening van de koper, waarbij iedere interventie, vanaf 12 maanden na montagedatum, slechts zal geschieden onder aanrekening van uurloon en verplaatsingskosten. Tenzij Nima Interiors de plaatsing zelf zou hebben doorgevoerd van de door haar geleverde materialen, is deze onder geen enkel beding verantwoordelijk voor de goede plaatsing, noch de finale werking van de door haar geleverde systemen, hetzij materialen. Nima Interiors waarborgt geen enkel gebrek die haar oorsprong vindt in de bestaande constructies, de ondergrond, niet-aangeduide leidingen in de muur, dan wel ingevolge tussenkomsten en/of nalatigheden van de klant of een derde.</li><li>Mechanische of elektrische schade, ontstaan bij herstelling van een toestel of installatie, is ten laste van de koper, tenzij opzet vanwege Nima Interiors. Indien een bestek van herstelling of installatie vereist wordt, worden de onderzoekskosten aan de cliënt aangerekend. Bij definitieve herstelling wordt deze som als voorschot aangerekend op de totale herstelkosten. Is de oorzaak van een defect niet te wijten aan de door Nima Interiors eerder doorgevoerde herstelling, dan is er geen recht op waarborg. Garantie op herstellingen is steeds beperkt tot de vervangen onderdelen en het werkloon voor het plaatsen van die onderdelen, zonder enig recht op een hogere tussenkomst, ongeacht de omvang en aard der gevolgschade. De garantie geldt slechts in de mate en gedurende de periode dat er waarborg kan worden bekomen van de eigen leverancier-fabrikant van die producten en materialen. De garantie wordt geboden gedurende 8 dagen na herstelling.</li><li>Onderdelen voor bijkomende herstellingen nl., andere onderdelen dan de voorafgaandelijk vervangen onderdelen, vallen niet onder voornoemde waarborg, evenmin als het daaraan verbonden werkloon en de eventuele verplaatsingskosten. Schade ten gevolge van verkeerd gebruik, gebruik niet overeenstemmend met die van een goede huisvader, onkunde, netstoringen, overspanning, blikseminslag, inductie, vocht, slechte koeling, oververwarming, atmosferische storingen, verstopte leidingen en pompen, bevriezing, overbelasting bij installaties en toestellen, defecte zekeringen en stroomonderbreking van gelijk welke aard ook, verkeerde reinigingsmethoden of reinigingsmiddelen, geven geen recht op waarborg.</li><li>De koper kan zijn bestelling slechts annuleren indien de verkoop is gesloten buiten de onderneming van de verkoper; per aangetekend schrijven aan Nima Interiors binnen de 7 dagen na bestelling, en geeft aanleiding tot integrale terugbetaling van het gestorte voorschot binnen de 15 dagen na ontvangst van het aangetekend schrijven. Bij laattijdige annulering of annulering van een verkoop in toonzaal, betaalt de koper een vergoeding, gelijk aan de reeds uitgevoerde prestaties en de reeds aangekochte materialen, alsmede een forfaitaire vergoeding, gelijk aan de geldelijke waarde van 30% van het geplaatste order. Deze vergoeding is onmiddellijk opvorderbaar na ingebrekestelling. Weigering, niet-afname, of niet laten afleveren der goederen binnen de 2 maanden na de bij de bestelling geraamde leveringsperiode, wordt aanzien als contractbreuk waarbij integrale vergoeding kan worden gevorderd voor alle door de koper veroorzaakte schade.</li><li>Alle taksen en heffingen in verband met de verkoop zijn ten laste van de koper, zoals van toepassing op het ogenblik van de levering. Indien van overheidswege de toepasselijke BTW-normen zouden worden gewijzigd, is de koper gehouden deze eventuele meerkost te dragen.</li><li>Ingeval van betwisting zijn alleen de rechtbanken van Antwerpen bevoegd, dan wel het Vredegerecht van Antwerpen, indien de aard of het belang van het geschil, de bevoegdheid van het Vredegerecht zou rechtvaardigen. Geschillen worden beslecht conform Belgisch recht.</li></ul><p><br></p><p><br></p><p><strong>BIJKOMENDE ALGEMENE VOORWAARDEN PARTICULIEREN &amp; AANNEMERS</strong></p><p><br></p><p>Bestelling</p><ul><li>De prijsofferte wordt slechts als bestelling beschouwd, na ontvangst van het geschreven en gehandtekend akkoord van onderhavig document door de koper.</li><li>Leveringstermijn</li><li>De leveringstermijn bedraagt 8 tot 10 weken na definitieve opmeting en bestelling.</li><li>Levering</li><li>Eénmaal de goederen geleverd, vallen zij onder de verantwoordelijkheid van de koper, bouwpromotor of aannemer belast met de uitvoering. Het op niveau brengen van keukenmateriaal gebeurt door de zorgen van Nima Interiors. De binnenliften worden gratis en op continue basis ter beschikking van Nima Interiors gesteld om het transport van de meubelen binnen de werf te verzekeren. Indien de omstandigheden zulks vereisen, zal een buitenlift en/of werflift ter beschikking van Nima Interiors worden gesteld.</li><li>Technische plannen</li><li>De technische plannen worden overgemaakt aan Nima Interiors binnen de 8 werkdagen, na de definitieve bestelling, en na ontvangst van het te betalen voorschot. Alle bijkomende werken, rechtstreeks te wijten aan een slechte of onvolledige uitvoering van de technische plannen, zullen in regie gefactureerd worden. De door Nima Interiors opgestelde plannen maken deel uit van de overeenkomst en worden door de klant ondertekend. Wanneer de klant nalaat deze plannen te ondertekenen, en binnen de 8 dagen na het overmaken van de plannen, geen aangetekende schriftelijke bemerkingen aan Nima Interiors overmaakt, worden de plannen geacht aanvaard te zijn.</li><li>Werfvoorbereiding</li><li>Plaatsing van contactdozen, elektrische en sanitaire aansluitingen vallen onder de verantwoordelijkheid van de koper, bouwpromotor of de aannemer, belast met de uitvoering, en dit in overeenstemming met de technische plannen. Het plaatsen van de stopkranen valt onder de verantwoordelijkheid van de uitvoerende loodgieter. Ingeval er geen loodgieter zou aangesteld zijn bij de aanvang van de plaatsingswerken, zullen de door Nima Interiors te plaatsen stopkranen gefactureerd worden, De muurboring voor de luchtafvoerbuis van de dampkappen en de externe ventilatieroosters, vallen onder de verantwoordelijkheid van de koper, bouwpromotor of de aannemer belast met de uitvoering, in overeenstemming met onze technische plannen.</li><li>Plaatsingswerken</li><li>De montage van de keukens kan slechts starten nadat de technische plannen volledig en conform werden uitgevoerd, en de plaatsing van de vloerwerken en het stukwerk beëindigd werd. Over de gehele looptijd van de plaatsingswerken, stelt de koper, bouwheer of de aannemer belast met de uitvoering, elektriciteit en water, gratis ter beschikking van Nima Interiors. Indien de geplande plaatsingswerken bij aanvang dienen te worden uitgesteld om redenen die vreemd zijn aan Nima Interiors of haar onderaannemers, heeft Nima Interiors het recht op een schadevergoeding van min. 125 euro excl. BTW, per opgelopen werkdag vertraging. Elke bijkomende verplaatsing, niet toe te schrijven aan Nima Interiors of haar onderaannemers, wordt gefactureerd. De aansluiting van de elektrische en sanitaire toestellen gebeurt door onze zorgen, voor zover zij door Nima Interiors geleverd werden, en de nodige voorzieningen aanwezig zijn. Apparaten afkomstig van andere leveranciers kunnen op aanvraag door Nima Interiors geïnstalleerd worden aan de lopende tarieven, voor zover deze aanwezig zijn op de werf bij aanvang van de plaatsingswerken en op verantwoordelijkheid van de koper/bouwheer.</li></ul><p><br></p><p><br></p><p><strong>BIJKOMENDE ALGEMENE VOORWAARDEN SCHRIJNWERKERS</strong></p><p><strong><span class=\"ql-cursor\">﻿</span></strong></p><ul><li>Studies, offertes en overeenkomsten</li><li>De offertes zijn slechts bindend wanneer zij door de zaakvoerder of de aangestelde van Nima Interiors werden ondertekend, en blijven 1 maand geldig. Alle studies, plannen, documenten, schetsen, tekeningen, stalen en ontwerpen, blijven eigendom van Nima Interiors, beschermd door de intellectuele rechten. Bij overhandiging aan de klant mogen zij niet misbruikt worden, noch door de klant, noch door derden. De klant is aansprakelijk voor elk eventueel misbruik, en Nima Interiors behoudt zich het recht om schadevergoeding te eisen. Deze bedraagt minstens 10% van de overeengekomen som. Op het eerste verzoek van Nima Interiors worden bovenvermelde stukken teruggegeven.</li><li>Uitvoering</li><li>De uitvoering wordt geschorst door onvoorziene omstandigheden, buiten de wil van Nima Interiors, zonder dat enige vergoeding verschuldigd is aan de klant. Indien de uitvoeringstermijn wordt opgeschort of onderbroken door de klant of zijn aangestelden, of door derden die in opdracht van de klant werken, is de klant een vergoeding verschuldigd van 25 euro per dag voor gederfde winst. Nima Interiors bepaalt zelf wanneer zij de werken opnieuw aanvat, zonder dat hiervoor enige vergoeding wegens vertraging verschuldigd is.</li><li>De werf dient door de klant normaal toegankelijk gemaakt te worden, en afgewerkt te worden om de normale uitvoering van de werken op een veilige manier mogelijk te maken. Nutteloze verplaatsingskosten en te lange wachttijden (meer dan 15 minuten) zullen worden aangerekend aan 15 euro per 15 minuten.</li></ul>', '2024-05-11 08:01:34', '2024-05-11 08:01:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_sections`
--
ALTER TABLE `hero_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchant_details`
--
ALTER TABLE `merchant_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `privacy_declarations`
--
ALTER TABLE `privacy_declarations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_images_project_id_foreign` (`project_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `termand_conditions`
--
ALTER TABLE `termand_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hero_sections`
--
ALTER TABLE `hero_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchant_details`
--
ALTER TABLE `merchant_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacy_declarations`
--
ALTER TABLE `privacy_declarations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `termand_conditions`
--
ALTER TABLE `termand_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project_images`
--
ALTER TABLE `project_images`
  ADD CONSTRAINT `project_images_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
