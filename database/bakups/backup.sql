-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 13, 2023 at 08:38 AM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcc_gmc`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `publisher` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_at` datetime NOT NULL,
  `author` bigint(20) DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `publisher`, `publish_at`, `author`, `is_active`, `is_delete`, `created_at`, `updated_at`, `slug`, `is_approved`) VALUES
(11, 'Azets - Maximising your move to a cloud accounting solution', '<ul><li>Time saving</li><li>Flexibility</li><li>More informed decision-making</li><li>Enhanced data security</li><li>Ease of use</li><li>Requires minimal IT support</li><li>Helps ensure compliance</li></ul><p>If you are ready to realise the benefits to help you run and grow your business, our Digital Delivery Team are on hand to advise, support, guide and train.</p><p>Russell Frayne, Head of UK Digital Accounting Solutions, in our latest article, shares the benefits of engaging with a team who specialise in optimising your current platform, your processes, next steps and benefits of moving to the cloud.</p><p>The discussion points cover the following:</p><ul><li>The value of a systems review</li><li>Working with a specialist migration and implementation team</li><li>The importance of training</li><li>Embedding with post-implementation support</li><li>A bespoke app roadmap</li><li>Data health checks</li></ul><p>With real time access to data, business owners don’t need to wait weeks, months or until year end to know how their business is performing. With up to date data available, this allows business owners to be proactive and adapt any plans or strategy. Ultimately, cloud accounting technology allows data to be viewed as a business partner and key to driving business performance.</p><p><a href=\"https://www.azets.co.uk/news-insights/articles/maximising-your-move-to-a-cloud-accounting-solution/\">AZETS - FULL INSIGHT</a></p>', 'Andrew H', '2023-05-01 12:01:00', 62, 1, 0, '2023-11-13 14:07:43', '2023-11-13 14:07:43', 'the-benefits-of-moving-to-a-cloud-accounting-solution-are-well-documented-and-include-', 1),
(12, 'Gillespie Macandrew Achieves Double-Digit Income Growth 2023', '<p>Scottish law firm Gillespie Macandrew announces its financial results for the year ending 28 February 2023 which confirm the business achieved double digit income growth for the second consecutive year.&nbsp; Turnover reached £16.8m, representing an increase of 11% on the previous year, making the firm one of the fastest growing independent law firms in Scotland over the last 5 years.&nbsp; Growth in 2023 was achieved across the firm’s renewable energy, commercial property and dispute resolution services, as well as its market-leading land and rural business and private client activities.</p><p>Chief Executive Officer, Robert Graham-Campbell, said: “These strong results reflect the quality of our practice along with the commitment and expertise of our staff in supporting and advising our clients.”</p><p>The firm’s Chair, Michael Shaw added “We have achieved another strong set of results and continue to attract talented practitioners to our business, as well as enjoying success in nurturing and developing talent from within.“</p><p>Earlier this year the firm appointed five new partners in its Corporate, Family Law, Housebuilder and Private Client teams with internal promotions for Ross MacRae, Sharon Murray and Andrew Leslie. Private client and Chartered Tax Adviser, David Mowlem joined from Turcan Connell in May 2023, while corporate law specialist Alan Gilfillan returned to the firm from Balfour + Manson in July 2023, having completed his traineeship at Gillespie Macandrew.</p><p>Gillespie Macandrew has offices in Edinburgh, Glasgow and Perth and advises clients on all areas of land and rural business, private client, commercial real estate, energy, tax and disputes, combining a personal approach with industry-leading expertise.</p><p><a href=\"http://www.gillespiemacandrew.co.uk/\">GILLESPIE MACANDREW</a></p>', 'Andrew H', '2023-05-02 12:07:00', 62, 1, 0, '2023-11-13 14:09:39', '2023-11-13 14:11:48', 'gillespie-macandrew-achieves-double-digit-income-growth', 1),
(13, 'Perth Sportswoman\'s Dinner 2023', '<p>The Ladies of King James VI Golf Club are bringing to you a fantastic evening of fun, food, prizes, entertainment and dancing. We are delighted to announce A &amp; J STEPHEN Ltd as the main sponsor of the event.</p><p>The evening will commence with a welcome drink courtesy of THE BATHROOM COMPANY and photographs with our in-house photographer.&nbsp;</p><p>In addition to a delicious 3-course meal prepared by the quality Chefs of the Salutation Hotel, the event includes elimination game(s); auction and raffle. And that\'s us only getting started! For our After Dinner Speaker we are absolutely delighted to have lined up the award winning actress &amp; playwriter ISOBEL RUTTER. And we are not done yet. STRIKE A CHORD will have you all kicking off your shoes and filling the dancefloor when they perform some of the best songs and music from around the world keeping us singing and dancing until the bar closes and our carriages await.&nbsp;</p><p>Tickets are priced at £60 per person. Available by emailing&nbsp;<a href=\"mailto:theperthsportswomansdinner@gmail.com\">theperthsportswomansdinner@gmail.com</a>, or by messaging us via <a href=\"https://www.facebook.com/PerthSportswomansDinner\">Facebook</a>.</p><p>Individual tickets or tables available. Time to get your team, clubs, friends together and join us for an amazing night.&nbsp;</p><p>Raising funds for our Club and our Get Into Golf Ladies program.</p>', 'Andrew H', '2023-05-03 12:09:00', 62, 1, 0, '2023-11-13 14:11:10', '2023-11-13 14:11:10', 'we-are-delighted-to-announce-that-tickets-are-now-on-sale-for-the-not-to-be-missed-ladies-night-out-of-2023-', 1),
(14, 'Evalucia: Fourteen Years Of Fashion Show', '<p>Our Fourteen Years of Fashion Event will showcase our Autumn 23 Collections, we will kick off&nbsp;the event with a glass of \"Edinburgh gin fizz cocktail\" and canapes, then its time to take your seats for a day of fun, fashion and fundraising for MND Scotland.</p><p>All profit raised from ticket sales and any other fundraising activities will be donated to MND Scotland.</p><p>Please note full names of anyone attending this event in our notes section at checkout- if you could kindly state both their first and surname.</p><p>Should your attendee name change, please use the originally noted name at the door or contact us via email with the name of the person attending.</p><p>We can\'t wait to welcome you to our Fourteen Years of Fashion Event! X</p><p>That Bar&nbsp;145-151 South St, Perth PH2 8NY.</p><p><a href=\"https://evaluciaboutique.co.uk/products/fourteen-years-of-fashion-show\">BOOK HERE</a></p>', 'Andrew H', '2023-05-04 12:14:00', 62, 1, 0, '2023-11-13 14:29:53', '2023-11-13 14:29:53', 'join-us-for-a-day-of-fabulous-fashion-fun-fundraising-and-fizz-', 1),
(15, 'Business Energy Scotland: Get Ready for Winter by Insulating Against High Energy Bills', '<p>To provide a comfortable environment for staff and customers, heating is essential. In Scotland it is essential for many months and can be costly – for many businesses, heating costs can account for as much as half of energy bills.</p><p>So, the last thing businesses want to do is to let the precious heat simply go to waste because walls, roofs and floors are poorly insulated.&nbsp;</p><p>The Scottish Government’s SME Loan Scheme is offering eligible businesses, including charities, interest free loans with cashback grants of up to £20,000 .</p><p>Unless the businesses in your network are operating out of modern, well insulated buildings, this free webinar is for them.</p><p><strong>Delegates will:</strong></p><ul><li>Learn how they can check if their current insulation is sufficient.</li><li>Understand typical insulation costs and savings.</li><li>Discover the key steps to a successful insulation project - that will maximise savings and comfort even in hard-to-treat buildings.</li><li>Find out about free support and funding that is currently available.</li></ul><p><strong>Who should attend?</strong></p><p>Ideal for anyone in your network who influences or has direct responsibility for environmental performance, as well as members of management teams engaged in organisational improvement.</p><p><a href=\"https://businessenergyscotland.org/event/get-ready-for-winter-by-insulating-against-high-energy-bills/\">BOOK HERE</a></p>', 'Andrew H', '2023-05-05 12:30:00', 62, 1, 0, '2023-11-13 14:31:52', '2023-11-13 14:31:52', 'help-your-network-get-ready-for-winter-it-s-the-perfect-time-to-act', 1),
(16, 'Perthshire Chamber of Commerce: Star Awards 2023', '<p>We are delighted to respectfully announce that entries for our Business Star Awards 2023 are now open and we are thrilled to reveal that Binn Group continue as our main sponsor – we are extremely grateful for this amazing support, which make this event possible. This event takes place at the Crieff Hydro Hotel on Friday 24th November at 1900.</p><p>Applications are open to all businesses in Perthshire/Perth and Kinross and you can enter up to three categories.&nbsp;</p><p>Entries close at&nbsp;<strong>1700 on Thursday 12</strong>th<strong>&nbsp;October</strong>&nbsp;and a shortlist will be announced and winners revealed at the event on the&nbsp;<strong>Friday 24th November</strong>.</p><p>Please see the categories, their descriptions and access to online application below.</p><p>Tickets for the event – with fizz on arrival, a delicious three course meal with wine, coffee and petit fours, hosted awards ceremony, fundraiser and live music with Groove Culture into the wee small hours are available:</p><p>£95+vat pp for a member or £900 + VAT for a table of 10.</p><p>Non-members are £105 + VAT pp or £1000 + VAT for a table of 10.</p><p>Price is per person or bookings of ten to twelve – tables sit from 10-12</p><p><a href=\"https://businessstarawards.com/\">STAR AWARDS WEBSITE</a></p>', 'Andrew H', '2023-05-06 12:35:00', 62, 1, 0, '2023-11-13 14:37:09', '2023-11-13 14:37:09', 'the-2023-star-awards-applications-are-now-open-', 1),
(17, 'SCC QEI: Take Our Latest Chamber Business Survey!', '<p>ur quarterly business survey is the largest running in Scotland as well as being among the most well regarded and respected trackers of business sentiment in the Scottish economy.</p><p>Results from the survey are fed into a national picture and shared directly with policymakers in government and across the political spectrum, which support our lobbying for business on your behalf.<br>&nbsp;<br>The&nbsp;<a href=\"https://www.scottishchambers.org.uk/press_policy/chamber-president-issues-wake-up-call-to-governments-as-business-investment-flatlines\">last survey</a>&nbsp;indicated that labour costs are now the biggest cost pressure facing firms, that investment has generally flatlined, and that concern from interest rates is on the rise.<br>&nbsp;<br><strong>Are these issues impacting your business?</strong><br>&nbsp;<br>Let us know by taking&nbsp;<strong>just a few minutes of your time</strong>&nbsp;to share your views in our survey, <strong>to inform our policy platform</strong>.<br>&nbsp;<br>For completing the survey, there is also a chance to win to win either: £100 for a&nbsp;charity of your choice, or a £100 voucher for a supermarket of your choice.</p><p><a href=\"https://bit.ly/SCCQEIQ32023\">TAKE THE SURVEY</a></p>', 'Andrew H', '2023-05-08 12:38:00', 62, 1, 0, '2023-11-13 14:39:55', '2023-11-13 14:39:55', 'scottish-chambers-of-commerce-quarterly-economic-indicator', 1),
(18, 'UK faces stark choice of higher taxes or decline in public services, warns IFS', '<p>In an in-depth study of the UK tax system, the Institute for Fiscal Studies thinktank said the already high level of taxes and the weak prospects for growth meant voters faced a tough choice.<br><br>The IFS said if the political choice was to pay higher taxes, root-and-branch reform of the system would be needed to reduce the economic pain that higher levies would involve. This was because every one of the UK’s principal taxes was flawed, it added.<br><br>The report, which was produced in partnership with the innovation foundation Nesta, noted that capital was taxed at a lower rate than income; the income tax system has been made more complex since the Conservatives came to power in 2010; exemptions from VAT cost the exchequer £100bn a year; the council tax system in England and Scotland was based on property valuations dating back to 1991; and environmental levies lacked consistency.</p><p>The thinktank said it was not inevitable that taxes would rise, but added: “Without tax rises, UK public service and benefits provision will not simply tread water, it will deteriorate. Unless levels of tax increase substantially, a reduction in the scope of the public services that the British state provides is likely inevitable.<br><br>“Unless something major changes – such as an acceleration in economic growth – it will not be possible to maintain public services and keep tax at current levels.”</p><p><a href=\"https://www.theguardian.com/politics/2023/aug/24/uk-faces-stark-choice-of-higher-taxes-or-decline-in-public-services-ifs\">ARTICLE</a></p><p><a href=\"https://ifs.org.uk/articles/taxes-will-probably-be-increased-they-must-be-improved\">IFS</a></p>', 'Andrew H', '2023-05-09 12:40:00', 62, 1, 0, '2023-11-13 14:41:13', '2023-11-13 14:41:13', 'britain-faces-a-stark-choice-between-paying-higher-taxes-or-accepting-an-inevitable-deterioration-in-public-services-and-the-welfare-state-a-report-says-', 1),
(19, 'UK interest rates to peak at 5.5% in September, economists predict', '<p>A fresh poll of economists by Reuters suggests the Bank will approve a 15th consecutive increase in interest rates at its next meeting on 21 September as part of efforts to combat price inflation, which is still more than three times higher than its 2% target.</p><p>All but one of the 62 economists surveyed said they expected the Bank’s base rate to rise by a quarter of a percentage point next month, taking rates from 5.25% to 5.5%. The only outlier expected a half-point hike, which would take rates to 6%.</p><p>The Bank has been raising rates at a clip in an effort to lower surging inflation, which peaked at 11.1% last October and has since eased to 6.8% in July.</p><p>The Reuters poll shows that economists expect inflation to average at 6.8% this quarter, before falling to 4.7% in the fourth quarter. It is not forecast to drop below the 2% target until at least 2025.</p><p>However, policymakers must consider the consequences of further rate hikes. Higher borrowing costs have weighed on the housing market – as consumers avoid costlier mortgages – and private sector activity across the UK.</p><p><a href=\"https://www.theguardian.com/business/2023/aug/24/uk-interest-rates-to-peak-at-55-in-september-economists-predict\">ARTICLE</a></p><p><a href=\"https://www.reuters.com/markets/rates-bonds/boe-bank-rate-peak-seen-550-strong-chance-575-2023-08-24/\">REUTERS</a></p>', 'Andrew H', '2023-05-09 12:47:00', 62, 1, 0, '2023-11-13 14:48:41', '2023-11-13 14:48:41', 'uk-interest-rates-to-peak-at-5-5-in-september-economists-predict-uk-interest-rates-will-peak-at-5-5-next-month-as-bank-of-england-policymakers-try-to-minimise-the-impact-of-higher-borrowing-costs-on-t', 1),
(20, 'Azets: The Five Building Blocks of Technology for SMEs', '<p><strong>1. Technology assessment – what do we need?</strong></p><p>The first building block is carrying out a technology assessment and review, asking ‘what do we need technology to do for the business’?</p><p>As you grow and develop your business you are increasingly likely to come up against a number of resource constraints, whether that is your productive capacity or having enough customers to sell to. Technology can help you find ways of optimising those resources, for example by using automation to free up staff time, helping you pinpoint customer needs, or organising your production flow more efficiently to raise productivity. A key point of harnessing technology is to enable your business to get more out of what it has already and to grow the number of products, services and customers.</p><p>This could be data capture and processing, financial management, forecasting, monitoring cashflow, stock and inventory data. If there are current processes in place to track and monitor this information, the technology and associated processes and procedures can be reviewed to see how the boundaries can be pushed and improvements achieved.</p><p><strong>2. Mindset shift</strong></p><p>There is a requirement from staff across the business to look past the task of implementing the technology and into the benefits that using it will bring.</p><p>There are various ways in which the mindset shift can be dealt with – perhaps it is an incremental approach, a department at a time, for example, the Finance Function, or an update across the whole business in one go.</p><p>Done correctly, and once the mindset has changed and benefits are made tangible, businesses can digitise and make significant advances in a relatively short period of time.</p><p><strong>3. Financial investment</strong></p><p>Thanks to the cloud and digital connectivity, technology has never been more accessible or affordable than it is today. There are some really powerful, inexpensive, accessible software solutions to help every shape and size of SME power up their business. Investing in technology no longer requires a big upfront cost – and the vast majority of technology platforms in the cloud are available on a monthly subscription.</p><p>The cost of simple accounting cloud software, which has a huge number of features and a great amount of capability and connectivity, starts at no more than £25-£30 a month.</p><p>The financial investment should be viewed as exactly that – an investment, not a cost to the business. The long-term gain of adopting and embracing technology gives many benefits – real time and critical business information, forecasting, KPI monitoring, business performance and so on. All of this data in turn helps the business to grow, therefore a critical investment to ensure a business remains on track to achieve its strategic and performance objectives.</p><p><strong>4. Choosing the right technology</strong></p><p>There is a lot of technology and apps available – but SMEs need to start with the basics and understand the needs of their own business and what is required from technology to improve performance and help them grow.</p><p>We have worked with many clients to review business needs and the technology that will help meet objectives.</p><p>Making marginal and progressive improvements can involve one piece of technology that can dramatically improve the data available to a business, in turn helping drive decisions. Therefore, our recommendation would always be to choose the right technology from the start – everything all at once doesn’t necessarily bring all the benefits at once and can have the opposite effect.</p><p>For example, interpreting figures and data to drive strategic decisions is a key benefit of technology, but technology cannot make the decisions – this will still involve people and the right staff to make better, more effective and quicker decisions.</p><p>Technology gives staff and businesses the gift of time to focus on running and growing the business. Technology can plug resource restraints, create capacity for more jobs as the firm grows and needs more staff – ultimately helping the business to grow.</p><p>Azets’ team of trusted business advisors can help SMEs plot and organise the structure so staff feel empowered by the technology and experience the benefits. And our Software Solutions team are experts in matching businesses to software that help SMEs thrive. By working closely with business leaders to understand needs, using our extensive knowledge of the market, we design a bespoke solution that will help you stay compliant, improve your efficiency, connect your people and achieve your commercial goals.</p><p><strong>5. Operational structure and staff</strong></p><p>There is a misconception that technology will take away jobs, however that is not necessarily the case. Technology is an enabler for growth as it takes away the mundane, administrative heavy tasks allowing staff to focus on other activities that drive the business.</p><p><strong>A cyclical process</strong></p><p>Once businesses have completed the first five building blocks, the process starts again. Digital transformation is a journey, a cyclical process and not an overnight one. Once a business and staff are reaping the benefits of technology, the process can begin again to evolve, use more technology to drive further business decisions and make newer technology investments.</p><p>Implementing technology is not solely about buying the technology – there are layers to consider first to make sure technology is applied correctly.</p><p>Azets are platinum partners for all leading cloud software solution providers in the UK and have a unique, strategic partnership with Xero, and use the latest technology across our business to empower our clients and teams. Azets have helped many clients and businesses transform their businesses through technology.</p><p>To find out more about the benefits of implementing technology in your business or for a steer on the next steps to improve on your technology currently, contact Lynne Wilson, by emailing <a href=\"mailto:lynne.wilson@azets.co.uk\">lynne.wilson@azets.co.uk</a> or call 01738 441 888.</p>', 'Andrew H', '2023-05-10 12:49:00', 62, 1, 0, '2023-11-13 14:50:27', '2023-11-13 14:50:27', 'lynne-wilson-accounts-business-advisory-services-partner-discusses-the-five-building-blocks-of-technology-and-how-to-work-through-these-to-transform-and-grow-your-business-the-building-blocks-are-impo', 1),
(21, 'Platinum Partner UHI Perth ASW wins Best Health and Fitness Business in Perthshire', '<p>Over 150 businesses were represented across Perth, Dundee, and Angus at Scotland\'s Business Awards. The ASW was recognised for creating and developing a strong sense of community to students, staff and community users across the gym, sport and climbing businesses.</p><p>It was also commended for supporting students into the workplace, offering work-based learning and student employment. It was also praised for the outstanding partnership work it has developed over the last seven years.</p><p>Gareth McKenna, Head of Business Development who collected the award with his ASW colleagues said: “This award is recognition of the work ASW has carried out in the last seven years. We are so thankful to all our loyal customers who have not only supported us throughout this time but took the time to vote for us and sent fabulous testimonials to the Scotland Business Award panel.</p><p>\"I want to especially recognise the role our staff at ASW have played in receiving this award, they have gone above and beyond since we opened, they have shown resilience, a huge work ethic, innovation and at all times have put our customers and members first in their day-to-day work. They deserve great credit for this award and I extremely proud of them, we simply would not have won this award without their commitment. Many thanks to everyone who voted for us, we are very proud.\"</p><p>ASW will now go to Glasgow to represent Perthshire in the National Finals in Glasgow in October.</p>', 'Andrew H', '2023-05-11 12:51:00', 62, 1, 0, '2023-11-13 14:52:54', '2023-11-13 14:52:54', 'last-night-at-a-glittering-black-tie-ceremony-in-dundee-the-academy-of-sport-and-wellbeing-asw-picked-up-the-top-award-for-the-best-health-and-fitness-business-in-perthshire-', 1),
(22, 'Craighead Wind Farm - Opportunities for Local Businesses and Suppliers', '<p>Renewable energy company <strong>Galileo</strong> is proposing a wind farm of up to 10 turbines (up to 60MW) near <strong>Carnbo</strong> in Kinross-shire. It is committed to ensuring,&nbsp;wherever reasonably practicable,&nbsp;&nbsp;local contractors and employees are used in all aspects of wind farm development.</p><p>These include opportunities for construction, fencing, drainage and forestry contractors, as well as local hospitality providers, such as hotels and B&amp;Bs.</p><p>Galileo is keen to hear from local businesses who may be able to offer skills and services to Craighead Wind Farm. If you are a local business and would like to know more about opportunities for the local supply chain, please contact us at [craighead@galileoenergy.uk]craighead@galileoenergy.uk</p><p>Further information on the development is available on the website at&nbsp;<a href=\"http://www.craigheadwindfarm.co.uk/\">www.craigheadwindfarm.co.uk</a>. This also has details of the proposed renewable electricity discount scheme (REDS), with those closest to the development receiving a discount on their electricity bills (subject to consultation).</p><p>&nbsp;</p><p><img src=\"https://perthshirechamber.co.uk/site/assets/files/5290/craighead_wind_farm_site-layout-plan_v1_0.jpg\" alt=\"\"></p>', 'Andrew H', '2023-05-11 12:53:00', 62, 1, 0, '2023-11-13 14:55:48', '2023-11-13 14:55:48', 'renewable-energy-company-galileo-is-proposing-a-wind-farm-of-up-to-10-turbines-up-to-60mw-near-carnbo-in-kinross-shire-it-is-committed-to-ensuring-wherever-reasonably-practicable-local-contractors-and', 1),
(23, 'Platinum Partner Thorntons Helps Davidsons Chemists Continue Expansion Plans Following Seven Figure Finance Deal', '<p>The business now owns 56 pharmacies including the five new acquisitions. Two are located in Dundee, and one each in Kirriemuir, Montrose and Auchterarder – where it now owns the town’s two chemists.</p><p>It has now commenced a rebrand of the new premises, which are gaining new exterior signage and in-store customer communications.</p><p>It has also completed the recruitment of three new pharmacist managers for the branches which were being operated by a locum. Their appointments will enable Davidsons to restore and upgrade their operations as well as provide greater certainty for local communities.</p><p>Allan Gordon, managing director, Davidsons Chemists, said: “We are making excellent progress with our five new branches, which we are rebuilding as valued local resources that will provide first class community healthcare. Our new pharmacist managers are providing much-needed structure and continuity and anecdotally, we have had great feedback from customers.</p><p>“As a business, we have significantly strengthened our position across the Tayside and Perthshire area following the acquisition from Lloyds.</p><p>“Thorntons and its knowledgeable team made the process as smooth as it could be, and we thank everyone involved for their support.”</p><p>Davidsons, which provides a wide range of pharmacy services including prescriptions, vaccinations, smoking cessation and minor ailment care, is headquartered in Blairgowrie where its first branch opened in 1897.</p><p>Thorntons Partner, Healthcare team, Kim Campbell, said: “Davidsons Chemists’ acquisition is a great step forward for an ambitious, growing healthcare business. It’s extremely rewarding to have played a role in bringing these five branches into its ownership, which is set to have a positive impact on both the business and local communities.</p><p>“We wish Davidsons’ management team every success as they incorporate the new branches and develop the business.”</p><p><a href=\"https://www.thorntons-law.co.uk/knowledge/davidsons-chemists-continues-expansion-plans-following-seven-figure-finance-deal\">ARTICLE</a></p>', 'Andrew H', '2023-05-12 12:56:00', 62, 1, 0, '2023-11-13 14:56:57', '2023-11-13 15:04:33', 'national-independent-pharmacy-chain-davidsons-chemists-has-revealed-its-plans-for-five-new-branches-acquired-from-lloyds-in-a-substantial-seven-figure-deal-supported-by-leading-independent-law-firm-th', 1),
(24, 'Celebrating Local with Launch of Star Awards!', '<p>BUSINESSES large and small, new and established, rurally and centrally located throughout Perthshire have a chance to shine brightly once more with the launch of the 2023 Business Star Awards sponsored by Binn Group.</p><p>The Perthshire Chamber of Commerce event – one of the most eagerly anticipated on the business calendar – takes place at Crieff Hydro on Friday November 24th.</p><p>And businesses throughout the area are urged to nominate themselves and their stars to light up this glittering event celebrating all things local.</p><p>Perthshire Chamber chief executive Vicki Unite said:<br>“The trading environment remains challenging, and the creativity and drive shown by our business community is quite astounding. &nbsp;Innovation and grit has seen some of our businesses grow and adapt and so many businesses and individuals continue to do so much for our local economy and communities. &nbsp;</p><p>“It is always an absolute privilege to be able to shine the spotlight on some of our area’s success stories and acknowledge the sheer hard work, determination and humanity being demonstrated on a day-to-day basis.</p><p>“We are absolutely delighted to partner with Binn Group again as our Main Sponsor who are a shining example of supporting local and driving business locally, showing constant innovation and staying at the forefront of their industry - really putting Perthshire on the map.”</p><p>Allan MacGregor, Chief Executive of family business Binn Group, always champions local (and also includes this call to action to others during his annual speech at the awards dinner) and acknowledges the importance of this unique event in recognising and rewarding Perthshire successes.</p><p>“I like to keep business local, as far as possible,” he said, “and I think the Chamber is an important asset to the local economy.&nbsp;</p><p>“The Chamber’s priority is Perthshire, and the organisation is a vast and valuable network of business people who share that same passion. &nbsp;</p><p>“Supporting local has always been at the heart of the Binn Group and that is why we are involved with the Perthshire Chamber.”</p><p><i>Binn Group is Scotland’s leading recycling and resource management company.</i><br><i>Family run, with over 20 years of expertise, they are a people centred business, with over 160 employees with this figure likely to increase significantly once work gets underway on its energy from waste (EfW) plant at its EcoPark.</i></p><p>“If you work in the local area, I think you should support other businesses in your area,” he said.</p><p>“The Star Awards showcases superb local businesses and provides the people involved, whether finalists or winners, with a real boost.”</p><p>Tickets for the event, hosted by tv and radio broadcaster Kaye Adams, with fizz on arrival, a delicious three course meal with coffee and petits fours, awards ceremony, fundraiser and live music with Groove Culture into the wee small hours are available:<br>&nbsp;<br>£95+vat pp for a member or £900 + VAT for a table of 10.</p><p>Non-members are £105 + VAT pp or £1000 + VAT for a table of 10.</p><p>Full details of all the award categories and further information can be found at <a href=\"http://www.businessstarwards.co.uk\">www.businessstarwards.co.uk</a>&nbsp;</p><p>Entries close on Friday 13th October at 1700 and can be made online at <a href=\"http://www.businessstarawards.co.uk\">www.businessstarawards.co.uk</a>. &nbsp;The Chamber can be contacted on 01738 448325, emailed at: <a href=\"mailto:events@perthshirechamber.co.uk\">events@perthshirechamber.co.uk</a> or online at: <a href=\"http://www.perthshirechamber.co.uk\">www.perthshirechamber.co.uk</a>.</p><p>Business Star Award Categories Open for Entries 2023<br>&nbsp;&nbsp; &nbsp;<br>1&nbsp;&nbsp; &nbsp;Employee of the Year Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>2&nbsp;&nbsp; &nbsp;Apprentice of the Year Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>3&nbsp;&nbsp; &nbsp;Most Promising New Business Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>4&nbsp;&nbsp; &nbsp;Excellence in Customer Service Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>5&nbsp;&nbsp; &nbsp;Excellence in Business Innovation Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>6&nbsp;&nbsp; &nbsp;Excellence in Digital Media Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>7&nbsp;&nbsp; &nbsp; &nbsp;Commitment to the Environment Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>8&nbsp;&nbsp; &nbsp;Commitment to the Community Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>9&nbsp;&nbsp; &nbsp;Excellence in Tourism &amp; Leisure Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>10&nbsp;&nbsp; &nbsp;Beyond Scotland Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>11&nbsp;&nbsp; &nbsp;Business Growth Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>12&nbsp;&nbsp; &nbsp;Independent Retailer of the Year Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>13&nbsp;&nbsp; &nbsp;Excellence in Food &amp; Drink Produce Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>14&nbsp;&nbsp; &nbsp;Employer of the Year Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>15&nbsp;&nbsp; &nbsp;Health and Wellbeing Business of the Year Award&nbsp;<br>&nbsp;&nbsp; &nbsp;<br>16&nbsp;&nbsp; &nbsp;Outstanding Young Business Person&nbsp;</p>', 'Andrew H', '2023-05-15 13:05:00', 62, 1, 0, '2023-11-13 15:06:13', '2023-11-13 15:06:13', 'calling-all-perth-and-kinross-businesses-', 1),
(25, 'Golf Day 2023 Results', '<p>After hot rolls, tea and coffee, and a warm welcome, players set off on the renowned, Championship Murrayshall parkland course for an excellent round of golf, followed by a two-course meal in the clubhouse.</p><p>The event saw entrants compete for a raft of titles including Winning Team, Winning Individual, Yellow Ball, Nearest the Pins and Longest Drive.</p><p>The Winning Team title was claimed this year by a team of new friends coming together on the day consisting of (l to r) Perthshire Local’s Iain Fenwick, Kelvin Bristol, David Codling and Merlin’s David Morrison who each took home the Carbon Winning Team Trophy and a game of golf for four each, generously donated by King James VI Golf Club and Strathmore Golf Club.</p><p>The Winning Individual was Tom McLevy of the Graham Environmental Services team who won the Chamber Millennium Trophy plus a four ball with hospitality kindly donated by Murrayshall Country Estate.</p><p>Winners of our Yellow (Red) Ball competition were the team from Graham + Sibbald (Keith Scobbie, James Andrew, Paul Keith and Andy MacDonald) who won the Rosebowl and a bottle of 1881 Distillery &amp; School Gin donated by Crieff Hydro.</p><p>Taking home the title of Longest Drive (Man) Winner was David Morrison of Merlin who won a golf lesson donated by Limetree.</p><p>The Longest Drive (Lady) Winner was Lesley Mearns of the Thorntons Solicitors and Limetree Team who traded her prize (tickets for the Tartan Exhibition at the V&amp;A kindly donated by Thorntons) with Eileen of Limetree for a Golf Lesson.</p><p>The Winner of Nearest the Pin was Gareth McKenna of UHI Perth who took home a bottle of whisky donated by Flonix Ltd.</p><p>Vicki Unite, chief executive of Perthshire Chamber, said: \"We were delighted to bring our annual golf day to Murrayshall and we are very grateful to Gary Silcock and his team at Murrayshall for being such great hosts.&nbsp; A huge thank you, once again, goes to Allan Chappell of Hardies Property &amp; Construction Consultants for managing all the teams and scoring on the day, we couldn’t do it without his support.</p><p>&nbsp;</p><p>“Thank you also to those who donated prizes including King James VI Golf Club, Strathmore Golf Club, Murrayshall, Limetree, Thorntons, Flonix and Crieff Hydro.</p><p>“The significant support offered also by all those who brought teams and played with us on the day is very much appreciated and it was a pleasure to meet and have the chance to talk to everyone at the half way house over a cool drink.”</p><p><strong>RESULTS:</strong></p><p>Our Winning Individual today is Tom McLevy of the Graham Environmental Services team!&nbsp;Congratulations! Tom took home the Chamber Millennium Trophy, a 4 ball with hospitality donated by Murrayshall Country House Hotel &amp; Golf Club and some golf goodies. His prize was collected by his teammates (l to r) Charlie Gallagher and Phil McKenna.</p><p>&nbsp;</p><p>Winner for Nearest the Pin was Gareth McKenna of UHI Perth who took home a bottle of whisky donated by Flonix Ltd and some golf goodies.</p><p>&nbsp;</p><p>Taking home the title of Longest Drive (Man) Winner was David Morrison of Merlin who won a golf lesson donated by Limetree and some golf goodies.</p><p><img src=\"https://perthshirechamber.co.uk/site/assets/files/5294/winning_team_merlin_square.jpg\" alt=\"\"></p><p><img src=\"https://perthshirechamber.co.uk/site/assets/files/5294/winning_individiual_tom_levy_and_prize_giving_square.jpg\" alt=\"\"></p><p><img src=\"https://perthshirechamber.co.uk/site/assets/files/5294/winning_longest_drive_ladies_lesley_mearns_of_thorntons_caption.jpg\" alt=\"\"></p><p><img src=\"https://perthshirechamber.co.uk/site/assets/files/5294/winner_nearest_pin_gareth_mckenna_of_uhi_perth_caption.jpg\" alt=\"\"></p>', 'Andrew H', '2023-05-16 13:06:00', 62, 1, 0, '2023-11-13 15:09:15', '2023-11-13 15:10:35', 'golfers-enjoyed-a-warm-and-sunny-afternoon-at-perthshire-chamber-s-annual-golf-day-which-took-place-at-murrayshall-country-estate-last-friday-1st-september-', 1),
(26, 'Great Glen Challenge on Track to Reach £50,000 Target for RSABI', '<p>The event was fully booked with the maximum of 25 teams from a wide range of roles in Scottish agriculture taking part in a challenging day of outdoor sport, testing endurance and fitness, as well as offering a great opportunity for teambuilding and camaraderie.</p><p>The event, sponsored by expert legal advisors to the rural sector, <strong>Gillespie Macandrew</strong>, took place in a stunning setting between Fort Augustus and Fort William. It saw sponsored teams take on a demanding route consisting of a 49km mountain bike, 6km kayak, 18km walk, and 17km run.</p><p>The annual challenge is designed to raise awareness of the work of the charity as well as the importance of teamwork and physical fitness for mental and physical wellness, promoting commitment and teamwork from the onset of training right up to race day.</p><p>Alongside training and competing, the teams have worked hard to fundraise in a bid to help RSABI, the charity which supports people in Scottish agriculture, reach the ambitious target of £50,000, which will help the charity provide emotional, practical and financial support to people in Scottish agriculture.</p><p>So far, a fantastic total of nearly £49,000 has been raised by those taking part and RSABI is encouraging supporters to dig deep and help in a bid to reach its target over the coming week.</p><p>“The Great Glen Challenge 2023 really was an exceptional event, with an outstanding effort made by people from all different parts of our industry. We are so grateful to our sponsors and to everyone who took part, helped teams to train or came along to support on the day,” said Carol McLaren, Chief Executive of RSABI.</p><p>“We are also very grateful to our trustees and volunteers who got their sleeves rolled up and helped us set the event up and derig afterwards in a range of weathers from sunshine to downpours, with a lively band of midges who kept us company for much of the day!”</p><p>Alan White, partner in the land and rural business team at Gillespie Macandrew, sponsors of the event, presented the prizes to individuals and teams at a post-event reception at the iconic Neptune’s Staircase, Banvie.&nbsp; He commented: “We were pleased to sponsor this fantastic event.&nbsp; As longstanding advisors to the sector, we are all too familiar with the challenges facing those working in agriculture and just how invaluable the work of the RSABI is in providing support.&nbsp; Our teams thoroughly enjoyed the challenge and the opportunity to spend time with their peers in glorious surroundings.”</p><p>The overall team winner was Scottish Woodlands, with last year’s winners Shannoch, taking second team place, followed by the Royal Bank of Scotland in third.</p><p>Individual awards were made to Edward Fletcher (mountain biking) of Galbraith Giants, Mark Donald (kayaking) of NFU Team 2, David Michie (running) of NFU Team 1 and walking (joint first place) Rebecca Drummond of Team Shannoch, Neil White of Scottish Woodlands and Andy Glasgow of Royal Bank of Scotland.&nbsp;</p><p>Participating teams included Bank of Scotland, Bell Ingram, Bidwells LLP, the Crofting Commission, Davidson &amp; Robertson, Galbraith, Gillespie Macandrew, James Hutton Institute, Johnston Carmichael, NFU Scotland, Royal Bank of Scotland, SAC Consulting, SAYFC, Scottish Woodlands, SP Energy Networks, Tarff Valley, Thomson Cooper Accountants, Thorntons, and Virgin Money.</p><p>RSABI’s freephone Helpline - 0808 1234 555 - is available 24 hours a day, seven days a week and calls won’t show up on phone bills. All enquires are treated as confidential by the organisation’s friendly, professional team. You can make contact online on a range of social media platforms including Twitter, Facebook and Instagram and you can also reach RSABI via the webchat function on its website <a href=\"http://www.rsabi.org.uk/\">www.rsabi.org.uk</a> 24 hours a day.</p><p><a href=\"http://www.gillespiemacandrew.co.uk\">Gillespie Macandrew</a></p>', 'Andrew H', '2023-05-17 13:10:00', 62, 1, 0, '2023-11-13 15:13:05', '2023-11-13 15:13:05', 'rsabi-the-charity-which-supports-people-in-scottish-agriculture-is-sending-a-message-of-thanks-to-the-sponsors-teams-supporters-and-volunteers-who-made-its-annual-fundraising-event-on-friday-such-a-hu', 1),
(27, 'T\'Go Creative is on the Move!', '<p>Their team has moved to their shiny&nbsp;new studio in&nbsp;the old&nbsp;<strong>Perthshire Advertiser</strong>&nbsp;building in Perth’s city centre.&nbsp;</p><p>For all things design, print, digital marketing, clothing and merch printing, website design (and everything in between), you will find them at</p><p><strong>56-58 Watergate, Perth, PH1 5TF&nbsp;</strong></p><p>With so many things planned for T’Go Creative this year, they can’t wait to introduce some exciting new services and offerings - including a shiny new shop for their new clothing brands -&nbsp;<a href=\"https://bigairclothing.com/\">BIG Air and TRN Air</a><a href=\"https://tgocreative.us2.list-manage.com/track/click?u=5692fecc1c725acfb42b00a1a&amp;id=ad060ab2bb&amp;e=2467c3af77\"><strong>&nbsp;Activewear</strong></a><strong>&nbsp;</strong>- the perfect clothing range for all you&nbsp;extreme sports and active enthusiasts!&nbsp;</p><p>To celebrate our next chapter, they\'ll be sharing some exclusive opening offers soon so keep an eye on your inbox from future emails from the T\'Go team.<br><br>Stay in the loop with the latest news and updates&nbsp;by following them on their&nbsp;<a href=\"https://www.facebook.com/tgocreative\">Facebook</a>,&nbsp;<a href=\"https://www.linkedin.com/company/tgocreative/\">LinkedIn</a><strong>&nbsp;</strong>and&nbsp;<a href=\"https://www.instagram.com/tgocreative_design_print_web/?hl=en\">Instagram</a>&nbsp;channels. They’ll see you there &amp; they&nbsp;can\'t wait to welcome you to their&nbsp;new premises!</p>', 'Andrew H', '2023-05-18 13:13:00', 62, 1, 0, '2023-11-13 15:14:51', '2023-11-13 15:14:51', 't-go-has-moved-studio-', 1),
(28, 'Perth and Kinross Council: External Funding Team launches Employability Challenge Fund 23/24', '<p>The team are offering drop-in sessions - see below for available sessions – to book a place please send an email and they will issue you the appointment.</p><p>The External Funding Team are about to launch the Employability Challenge Fund for 23/24. They will be holding online drop-in sessions to answer any questions that you may have.</p><p>The sessions will be:</p><p>Wednesday 20th September<br>2.30pm</p><p>Thursday 21st September<br>10.30am</p><p>Friday 22nd September<br>10.00am</p><p><a href=\"mailto:ExternalFunding@pkc.gov.uk\">ExternalFunding@pkc.gov.uk</a></p>', 'Andrew H', '2023-05-17 13:16:00', 62, 1, 0, '2023-11-13 15:19:18', '2023-11-13 15:19:18', 'this-fund-is-aimed-at-third-sector-delivery-agent-organisations-who-are-interested-in-funding-for-those-furthest-away-from-the-job-market-child-poverty-family-support-and-numeracy-skills-development-', 1),
(29, 'Elevator: Design Thinking - Mini Accelerator Programme for Perth & Kinross', '<p>Drawing on the very best Design Thinking practices from around the world including UK Design Council, D.School, and the Global Design Thinking Alliance, you’ll be part of a fully immersive design-led innovation and enterprise programme.</p><p>All workshops will take place, in person, at the Famous Grouse Ideas Centre, WASPS Perth Creative Exchange, Stormont Street, Perth PH1 5NW</p><p>Our three interlinked workshops sessions will run:</p><p>Tuesday 21st November (10am – 5pm)<br>Wednesday 22nd November (10am – 5pm)<br>Tuesday 5th December (10am –5pm)</p><p><a href=\"https://www.elevatoruk.com/accelerators/winter-warmer/\">REGISTER HERE</a></p>', 'Andrew H', '2023-05-18 13:19:00', 62, 1, 0, '2023-11-13 15:20:51', '2023-11-13 15:20:51', 'design-thinking-is-a-creative-approach-to-problem-solving-that-is-being-adopted-by-world-leading-companies-of-all-sizes-to-drive-innovation-and-improve-customer-experience-if-you-re-looking-to-stay-ah', 1),
(30, 'Multi-Award Winning Restaurant Tabla Double Winner 2023', '<p>This “Takeaway of the year award” holds a special place for Tabla since we have previously won awards for Chef of the Year, Restaurant of the Year, Outstanding Curry of the Year, and Entrepreneur of the Year. Winning the Takeaway Award is particularly meaningful as it is the first time since 2009 that we have won in this category.&nbsp;</p><p>Our business primarily focuses on providing a dine-in experience. However, due to the challenges posed by the rising cost of living, we have pivoted our business to accommodate dining at home in 2022.&nbsp;<br>Our Customers have greatly received this new focus. - Praveen Kumar</p><p><a href=\"https://tablarestaurant.co.uk/\">WEBSITE</a></p><p><img src=\"https://perthshirechamber.co.uk/site/assets/files/5300/tabla_asian_restaurant_awards_2023.jpg\" alt=\"\"></p>', 'Andrew H', '2023-05-19 13:21:00', 62, 1, 0, '2023-11-13 15:21:56', '2023-11-13 15:21:56', 'tabla-wins-restaurant-of-the-year-2023-from-asian-restaurant-awards-take-away-of-the-year-2023-from-spice-awards-', 1),
(31, 'SCC - Westminster Inquiry Into Air Services Between Scotland & London', '<p>It has been brought to their attention that there has been an ongoing issue with punctuality in cross border routes and that this is having an impact on Scotland’s business community and its ability to access appointments and meetings in London and beyond.</p><p>They are therefore interested to learn if Scottish businesses have encountered difficulties in their experiences with Scottish air services to London.</p><p>They have put to the SCC the following three questions:</p><ul><li>What is the current view of punctuality of flights to and from Scottish airports?</li><li>How has this changed over the last 3, 10, 15 and 20 years?</li><li>How has punctuality of airlines to and from Scottish airports affected your members’ business activities including but not limited to: Meetings, Trade and Connecting travel?</li></ul><p>If this is something that you have experience or knowledge of, please do share views on this to inform the SCC response.</p><p>Similarly, if you know of members who have reported such issues, please feel free to share their views and this request / advise them to get in touch.</p><p>The SCC would ideally like any views back by 10th October at the latest.</p><p>Email Perthshire Chamber of Commerce <a href=\"mailto:info@perthshirechamber.co.uk\">info@perthshirechamber.co.uk</a> and we will pass your concerns on to the SCC.</p>', 'Andrew H', '2023-05-20 13:22:00', 62, 1, 0, '2023-11-13 15:23:11', '2023-11-13 15:23:11', 'the-scottish-affairs-committee-at-westminster-has-contacted-the-scottish-chambers-of-commerce-regarding-the-punctuality-of-flights-between-scotland-and-london-', 1);
INSERT INTO `blogs` (`id`, `title`, `description`, `publisher`, `publish_at`, `author`, `is_active`, `is_delete`, `created_at`, `updated_at`, `slug`, `is_approved`) VALUES
(32, 'Scottish Youth Film Festival comes to Perth!', '<p>Distinguished guests, including the acclaimed actors Andrew Rothney and Sara Vickers, visionary Directors Raisah Ahmed and Andrew Cumming, and an array of other prominent figures from the Scottish film industry will grace this magnificent festival!</p><p>&nbsp;</p><p>Hosted at the North Inch Community Campus in Perth, this year\'s festival promises not only an enriching cinematic experience but also a wonderful opportunity to connect with like-minded individuals who share a passion for storytelling and filmmaking.</p><p>&nbsp;</p><p><strong>Celebrating Scotland\'s Young Filmmakers</strong></p><p>The Scottish Youth Film Festival has firmly established itself as the premier platform for showcasing the creative talents of Scotland\'s budding filmmakers. With a rich tradition of celebrating innovation, storytelling, and artistic expression, this year\'s event promises to be a highlight for young filmmakers across Scotland.</p><p>&nbsp;</p><p><strong>The festival\'s diverse program includes:</strong></p><p><strong>-Screenings:</strong> Immerse yourself in a captivating selection of films created by Scotland\'s emerging young talents. From gripping narratives to thought-provoking pieces, the festival will showcase a wide range of cinematic talent.</p><p><strong>-Panels:</strong> Network with industry experts, filmmakers, and educators as they delve into the world of filmmaking. Gain insights, knowledge, and inspiration from those who have made their mark in the industry.</p><p><strong>-Workshops:</strong> Hone your filmmaking skills in hands-on workshops led by experienced professionals. Whether you\'re interested in acting, directing, cinematography, animation, or special effects, there\'s a workshop tailored to your interests.</p><p><strong>-Talks:</strong> Discover the secrets of sound design, the art of directing, and what it\'s like to work for a animation studio in our incredible program of industry guests.</p><p><strong>-Annual Awards Show:</strong> The festival\'s crowning moment is the much-anticipated awards show, where outstanding young filmmakers will be recognised for their exceptional short films. Be there to witness the future stars of the industry receiving their well-deserved praise.</p><p>&nbsp;</p><p><strong>Book Your Free Tickets Now!</strong></p><p>One of the most exciting aspects of this year\'s festival is that tickets are absolutely free! However, due to the overwhelming demand, early booking is strongly recommended. Don\'t miss your chance to be part of this extraordinary celebration of youth talent and creativity!</p><p>To secure your spot, simply visit the <a href=\"https://www.eventbrite.com/e/scottish-youth-film-festival-tickets-694647468277\">official festival Eventbrite</a>.</p><p>There, you\'ll find all the information you need, including the full festival schedule, ticket details, and the latest updates. Make sure you book onto your workshops as tickets fly fast!</p><p>Book your <a href=\"https://www.eventbrite.com/o/developing-the-young-workforce-tay-cities-52491465053\">workshops here</a>.</p><p>&nbsp;</p><p><strong>Exclusive Workshops and Special Events</strong></p><p>In addition to the festival\'s main attractions, there are exclusive workshops and special events that promise to further enrich your festival experience. These events include:</p><p>&nbsp;</p><p><strong>-Scriptwriting:</strong> Finding Your Stories: Dive into the art of scriptwriting and learn how to bring your stories to life on the screen.</p><p><strong>-Exploring the World of Production: </strong>Get an insider\'s perspective on the world of film production and discover the magic that happens behind the scenes.</p><p><strong>-Under the Camera: Cut-Out Animation:</strong> Explore the enchanting world of cut-out animation and bring your characters to life frame by frame.</p><p><strong>-Acting for Screen:</strong> Unleash your acting talents on screen and learn the techniques that make performances truly shine in film.</p><p><strong>-Creating Practical SFX for Camera:</strong> Step into the realm of special effects and discover how to craft stunning visual effects that enhance your storytelling.</p><p><strong>-Under the Camera:</strong> Object Animation: Explore the fascinating world of object animation and bring inanimate objects to life through the lens of a camera.</p><p><strong>-LS Productions:</strong> Rohan Crickmar: Gain valuable insights from Rohan Crickmar, a key figure in LS Productions, and delve into the dynamic world of film production.</p><p>&nbsp;</p><p>For more details, visit the festival\'s <a href=\"https://syff.scot/festival/\">official website</a>.</p><p>And check out their <a href=\"https://www.youtube.com/watch?v=35yXhYE5n7Y&amp;ab_channel=ScottishYouthFilmFoundation\">promotional video here</a>.</p><p>&nbsp;</p><p>Stay connected with the festival on social media by following @ScottishYouthFilmFestival on Facebook, Instagram, and Twitter for the latest news and announcements.</p><p>&nbsp;</p><p>Join us on September 30th at the North Inch Community Campus in Perth, and let\'s celebrate the boundless creativity and talent of Scotland\'s young filmmakers. The Scottish Youth Film Festival awaits you with open arms, ready to immerse you in a world of cinematic wonders. Don\'t miss out on this unforgettable experience!</p><p>&nbsp;</p><p>About the Scottish Youth Film Festival:</p><p>The Scottish Youth Film Festival is an annual event dedicated to showcasing the talents of young filmmakers living in Scotland. Established to promote creativity, storytelling, and innovation in cinema, the festival provides a platform for emerging talent to meet their peers, network and celebrate the work of Scotland’s next generation of film talent. The festival is run by the Scottish Youth FIlm Foundation and funded by partners including Screen Scotland and The Sean Connery Foundation.</p><p>&nbsp;</p><p><img src=\"https://perthshirechamber.co.uk/site/assets/files/5303/syff_festival_2023_timetable.png\" alt=\"\"></p>', 'Andrew H', '2023-05-22 13:23:00', 62, 1, 0, '2023-11-13 15:25:07', '2023-11-13 15:25:07', 'in-a-much-anticipated-return-the-scottish-youth-film-festival-is-back-for-another-remarkable-year-promising-to-be-bigger-and-better-than-ever-before-scheduled-for-saturday-september-30th-this-cinemati', 1),
(33, 'Appeal launched to save St John’s Kirk of Perth', '<ul><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>900-year-old Kirk where John Knox sparked the reformation is in crisis</strong></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>£4 million restoration bill looms for Perth’s most historic building</strong></li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>The Kirk of Kings threatened by soaring costs</strong><br><br>A £4 million appeal is being launched to save Perth’s oldest and key historic building.</li></ul><p>St John’s Kirk has dominated the Fair City skyline for nearly nine centuries but now the ancient heart of Perth is under threat as repair and renovation costs spiral.</p><p>A leaking spire and belfry, decaying masonry, roof deterioration and compromised stained-glass window casings are among the growing catalogue of necessary repair works facing the Kirk. And while the Kirk session and the Trust of St John’s Kirk of Perth have shouldered emergency repairs to date, funds are running out and a “Save St John’s Kirk” appeal has been set in motion.</p><p>Session Clerk Bill Wilson said the time had come to appeal for help to a wider audience.</p><p>“St John’s Kirk has a special place in the hearts of so many,” he said. “It has been a centre of worship for nearly 900 years and played a pivotal role in the history and development of Perth.</p><p>“Marriages, christenings, funerals, civic and public events and landmark Royal and historic occasions have all taken place within these ancient walls and its impact and influence have stretched far beyond Perth’s city boundary – both nationwide and internationally.</p><p>“Hopefully, its ongoing role and historic significance will not be lost on those keen to ensure its survival.”</p><p>Crisis talks have already taken place with key stakeholders and an outline strategy has already been developed with a full business plan due to be finalised by the end of the year.</p><p>Maureen Young, chair of the Trust of St John’s Kirk of Perth, which has driven fundraising for the maintenance of the building since 1951, said the future of the landmark kirk was every bit as important as its past.</p><p>“St John’s Kirk is the heart of Perth in every sense,” she said. “Millions have been spent on creating a world-class tourist destination housing the Stone of Destiny at the former City Hall - due to open next year - and it’s vital that the new museum’s Medieval neighbour is protected and promoted to ensure Perth’s oldest and newest attractions sit side-by-side in pristine condition.</p><p>“Recent faults and failings identified by a series of expert surveys suggest St John’s Kirk needs special attention,” added Maureen. “The cash-strapped Church of Scotland is unlikely to provide support funding, but a future where this glorious building is allowed to decay and die is unthinkable and that’s why a special appeal has been launched to identify and secure funding streams to safeguard it for generations to come.</p><p>“The Trust is also keen to employ a Project Manager to help fundraise, oversee works and evolve a future programme of events and tourist and community engagement to enrich the life of the church,” she said. “We are actively seeking suitable candidates now.</p><p>“We’re delighted – and extremely grateful - that Brigadier Sir Mel Jameson, immediate past Lord Lieutenant of Perth and Kinross, has agreed to chair our appeal committee and drive a fundraising focus in support of our strategic plan for the future of St John’s which will not only repair and restore the building itself but also create a vibrant and popular venue for all.”</p><p>Ahead of the launch of the public appeal in the Kirk today (Friday), Sir Mel said he was happy to play a role in ensuring Perth’s most important building was protected and promoted – celebrating its past glories and shaping its function and form into the future.</p><p>“St John’s Kirk is one of Scotland’s most important church buildings,” he said. “It has a wealth of history within its ancient walls – from medieval to modern times – and plays a vital role in both civic and congregational life in Perth.</p><p>“It houses Perth and Perthshire war memorials and is the spiritual home of The Black Watch as well as boasting Scotland’s largest carillon of 35 bells.</p><p>“Windows, pews, pillars and crypts all pay homage to famous local families and historic organisations and institutions including the Guildry, Freemasonry and local council,” he added. “And, perhaps most famously, it was the site of John Knox’s inflammatory sermon in 1559 which ignited the Reformation in Scotland.</p><p>“It is also the Kirk of the Kings, visited and supported over the centuries by a string of royals from David I to the late Queen Elizabeth II.”</p><p>While highlighting the historic importance of St John’s Kirk, Sir Mel said the focus of the £4 million appeal was on the future.</p><p>“We want to safeguard St John’s both as a place of worship and occasion and as a vibrant, living centre for tourists, events, concerts, civic occasions and public celebrations,” he said. “At first glance the building looks magnificent but at 900 years old, she’s an Old Lady in trouble – one that needs our help to secure a future where St John’s continues to play a central role in the life of the city. We cannot allow the building to deteriorate further, and hope individuals and organisations will rally behind our appeal and Save St John’s.”</p><p>Repair works will progress in accordance with funds available with emergency repairs tackled first.</p><p>The appeal has already attracted political concern with local MSP John Swinney saying St John’s was “absolutely central” to the identity of Perth.</p><p>“The deterioration of St John’s Kirk has to be avoided at all costs,” he said. “It sits in the very heart of the city, adjacent to what will be one of the country’s most significant tourist attractions so it is vital the future of the Kirk is assured so that it can be part of the revival of Perth’s city centre.</p><p>“We can’t afford to turn our backs on such a significant building,” he said. “We have to corral different funding streams to help, and I am very happy to put my shoulder to the wheel and help where I can.”</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p><img src=\"https://perthshirechamber.co.uk/site/assets/files/5304/freepic_stjohnskirk-2.jpg\" alt=\"\"></p>', 'Andrew H', '2023-05-22 13:25:00', 62, 1, 0, '2023-11-13 15:26:51', '2023-11-13 15:26:51', 'a-4-million-appeal-is-being-launched-to-save-perth-s-oldest-and-key-historic-building-', 1),
(34, 'Perthshire Adventure Park Announces \'ultimate Passes\' for Families This Autumn', '<p>ONE OF Scotland’s best loved activity parks <a href=\"https://www.actionglen.co.uk/\">Action Glen</a> has announced two brand-new day passes for both families and thrill seekers alike to enjoy this autumn.</p><p>From Friday 29 September until Sunday 5 November, visitors will be able to unlock access to an incredible 15 rip-roaring activities during just one visit, thanks to <a href=\"https://www.actionglen.co.uk/tickets/\">Glen’s Activity Day Pass.</a></p><p>Daredevils will have the chance to set their pulses racing in a thrilling game of woodland combat, before soaring among the stunning Perthshire tree line on the Aloft zip lines and testing their nerve in a skilful archery session as part of the huge range of activities the ticket offers.</p><p>Meanwhile, for those who prefer to keep both feet firmly on the ground and cheer on from a distance, visitors can opt for <a href=\"https://www.actionglen.co.uk/tickets/\">Glen’s Adventure Day Pass</a> which includes unlimited access to Glen’s Adventure Park and its impressive crazy golf course.&nbsp;</p><p>The limited-time day passes are being run as part of a new ticketing trial for Action Glen, with the team hopeful it will streamline the way guests book their activities in the future.</p><p>Michael Crawford, manager of Action Glen, said: “We’re really excited to see how Glen’s Activity and Adventure Day Passes will open up a world of adventure for our guests.</p><p>“Instead of booking each activity individually, our brand-new ticketing options will make sure our adventurers get the most out of their time with us.</p><p>“Whether you are a thrill seeker who is keen to throw yourself into as many activities as possible, or a top cheerleader enjoying the action from the sidelines, these really are the ultimate activity passes for absolutely anyone visiting Action Glen this autumn.”</p><p>There are a huge range of activities included in Glen’s Activity Day Pass, including: Aloft Treetop Adventures (aged 7+); archery (ages 6+); air rifles (8+); axe throwing (ages 12+); woodland combat (ages 6+); Pinzgauer safari (ages 3+); Glen’s Adventure Park (ages 3+); Mini Land Rovers (ages 3+); quad pods (ages 3+); crazy golf (ages 3+); disc foot/rugby/golf (ages 3+) and zip line (ages 7+).</p><p>Meanwhile, Glen’s Adventure Ticket includes crazy golf (ages 3+), disc foot/rugby/golf (ages 3+) and Glen’s Adventure Park (ages 3+).</p><p>Prices start from £15. To book your Activity or Adventure Day Pass, and to explore the wide range of activities on offer at Action Glen, visit: <a href=\"http://www.actionglen.co.uk/tickets\">www.actionglen.co.uk/tickets</a></p><p>Action Glen is located within the grounds of the iconic Crieff Hydro Hotel in Perthshire. To learn more, and to book your stay, visit: <a href=\"http://www.crieffhydro.com\">www.crieffhydro.com</a></p><p><img src=\"https://perthshirechamber.co.uk/site/assets/files/5305/action_glen_has_announced_two_brand-new_day_passes_for_families_and_thrill_seekers_to_enjoy_this_autumn_pic_-_kenny_smith.jpg\" alt=\"\"></p><p>&nbsp;</p>', 'Andrew H', '2023-05-23 13:27:00', 62, 1, 0, '2023-11-13 15:28:19', '2023-11-13 15:28:19', '-passes-will-unlock-unlimited-access-to-15-thrilling-activities-at-action-glen-throughout-october-', 1);

-- --------------------------------------------------------

--
-- Table structure for table `directories`
--

CREATE TABLE `directories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_approved` tinyint(4) DEFAULT '1',
  `user_id` bigint(20) DEFAULT '0',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `venue_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `directories`
--

INSERT INTO `directories` (`id`, `title`, `description`, `is_active`, `is_delete`, `created_at`, `updated_at`, `is_approved`, `user_id`, `slug`, `mobile_no`, `phone`, `address`, `email`, `web_url`, `venue_url`, `facebook_url`, `instagram_url`, `linkedin_url`, `youtube_url`) VALUES
(10, 'abcd', '<p>adfjdsal fsdalhf lsdafhl sadfl;asd hflsda flsdah fhsadf hsdlaf hlas dflashd f;lsdahflsdah flsadhl fhsdalf hsdl;ahf;lsdahfldsahfldsahflsdahf;lsdahf;lsedahf</p>', 1, 0, '2023-10-30 05:43:00', '2023-11-12 22:42:33', 1, 66, 'testing78', '11111111111', '11111111111', 'R-1976', 'abcdef@gmail.com', 'https://www.abcd.com', 'https://www.abcd.com', 'https://www.abcd.com', 'https://www.abcd.com', 'https://www.abcd.com', 'https://www.abcd.com'),
(11, 'abc', '<p>www.abcd.com</p>', 1, 0, '2023-11-01 21:43:42', '2023-11-12 22:25:03', 1, 62, 'testing7', '11111111111', '11111111111', 'www.abcd.com', 'abc@gmail.com', 'https://www.abcd.com', 'https://www.abcd.com', 'https://www.abcd.com', 'https://www.abcd.com', 'https://www.abcd.com', 'https://www.abcd.com'),
(12, 'test directory', '<p>test</p>', 1, 0, '2023-11-07 17:34:15', '2023-11-07 17:34:15', 1, 62, 'testing', '11111111111', '12356487965', 'R-1976', 'admin12@gmail.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com'),
(13, 'testing', '<p>testing</p>', 1, 0, '2023-11-07 17:36:00', '2023-11-12 22:24:37', 1, 66, 'testing4', '11111111111', '12356487965', 'R-1976', 'abcd@gmail.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com'),
(14, 'Directory Again', '<p>testing</p>', 1, 0, '2023-11-07 17:40:25', '2023-11-12 22:23:59', 1, 66, 'testing', '11111111111', '12356487965', 'R-1976', 'admin234@gmail.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com'),
(15, 'Test Directory', '<p>fghyt</p>', 1, 0, '2023-11-07 20:02:11', '2023-11-12 22:23:28', 1, 66, 'ffff', '11111111111', '12356487965', 'R-1976', 'admin65@gmail.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com'),
(16, 'directory', '<p>wmfrew</p>', 1, 0, '2023-11-08 08:57:21', '2023-11-12 22:22:57', 1, 69, 'directory', '11111111111', '12356487965', 'R-70', 'admin44@gmail.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com'),
(17, 'new directory', '<p>sdfgr</p>', 1, 0, '2023-11-08 09:31:04', '2023-11-12 22:33:19', 1, 69, 'new directory', '11111111111', '11111111111', 'abc', 'admin222@gmail.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com'),
(18, 'Deserunt ipsam sit a', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1, 0, '2023-11-12 21:23:59', '2023-11-12 22:30:34', 1, 67, 'sit-a', '+1 (571) 681-6434', '+1 (571) 681-6434', 'Rerum dolor sunt ut', 'lylizotol@mailinator.com', 'Voluptatum adipisici', 'https://pcc.flonix.com/', 'https://pcc.flonix.com/', 'https://pcc.flonix.com/', 'https://pcc.flonix.com/', 'https://pcc.flonix.com/'),
(19, 'test', '<p>test</p>', 1, 0, '2023-11-12 21:39:55', '2023-11-12 22:21:51', 1, 62, 'test19', 'nn', 'nn', 'nn', 'test', 'nn', 'nn', 'nn', 'nn', 'nn', 'nn'),
(20, 'Molestiae quas ut sa', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1, 0, '2023-11-12 23:30:51', '2023-11-12 23:30:51', 1, 68, 'saepe12', 'Adipisci rem dolore', '+1 (841) 816-6281', '+1 (841) 816-6281', 'fehujoxu@mailinator.com', 'https://pcc.flonix.com/', 'https://pcc.flonix.com/', 'https://pcc.flonix.com/', 'https://pcc.flonix.com/', 'https://pcc.flonix.com/', 'https://pcc.flonix.com/');

-- --------------------------------------------------------

--
-- Table structure for table `event_calenders`
--

CREATE TABLE `event_calenders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_approved` tinyint(4) DEFAULT '1',
  `event_date` datetime NOT NULL,
  `venue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `user_id` bigint(20) DEFAULT '0',
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` time DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_id` int(11) NOT NULL DEFAULT '0',
  `image_url` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `img_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extension` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `model`, `model_id`, `image_url`, `is_delete`, `img_type`, `created_at`, `updated_at`, `image_name`, `extension`, `is_active`) VALUES
(42, 'App\\Models\\Employee', 0, 'http://gmc.test/media/about-4.jpg', 0, 'main', '2023-10-22 12:39:55', '2023-10-22 12:39:55', 'about-4.jpg', 'jpg', 1),
(43, 'App\\Models\\User', 0, 'http://gmc.test/media/about-4.jpg', 0, 'main', '2023-10-22 13:25:36', '2023-10-22 13:25:36', 'about-4.jpg', 'jpg', 1),
(44, 'App\\Models\\User', 66, 'http://gmc.test/media/b2.png', 0, 'main', '2023-10-22 14:21:11', '2023-10-22 14:27:15', 'b2.png', 'png', 1),
(47, 'App\\Models\\User', 0, 'http://gmc.test/media/1.jpg', 0, 'main', '2023-10-22 18:11:30', '2023-10-22 18:11:30', '1.jpg', 'jpg', 1),
(48, 'App\\Models\\User', 68, 'http://gmc.test/media/app_bg.jpg', 0, 'main', '2023-10-22 18:19:59', '2023-10-22 18:20:02', 'app_bg.jpg', 'jpg', 1),
(49, 'App\\Models\\User', 69, 'http://gmc.test/media/404.png', 0, 'main', '2023-10-28 17:52:25', '2023-10-28 17:52:43', '404.png', 'png', 1),
(59, 'App\\Models\\PlatinumPartner', 2, 'http://gmc.test/media/download.jpg', 0, 'main', '2023-11-10 21:34:14', '2023-11-12 22:19:05', 'download.jpg', 'jpg', 1),
(76, 'App\\Models\\PlatinumPartner', 2, 'http://gmc.test/media/368_download.jpg', 0, 'main', '2023-11-11 20:58:37', '2023-11-12 22:19:05', '368_download.jpg', 'jpg', 1),
(77, 'App\\Models\\PlatinumPartner', 1, 'http://gmc.test/media/678_download.jpg', 0, 'main', '2023-11-11 20:58:56', '2023-11-11 20:59:26', '678_download.jpg', 'jpg', 1),
(78, 'App\\Models\\PlatinumPartner', 2, 'http://gmc.test/media/940_368_download.jpg', 0, 'main', '2023-11-11 20:59:09', '2023-11-12 22:19:05', '940_368_download.jpg', 'jpg', 1),
(79, 'App\\Models\\PlatinumPartner', 1, 'http://gmc.test/media/160_678_download.jpg', 0, 'main', '2023-11-11 20:59:24', '2023-11-11 20:59:26', '160_678_download.jpg', 'jpg', 1),
(85, 'App\\Models\\Directory', 0, 'https://pcc.flonix.com/media/657_1.jpg', 0, 'main', '2023-11-12 21:21:14', '2023-11-12 21:21:14', '657_1.jpg', 'jpg', 1),
(92, 'App\\Models\\Directory', 19, 'https://pcc.flonix.com/media/209_3.jpg', 0, 'main', '2023-11-12 21:39:54', '2023-11-12 22:21:51', '209_3.jpg', 'jpg', 1),
(94, 'App\\Models\\Directory', 0, 'https://pcc.flonix.com/media/275_706_2.jpg', 0, 'main', '2023-11-12 21:40:47', '2023-11-12 21:40:47', '275_706_2.jpg', 'jpg', 1),
(97, 'App\\Models\\SpaceFinder', 13, 'https://pcc.flonix.com/media/437_8.jpg', 0, 'main', '2023-11-12 21:42:52', '2023-11-12 21:42:58', '437_8.jpg', 'jpg', 1),
(98, 'App\\Models\\SpaceFinder', 14, 'https://pcc.flonix.com/media/792_5.jpg', 0, 'main', '2023-11-12 21:47:40', '2023-11-12 21:58:12', '792_5.jpg', 'jpg', 1),
(99, 'App\\Models\\SpaceFinder', 14, 'https://pcc.flonix.com/media/884_792_5.jpg', 0, 'main', '2023-11-12 21:57:54', '2023-11-12 21:58:12', '884_792_5.jpg', 'jpg', 1),
(100, 'App\\Models\\Space Finder', 0, 'https://pcc.flonix.com/media/903_884_792_5.jpg', 0, 'main', '2023-11-12 21:58:31', '2023-11-12 21:58:31', '903_884_792_5.jpg', 'jpg', 1),
(104, 'App\\Models\\Space Finder', 0, 'https://pcc.flonix.com/media/537_884_792_5.jpg', 0, 'main', '2023-11-12 22:17:56', '2023-11-12 22:17:56', '537_884_792_5.jpg', 'jpg', 1),
(105, 'App\\Models\\Space Finder', 0, 'https://pcc.flonix.com/media/996_437_8.jpg', 0, 'main', '2023-11-12 22:18:16', '2023-11-12 22:18:16', '996_437_8.jpg', 'jpg', 1),
(106, 'App\\Models\\SpaceFinder', 12, 'https://pcc.flonix.com/media/196_6.jpg', 0, 'main', '2023-11-12 22:18:47', '2023-11-12 22:18:48', '196_6.jpg', 'jpg', 1),
(107, 'App\\Models\\PlatinumPartner', 2, 'https://pcc.flonix.com/media/737_download.jpg', 0, 'main', '2023-11-12 22:19:01', '2023-11-12 22:19:05', '737_download.jpg', 'jpg', 1),
(109, 'App\\Models\\SpaceFinder', 9, 'https://pcc.flonix.com/media/884_4.jpg', 0, 'main', '2023-11-12 22:19:35', '2023-11-12 23:29:06', '884_4.jpg', 'jpg', 1),
(110, 'App\\Models\\Directory', 0, 'https://pcc.flonix.com/media/851_706_2.jpg', 0, 'main', '2023-11-12 22:20:06', '2023-11-12 22:20:06', '851_706_2.jpg', 'jpg', 1),
(111, 'App\\Models\\Directory', 0, 'https://pcc.flonix.com/media/950_209_3.jpg', 0, 'main', '2023-11-12 22:20:38', '2023-11-12 22:20:38', '950_209_3.jpg', 'jpg', 1),
(112, 'App\\Models\\PlatinumPartner', 3, 'https://pcc.flonix.com/media/923_download1.jpg', 0, 'main', '2023-11-12 22:20:58', '2023-11-12 22:21:00', '923_download1.jpg', 'jpg', 1),
(114, 'App\\Models\\Directory', 19, 'https://pcc.flonix.com/media/915_ab1-img.png', 0, 'main', '2023-11-12 22:21:49', '2023-11-12 22:21:51', '915_ab1-img.png', 'png', 1),
(116, 'App\\Models\\Directory', 16, 'https://pcc.flonix.com/media/957_7.jpg', 0, 'main', '2023-11-12 22:22:55', '2023-11-12 22:22:57', '957_7.jpg', 'jpg', 1),
(117, 'App\\Models\\Directory', 15, 'https://pcc.flonix.com/media/264_5.jpg', 0, 'main', '2023-11-12 22:23:26', '2023-11-12 22:23:28', '264_5.jpg', 'jpg', 1),
(118, 'App\\Models\\Directory', 14, 'https://pcc.flonix.com/media/926_8.jpg', 0, 'main', '2023-11-12 22:23:57', '2023-11-12 22:23:59', '926_8.jpg', 'jpg', 1),
(119, 'App\\Models\\Directory', 13, 'https://pcc.flonix.com/media/999_1.jpg', 0, 'main', '2023-11-12 22:24:36', '2023-11-12 22:24:37', '999_1.jpg', 'jpg', 1),
(120, 'App\\Models\\Directory', 11, 'https://pcc.flonix.com/media/357_5.jpg', 0, 'main', '2023-11-12 22:25:01', '2023-11-12 22:25:03', '357_5.jpg', 'jpg', 1),
(129, 'App\\Models\\Directory', 18, 'https://pcc.flonix.com/media/956_ab-img.png', 0, 'main', '2023-11-12 22:30:32', '2023-11-12 22:30:34', '956_ab-img.png', 'png', 1),
(131, 'App\\Models\\Directory', 17, 'https://pcc.flonix.com/media/713_int-img.jpg', 0, 'main', '2023-11-12 22:33:05', '2023-11-12 22:33:19', '713_int-img.jpg', 'jpg', 1),
(133, 'App\\Models\\Directory', 0, 'https://pcc.flonix.com/media/856_357_5.jpg', 0, 'main', '2023-11-12 22:39:58', '2023-11-12 22:39:58', '856_357_5.jpg', 'jpg', 1),
(135, 'App\\Models\\Directory', 10, 'https://pcc.flonix.com/media/516_404.png', 0, 'main', '2023-11-12 22:42:29', '2023-11-12 22:42:33', '516_404.png', 'png', 1),
(137, 'App\\Models\\EventCalender', 10, 'https://pcc.flonix.com/media/784_1.jpg', 0, 'main', '2023-11-12 22:45:51', '2023-11-12 22:45:54', '784_1.jpg', 'jpg', 1),
(138, 'App\\Models\\EventCalender', 9, 'https://pcc.flonix.com/media/683_4.jpg', 0, 'main', '2023-11-12 22:48:06', '2023-11-12 22:48:08', '683_4.jpg', 'jpg', 1),
(139, 'App\\Models\\EventCalender', 8, 'https://pcc.flonix.com/media/609_8.jpg', 0, 'main', '2023-11-12 22:48:48', '2023-11-12 22:48:50', '609_8.jpg', 'jpg', 1),
(140, 'App\\Models\\Blog', 8, 'https://pcc.flonix.com/media/262_1.jpg', 0, 'main', '2023-11-12 23:03:35', '2023-11-13 00:08:17', '262_1.jpg', 'jpg', 1),
(141, 'App\\Models\\Blog', 8, 'https://pcc.flonix.com/media/622_262_1.jpg', 0, 'main', '2023-11-12 23:12:37', '2023-11-13 00:08:17', '622_262_1.jpg', 'jpg', 1),
(142, 'App\\Models\\Blog', 7, 'https://pcc.flonix.com/media/130_2.jpg', 0, 'main', '2023-11-12 23:13:43', '2023-11-12 23:13:46', '130_2.jpg', 'jpg', 1),
(143, 'App\\Models\\Blog', 6, 'https://pcc.flonix.com/media/119_3.jpg', 0, 'main', '2023-11-12 23:14:09', '2023-11-12 23:14:11', '119_3.jpg', 'jpg', 1),
(144, 'App\\Models\\Blog', 5, 'https://pcc.flonix.com/media/562_4.jpg', 0, 'main', '2023-11-12 23:14:27', '2023-11-12 23:14:30', '562_4.jpg', 'jpg', 1),
(145, 'App\\Models\\Blog', 4, 'https://pcc.flonix.com/media/813_5.jpg', 0, 'main', '2023-11-12 23:14:54', '2023-11-12 23:14:56', '813_5.jpg', 'jpg', 1),
(146, 'App\\Models\\Blog', 3, 'https://pcc.flonix.com/media/510_6.jpg', 0, 'main', '2023-11-12 23:15:27', '2023-11-12 23:15:34', '510_6.jpg', 'jpg', 1),
(147, 'App\\Models\\Blog', 3, 'https://pcc.flonix.com/media/281_6.jpg', 0, 'main', '2023-11-12 23:15:31', '2023-11-12 23:15:34', '281_6.jpg', 'jpg', 1),
(148, 'App\\Models\\Blog', 2, 'https://pcc.flonix.com/media/359_8.jpg', 0, 'main', '2023-11-12 23:16:01', '2023-11-12 23:16:04', '359_8.jpg', 'jpg', 1),
(149, 'App\\Models\\Directory', 0, 'https://pcc.flonix.com/media/404_5.jpg', 0, 'main', '2023-11-12 23:18:44', '2023-11-12 23:18:44', '404_5.jpg', 'jpg', 1),
(150, 'App\\Models\\SpaceFinder', 10, 'https://pcc.flonix.com/media/277_846_3.jpg', 0, 'main', '2023-11-12 23:28:08', '2023-11-12 23:28:11', '277_846_3.jpg', 'jpg', 1),
(152, 'App\\Models\\SpaceFinder', 9, 'https://pcc.flonix.com/media/860_scc-annual-dinner-2021.jpg', 0, 'main', '2023-11-12 23:28:59', '2023-11-12 23:29:06', '860_scc-annual-dinner-2021.jpg', 'jpg', 1),
(153, 'App\\Models\\Directory', 20, 'https://pcc.flonix.com/media/310_3.jpg', 0, 'main', '2023-11-12 23:29:50', '2023-11-12 23:30:51', '310_3.jpg', 'jpg', 1),
(155, 'App\\Models\\Blog', 8, 'https://pcc.flonix.com/media/298_scc-annual-dinner-2021.jpg', 0, 'main', '2023-11-13 00:06:38', '2023-11-13 00:08:17', '298_scc-annual-dinner-2021.jpg', 'jpg', 1),
(157, 'App\\Models\\Blog', 9, 'https://pcc.flonix.com/media/527_scc-annual-dinner-2021.jpg', 0, 'main', '2023-11-13 00:09:37', '2023-11-13 00:09:39', '527_scc-annual-dinner-2021.jpg', 'jpg', 1),
(158, 'App\\Models\\Space Finder', 0, 'https://pcc.flonix.com/media/927_884_792_5.jpg', 0, 'main', '2023-11-13 09:11:54', '2023-11-13 09:11:54', '927_884_792_5.jpg', 'jpg', 1),
(159, 'App\\Models\\Blog', 0, 'https://pcc.flonix.com/media/451_527_scc-annual-dinner-2021.jpg', 0, 'main', '2023-11-13 10:46:04', '2023-11-13 10:46:04', '451_527_scc-annual-dinner-2021.jpg', 'jpg', 1),
(160, 'App\\Models\\EventCalender', 0, 'https://pcc.flonix.com/media/812_thorntons.png', 0, 'main', '2023-11-13 13:42:00', '2023-11-13 13:42:00', '812_thorntons.png', 'png', 1),
(161, 'App\\Models\\EventCalender', 0, 'https://pcc.flonix.com/media/103_thorntons.png', 0, 'main', '2023-11-13 13:44:02', '2023-11-13 13:44:02', '103_thorntons.png', 'png', 1),
(162, 'App\\Models\\Blog', 10, 'https://pcc.flonix.com/media/937_msp_committee_visit_50.635x0-is.jpg', 0, 'main', '2023-11-13 13:47:05', '2023-11-13 13:47:13', '937_msp_committee_visit_50.635x0-is.jpg', 'jpg', 1),
(163, 'App\\Models\\Blog', 0, 'https://pcc.flonix.com/media/835_937_msp_committee_visit_50.635x0-is.jpg', 0, 'main', '2023-11-13 13:53:18', '2023-11-13 13:53:18', '835_937_msp_committee_visit_50.635x0-is.jpg', 'jpg', 1),
(164, 'App\\Models\\Blog', 11, 'https://pcc.flonix.com/media/650_azets_strip_2.jpg', 0, 'main', '2023-11-13 14:07:40', '2023-11-13 14:07:43', '650_azets_strip_2.jpg', 'jpg', 1),
(165, 'App\\Models\\Blog', 0, 'https://pcc.flonix.com/media/365_l-r_-_robert_graham-campbell_michael_shaw_-_gillespie_macandrew_50pc.jpg', 0, 'main', '2023-11-13 14:09:42', '2023-11-13 14:09:42', '365_l-r_-_robert_graham-campbell_michael_shaw_-_gillespie_macandrew_50pc.jpg', 'jpg', 1),
(166, 'App\\Models\\Blog', 13, 'https://pcc.flonix.com/media/465_perth_sportswomans_dinner.jpg', 0, 'main', '2023-11-13 14:11:09', '2023-11-13 14:11:10', '465_perth_sportswomans_dinner.jpg', 'jpg', 1),
(167, 'App\\Models\\Blog', 12, 'https://pcc.flonix.com/media/389_l-r_-_robert_graham-campbell_michael_shaw_-_gillespie_macandrew_50pc.jpg', 0, 'main', '2023-11-13 14:11:47', '2023-11-13 14:11:48', '389_l-r_-_robert_graham-campbell_michael_shaw_-_gillespie_macandrew_50pc.jpg', 'jpg', 1),
(168, 'App\\Models\\Blog', 14, 'https://pcc.flonix.com/media/561_fashionshownew_600x.png', 0, 'main', '2023-11-13 14:29:51', '2023-11-13 14:29:53', '561_fashionshownew_600x.png', 'png', 1),
(169, 'App\\Models\\Blog', 15, 'https://pcc.flonix.com/media/886_insulation-august-2023.png', 0, 'main', '2023-11-13 14:31:26', '2023-11-13 14:31:52', '886_insulation-august-2023.png', 'png', 1),
(170, 'App\\Models\\Blog', 16, 'https://pcc.flonix.com/media/153_2021_09_pcc_star_logo_final.png', 0, 'main', '2023-11-13 14:36:39', '2023-11-13 14:37:09', '153_2021_09_pcc_star_logo_final.png', 'png', 1),
(171, 'App\\Models\\Blog', 0, 'https://pcc.flonix.com/media/923_qei_-_manufacturing.png', 0, 'main', '2023-11-13 14:39:57', '2023-11-13 14:39:57', '923_qei_-_manufacturing.png', 'png', 1),
(172, 'App\\Models\\Blog', 18, 'https://pcc.flonix.com/media/238_income-tax-calculator-accounting-4097292.jpg', 0, 'main', '2023-11-13 14:41:10', '2023-11-13 14:41:13', '238_income-tax-calculator-accounting-4097292.jpg', 'jpg', 1),
(173, 'App\\Models\\Blog', 19, 'https://pcc.flonix.com/media/510_bank_of_england_3.jpg', 0, 'main', '2023-11-13 14:48:34', '2023-11-13 14:48:41', '510_bank_of_england_3.jpg', 'jpg', 1),
(174, 'App\\Models\\Blog', 20, 'https://pcc.flonix.com/media/103_strip_3.png', 0, 'main', '2023-11-13 14:49:54', '2023-11-13 14:50:27', '103_strip_3.png', 'png', 1),
(175, 'App\\Models\\Blog', 21, 'https://pcc.flonix.com/media/459_23_09_asw_award_50pc.jpg', 0, 'main', '2023-11-13 14:52:53', '2023-11-13 14:52:54', '459_23_09_asw_award_50pc.jpg', 'jpg', 1),
(176, 'App\\Models\\Blog', 22, 'https://pcc.flonix.com/media/778_criaghead_wind_farm-logo.png', 0, 'main', '2023-11-13 14:54:58', '2023-11-13 14:55:48', '778_criaghead_wind_farm-logo.png', 'png', 1),
(177, 'App\\Models\\Blog', 0, 'https://pcc.flonix.com/media/377_davidsons_chemists.jpg', 0, 'main', '2023-11-13 14:56:57', '2023-11-13 14:56:57', '377_davidsons_chemists.jpg', 'jpg', 1),
(178, 'App\\Models\\Blog', 23, 'https://pcc.flonix.com/media/445_davidsons_chemists.jpg', 0, 'main', '2023-11-13 15:04:32', '2023-11-13 15:04:33', '445_davidsons_chemists.jpg', 'jpg', 1),
(179, 'App\\Models\\Blog', 24, 'https://pcc.flonix.com/media/966_sponsored_by_1.png', 0, 'main', '2023-11-13 15:06:07', '2023-11-13 15:06:13', '966_sponsored_by_1.png', 'png', 1),
(180, 'App\\Models\\Blog', 0, 'https://pcc.flonix.com/media/698_pa_page.jpg', 0, 'main', '2023-11-13 15:09:21', '2023-11-13 15:09:21', '698_pa_page.jpg', 'jpg', 1),
(181, 'App\\Models\\Blog', 25, 'https://pcc.flonix.com/media/722_pa_page.jpg', 0, 'main', '2023-11-13 15:10:06', '2023-11-13 15:10:35', '722_pa_page.jpg', 'jpg', 1),
(182, 'App\\Models\\Blog', 26, 'https://pcc.flonix.com/media/736_team_winners_-_scottish_woodland_50pc.jpg', 0, 'main', '2023-11-13 15:11:47', '2023-11-13 15:13:05', '736_team_winners_-_scottish_woodland_50pc.jpg', 'jpg', 1),
(183, 'App\\Models\\Blog', 27, 'https://pcc.flonix.com/media/551_tgo_creative_studio_moved.jpg', 0, 'main', '2023-11-13 15:14:39', '2023-11-13 15:14:51', '551_tgo_creative_studio_moved.jpg', 'jpg', 1),
(184, 'App\\Models\\Blog', 28, 'https://pcc.flonix.com/media/504_perth_kinross_council_negative.png', 0, 'main', '2023-11-13 15:19:13', '2023-11-13 15:19:18', '504_perth_kinross_council_negative.png', 'png', 1),
(185, 'App\\Models\\Blog', 29, 'https://pcc.flonix.com/media/242_winter-warmer-sessions-logo-for-web.png', 0, 'main', '2023-11-13 15:20:50', '2023-11-13 15:20:51', '242_winter-warmer-sessions-logo-for-web.png', 'png', 1),
(186, 'App\\Models\\Blog', 30, 'https://pcc.flonix.com/media/410_tabla_indian_takeaway_2023.jpg', 0, 'main', '2023-11-13 15:21:47', '2023-11-13 15:21:56', '410_tabla_indian_takeaway_2023.jpg', 'jpg', 1),
(187, 'App\\Models\\Blog', 31, 'https://pcc.flonix.com/media/634_scc_network_logo.jpg', 0, 'main', '2023-11-13 15:23:08', '2023-11-13 15:23:11', '634_scc_network_logo.jpg', 'jpg', 1),
(188, 'App\\Models\\Blog', 32, 'https://pcc.flonix.com/media/695_syff_festival_2023_poster_x2000.png', 0, 'main', '2023-11-13 15:25:06', '2023-11-13 15:25:07', '695_syff_festival_2023_poster_x2000.png', 'png', 1),
(189, 'App\\Models\\Blog', 33, 'https://pcc.flonix.com/media/761_freepic_stjohnskirk-1.jpeg', 0, 'main', '2023-11-13 15:26:47', '2023-11-13 15:26:51', '761_freepic_stjohnskirk-1.jpeg', 'jpeg', 1),
(190, 'App\\Models\\Blog', 34, 'https://pcc.flonix.com/media/373_action_glen_has_announced_two_brand-new_day_passes_for_families_and_thrill_seekers_to_enjoy_this_autumn_pic_-_kenny_smith-1.jpg', 0, 'main', '2023-11-13 15:28:11', '2023-11-13 15:28:19', '373_action_glen_has_announced_two_brand-new_day_passes_for_families_and_thrill_seekers_to_enjoy_this', 'jpg', 1);

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
(1, '2019_05_03_000001_create_customer_columns', 1),
(2, '2019_05_03_000002_create_subscriptions_table', 1),
(3, '2019_05_03_000003_create_subscription_items_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_14_120142_create_blogs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `model_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(5, 'App\\Models\\User', 60),
(6, 'App\\Models\\User', 66),
(6, 'App\\Models\\User', 67),
(6, 'App\\Models\\User', 68),
(6, 'App\\Models\\User', 69);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layout` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `has_custom_view` tinyint(1) NOT NULL DEFAULT '1',
  `display_to_menu` tinyint(1) NOT NULL DEFAULT '0',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `is_home_page` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `view`, `layout`, `description`, `is_active`, `has_custom_view`, `display_to_menu`, `is_delete`, `is_home_page`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'home', 'indexv1', 'layoutv2', NULL, 1, 1, 1, 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(5, 'create', NULL, NULL),
(6, 'edit', NULL, NULL),
(7, 'delete', NULL, NULL),
(8, 'update', NULL, NULL);

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(17, 'App\\Models\\User', 60, 'API Token', 'c6fc976eed205d93f7374de102b0b992a50fd7d3aa751aa64f4d734d5828376b', '[\"*\"]', NULL, '2023-10-30 09:02:14', '2023-10-30 09:02:14'),
(18, 'App\\Models\\User', 60, 'API Token', '5746dfc0ba08c2131b5780da7334bd78b289da6d17be9f3082cdcc379c1b5cd5', '[\"*\"]', NULL, '2023-10-30 09:15:37', '2023-10-30 09:15:37'),
(19, 'App\\Models\\User', 60, 'API Token', '63286d8fe0d7de790c4e44ef7fc440c6d35e33bec6a20876a9ed4f6f220e7f7f', '[\"*\"]', NULL, '2023-10-30 18:40:39', '2023-10-30 18:40:39'),
(20, 'App\\Models\\User', 60, 'API Token', 'e53812b2fcee4a57bad326823956a821fca3f791a92c5b83aafc0e1be9dc5dfc', '[\"*\"]', NULL, '2023-11-02 11:35:16', '2023-11-02 11:35:16'),
(21, 'App\\Models\\User', 60, 'API Token', '3ead76bf9636b3a3bc5626050c373563b9158c47a1ae7e354df7b910dc01fc1e', '[\"*\"]', NULL, '2023-11-08 21:49:20', '2023-11-08 21:49:20'),
(22, 'App\\Models\\User', 60, 'API Token', '4de1311b9d9d51e9b1cfee1c7f343b23404b4497bb8125f8a2c5cb068785269c', '[\"*\"]', NULL, '2023-11-09 09:50:51', '2023-11-09 09:50:51'),
(23, 'App\\Models\\User', 60, 'API Token', 'f29607bb8ba263a90abac949c8a3f577bfa145d3dcfdc19b17d607dca7e3760e', '[\"*\"]', NULL, '2023-11-09 14:12:46', '2023-11-09 14:12:46'),
(24, 'App\\Models\\User', 60, 'API Token', '5c0e984797ed6ae93b8b892a6e1e32f669388e738e03dc5e6e5dc23ff11627a8', '[\"*\"]', NULL, '2023-11-09 18:13:40', '2023-11-09 18:13:40'),
(25, 'App\\Models\\User', 60, 'API Token', 'a12c394c4e71bd2eda14caffe4479f62f2e40ddc7b4f71f53b406e9e72fc1c2b', '[\"*\"]', NULL, '2023-11-09 23:33:24', '2023-11-09 23:33:24'),
(26, 'App\\Models\\User', 60, 'API Token', '19ff32976094d84110e790353115d35a312a009b9e14f3c23f8408a21ea83e3a', '[\"*\"]', NULL, '2023-11-09 23:33:50', '2023-11-09 23:33:50'),
(27, 'App\\Models\\User', 60, 'API Token', 'c5c96522db36d83afd7c55e4394c29e2fbf34ae5160b4fb8c3045cc05b6ee972', '[\"*\"]', NULL, '2023-11-10 11:31:14', '2023-11-10 11:31:14'),
(28, 'App\\Models\\User', 60, 'API Token', 'a5a71b6c02661c5282e24ee731f3139993a65028c887d181a78141c0907e8fff', '[\"*\"]', NULL, '2023-11-10 17:06:42', '2023-11-10 17:06:42'),
(29, 'App\\Models\\User', 60, 'API Token', '750ba5844b470f27fea44681b8f065bb9d7085c04940080c1fca5964c3493543', '[\"*\"]', NULL, '2023-11-10 17:58:22', '2023-11-10 17:58:22'),
(30, 'App\\Models\\User', 60, 'API Token', '6f6770c82f1bfd285a50d062199144ec5aae26aebd71061bf34d3ab9b1990645', '[\"*\"]', NULL, '2023-11-10 18:09:02', '2023-11-10 18:09:02'),
(31, 'App\\Models\\User', 60, 'API Token', 'd26e2b7d063920e5c24bce8b0e31b15f9a416db5c9cec6a7f2e87d108bed6fa9', '[\"*\"]', NULL, '2023-11-10 18:19:18', '2023-11-10 18:19:18'),
(32, 'App\\Models\\User', 60, 'API Token', '75a1fd5c006ca9b5757ddf8ad66e9ebd079fbcf237690ae37f5866926bbf908b', '[\"*\"]', NULL, '2023-11-10 18:53:42', '2023-11-10 18:53:42'),
(33, 'App\\Models\\User', 60, 'API Token', 'd0ce22edc176ee61315e5006cd079633152c0e1a4b64e8333a70f1a05dc8d95d', '[\"*\"]', NULL, '2023-11-10 19:10:12', '2023-11-10 19:10:12'),
(34, 'App\\Models\\User', 60, 'API Token', 'ccb9e4ef295194712b91668363093acb99d38590cf807eaae13209e710c03383', '[\"*\"]', NULL, '2023-11-10 20:46:52', '2023-11-10 20:46:52'),
(35, 'App\\Models\\User', 60, 'API Token', '01d16e27a0be0e62c61bd4d943e8caae2fb771385c7d02b96d58b1838dcab373', '[\"*\"]', NULL, '2023-11-12 18:12:58', '2023-11-12 18:12:58'),
(36, 'App\\Models\\User', 60, 'API Token', '73ddfd962f2a534a60066535dce4d3bade5783eb5a0d9a26430b1bca58a14702', '[\"*\"]', NULL, '2023-11-12 18:17:53', '2023-11-12 18:17:53'),
(37, 'App\\Models\\User', 60, 'API Token', '007c9ac9ffe0de27141ff58f38e71ab9ec03ca63aceb84f4714c1b501aff8d84', '[\"*\"]', NULL, '2023-11-12 20:27:19', '2023-11-12 20:27:19'),
(38, 'App\\Models\\User', 60, 'API Token', 'd5a0c1f1bf1247721490a20532da344b4ac391002d2f0dad6e4beb7355641453', '[\"*\"]', NULL, '2023-11-12 21:13:57', '2023-11-12 21:13:57'),
(39, 'App\\Models\\User', 60, 'API Token', '1f7c6a4adf083330e4c2067cb6cbe0627ee91804f7d2e2dbe5e3ff55504bb462', '[\"*\"]', NULL, '2023-11-12 21:22:29', '2023-11-12 21:22:29'),
(40, 'App\\Models\\User', 60, 'API Token', 'bf15d0dee85c924c5bfa67256f96c56653d41b4b41100da6ad3ea96e001678f7', '[\"*\"]', NULL, '2023-11-12 22:17:05', '2023-11-12 22:17:05'),
(41, 'App\\Models\\User', 60, 'API Token', 'e061ff538761e5953c5a9e0364cbb631bc0a943ba4ca52ce824f09df6312e9c7', '[\"*\"]', NULL, '2023-11-13 09:11:35', '2023-11-13 09:11:35'),
(42, 'App\\Models\\User', 60, 'API Token', '40ca463702b5ebe1459a44924b0293651bb2ae1d11731d979cf43006146f22ad', '[\"*\"]', NULL, '2023-11-13 13:43:21', '2023-11-13 13:43:21'),
(43, 'App\\Models\\User', 60, 'API Token', '7b97147aa8f029cd8bfc321336f1b6041094a0c0e5dc31019480176c1d4956ed', '[\"*\"]', NULL, '2023-11-13 13:51:53', '2023-11-13 13:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `platinum_partners`
--

CREATE TABLE `platinum_partners` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `is_delete` tinyint(1) DEFAULT '0',
  `is_approved` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `platinum_partners`
--

INSERT INTO `platinum_partners` (`id`, `title`, `description`, `is_active`, `is_delete`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 'test', '<p>test</p>', 1, 0, 1, '2023-11-10 21:40:47', '2023-11-11 20:59:26'),
(2, 'test2', '<p>test2</p>', 0, 0, 0, '2023-11-10 22:03:40', '2023-11-12 22:19:05'),
(3, 'testing', '<p>testing for platinum partners</p>', 1, 0, 1, '2023-11-12 22:21:00', '2023-11-12 22:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `guard` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `is_active`, `is_delete`, `created_at`, `updated_at`, `guard`) VALUES
(5, 'admin', 1, 0, NULL, NULL, 'admin'),
(6, 'user', 1, 0, NULL, NULL, 'user'),
(8, 'employee', 1, 0, NULL, NULL, 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `space_finders`
--

CREATE TABLE `space_finders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_approved` tinyint(4) DEFAULT '1',
  `user_id` bigint(20) DEFAULT '0',
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `venue_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `space_finders`
--

INSERT INTO `space_finders` (`id`, `title`, `description`, `is_active`, `is_delete`, `created_at`, `updated_at`, `is_approved`, `user_id`, `mobile_no`, `phone`, `email`, `address`, `web_url`, `venue_url`, `facebook_url`, `instagram_url`, `linkedin_url`, `youtube_url`, `slug`) VALUES
(9, 'abc', '<p>https://www.abc.com</p>', 1, 0, '2023-11-01 21:59:39', '2023-11-12 23:29:06', 1, 66, '11111111111', '11111111111', 'abc@gmail.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com', 'https://www.abc.com', 'abc'),
(10, 'Dolor voluptatibus e', '<p>sdzf dszf szdf dszf sdzfsz fsdz fdsfsdzfsdzfsd fgegdsafg sdafafgafsadg sgds</p>', 1, 0, '2023-11-10 19:02:37', '2023-11-12 23:28:11', 1, 62, '+ (573) 825-9274', '+ (573) 825-9274', 'pomykadove@mailinator.com', 'Quos veniam adipisc', 'https://pcc.flonix.com/', 'https://pcc.flonix.com/', 'https://pcc.flonix.com/', 'Voluptas harum quaer', 'Accusamus saepe eum', 'Itaque voluptatum de', 'abc1'),
(11, 'test22', '<p>best locations</p>', 1, 0, '2023-11-10 19:14:55', '2023-11-10 19:14:55', 1, 66, '0', '0', 'daml@test.com', '00', '00', '00', '00', '00', '00', '00', ' '),
(12, 'test', '<p>test space finder</p>', 1, 0, '2023-11-12 21:37:58', '2023-11-12 22:18:48', 1, 62, 'hh', 'hh', 'test', 'hh', 'hh', 'hh', 'hh', 'hh', 'https://www.abc.com', 'hh', 'test1202'),
(13, 'Dolore blanditiis au', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1, 0, '2023-11-12 21:42:58', '2023-11-12 21:42:58', 1, 66, '155886633556', '+1 (624) 572-5933', 'suse@mailinator.com', 'Eos asperiores moll', 'https://pcc.flonix.com/', 'https://pcc.flonix.com/', 'https://pcc.flonix.com/', 'https://pcc.flonix.com/', 'https://pcc.flonix.com/', 'https://pcc.flonix.com/', 'aut-a'),
(14, 'test 123', '<p>this is just a test</p>', 1, 0, '2023-11-12 21:47:43', '2023-11-12 21:58:12', 1, 67, '+1 (629) 981-4148', '+1 (629) 981-4148', 'naqusuhehe@mailinator.com', 'Quisquam eos deserun', 'https://pcc.flonix.com/', 'https://pcc.flonix.com/', 'https://pcc.flonix.com/', 'https://pcc.flonix.com/', 'https://pcc.flonix.com/', 'https://pcc.flonix.com/', 'magnam-e');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_items`
--

CREATE TABLE `subscription_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subscription_id` bigint(20) UNSIGNED NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_email_verified` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `signin_at` datetime DEFAULT NULL,
  `is_logout` tinyint(1) NOT NULL DEFAULT '0',
  `logout_at` datetime DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_login` tinyint(1) DEFAULT '0',
  `login_at` timestamp NULL DEFAULT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_last_four` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `last_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postalcode` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` tinyint(4) DEFAULT '0',
  `username` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_no` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `venue_url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `email`, `phone`, `email_verified_at`, `is_email_verified`, `password`, `is_active`, `is_delete`, `signin_at`, `is_logout`, `logout_at`, `remember_token`, `created_at`, `updated_at`, `is_login`, `login_at`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`, `last_name`, `company`, `address`, `postalcode`, `is_approved`, `username`, `tel_no`, `venue_url`, `website`, `facebook_url`, `youtube_url`, `instagram_url`, `linkedin_url`) VALUES
(60, 'admin', 'admin@gmail.com', '03332424345', '2023-10-14 07:55:16', 0, '$2y$10$siVjd8k6VvqYKgExJI7Exu2wRVHm3Td5HxHfmeke5V6Vz0MkWTL3a', 1, 0, '2023-10-21 09:10:24', 0, '2023-10-30 00:54:56', NULL, NULL, '2023-11-13 13:51:53', 1, '2023-11-13 13:51:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'Xena', 'gagorahyn@mailinator.com', '1 2919651647', NULL, 0, '$2y$10$uW88SHkbQvTtJdYqHfCff.OqCzjWFDSfu/Y4OXIVKcwzY.2GmKQUy', 1, 0, NULL, 0, NULL, NULL, '2023-10-22 03:25:39', '2023-10-22 03:25:39', 0, NULL, NULL, NULL, NULL, NULL, 'Hodges', 'Middleton Donaldson Inc', 'Molestias totam itaq', 'Temporibus est fuga', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'Xena', 'gagorahyn1@mailinator.com', '1 2919651647', NULL, 0, '', 1, 0, NULL, 0, NULL, NULL, '2023-10-22 03:31:46', '2023-10-22 04:27:15', 0, NULL, NULL, NULL, NULL, NULL, 'Hodges', 'Middleton Donaldson Inc', 'Molestias totam itaq', 'Temporibus est fuga', 1, 'xena', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'Hillary', 'jufymeqew@mailinator.com', '3161620852', NULL, 0, '', 1, 0, NULL, 0, NULL, NULL, '2023-10-22 08:11:35', '2023-10-22 08:12:03', 0, NULL, NULL, NULL, NULL, NULL, 'Roman', 'Morton Hale Plc', 'Neque molestiae temp', 'Id harum dolores ut', 1, 'adminuser', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'Hope', 'qopegafo@mailinator.com', '12356487965', NULL, 0, '$2y$10$8MK2thXDeVW8zAzidXAPK.SwxjBMv1dBRNDdmSeZTFkdXTdfCsrFi', 1, 0, NULL, 0, NULL, NULL, '2023-10-22 08:20:01', '2023-10-22 08:20:01', 0, NULL, NULL, NULL, NULL, NULL, 'Howell', 'Jenkins and Petty Inc', 'Delectus eos non n', 'Aut iste sapiente mi', 1, 'hezelu', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'Acton', 'fusohidim@mailinator.com', '1235478622', NULL, 0, '$2y$10$kQ8d8w/QeX1l6o1FShYjRONrEYkmCWUScbdYQiLOgTS4ApRurPtlG', 1, 0, NULL, 0, NULL, NULL, '2023-10-28 07:52:43', '2023-10-28 07:52:43', 0, NULL, NULL, NULL, NULL, NULL, 'Finley', 'Sherman Cotton Traders', 'Earum earum id paria', 'Commodo obcaecati au', 1, 'ririqir', '02145786622222', 'https://www.cuxykyfafe.ws', 'https://www.cuxykyfafe.ws', 'https://www.cuxykyfafe.ws', 'https://www.cuxykyfafe.ws', 'https://www.cuxykyfafe.ws', 'https://www.cuxykyfafe.ws');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directories`
--
ALTER TABLE `directories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_calenders`
--
ALTER TABLE `event_calenders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `platinum_partners`
--
ALTER TABLE `platinum_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`),
  ADD KEY `role_has_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `space_finders`
--
ALTER TABLE `space_finders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscriptions_stripe_id_unique` (`stripe_id`),
  ADD KEY `subscriptions_user_id_stripe_status_index` (`user_id`,`stripe_status`);

--
-- Indexes for table `subscription_items`
--
ALTER TABLE `subscription_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscription_items_subscription_id_stripe_price_unique` (`subscription_id`,`stripe_price`),
  ADD UNIQUE KEY `subscription_items_stripe_id_unique` (`stripe_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_stripe_id_index` (`stripe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `directories`
--
ALTER TABLE `directories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `event_calenders`
--
ALTER TABLE `event_calenders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `platinum_partners`
--
ALTER TABLE `platinum_partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `space_finders`
--
ALTER TABLE `space_finders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription_items`
--
ALTER TABLE `subscription_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
