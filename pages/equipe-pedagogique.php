<h1>Equipe Pédagogique</h1>
<?php
	$list_profs_alpha = array();
	$list_profs_art = array("prehistoire" => array(), "antique" => array(), "medieval" => array(), "moderne" => array(), "contemporain" => array());
	$list_profs_archeo = array("prehistoire" => array(), "protohistoire" => array(), "antiquite" => array(), "moyen-age" => array());
	
	// Status possilbes : MCF , PR , PRAG
	// Equipes possibles : PLHCRATA , FRAMESPA , TRACES
	
	$aribaud_christine = array("name" => "ARIBAUD",
						"firstname" => "Christine",
						"status" => "MCF",
						"mail" => " christine.aribaud@wanadoo.fr",
						"team" => "FRAMESPA",
						"research" => "
						<ul><li>Arts décoratifs, arts textiles, décor religieux.
						</li>
						<li>
Arts textiles (tissus, broderies, dentelle), le plus souvent utilisés par la liturgie au service de l'Eglise.
</li>
<li>
Question historiques concernant les aspects techniques, sociologiques, religieux et plastiques de ces expressions artistiques au service des commanditaires de prestige du XVIe au XIXe siècles.</li></ul>",
						"publication" => "<p><ul><li>ARIBAUD, C. (2001). « Au paradis le temps d’une messe ! Splendeurs du vestiaire liturgique corse », dans Corsica Christiana, 2000 ans de Christianisme en Corse, catalogue d’exposition, Corte, musée de la Corse, 2001, p. 234-262, et notices n° 96 à 107, n° 167-168, n°172, n° 174 à 176.
						</li>
						<li>
ARIBAUD,C. (2002) « Collection d’objets ou objets de collection ? Les textiles du couvent des Ursulines d’Auch (France, 1860-1897) », dans, Collections-Collectionneurs : Textiles d’Amérique et de France, Actes colloque 2000, (sous la dir. de J. Mathieu et C. Turgeon) Presses de l’Université Laval, Québec., p. 117-134.
</li>
<li>
ARIBAUD,C (2003) « Les pouvoirs visibles et invisibles de la chasuble », actes du colloque Vêture & Pouvoir, Albi, oct. 2001, C. Aribaud et S. Mouysset éd., Université Toulouse 2-CNRS, collection Méridiennes, 2003, p.21-34.
ARIBAUD, C. (2003). « L’étoffe des solennités en service dans les églises du Tarn », dans Textiles sacrés du Tarn, catalogue (sous la directoin de C. Aribaud et S. Desachy), Paris, Somogy, 2003, p. 10-46 et notices n°1 à 42</li></ul></p>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de FRAMESPA</p>",
						"link" => "http://framespa.univ-tlse2.fr/actualites/pratique/annuaire/aribaud-christine-24338.kjsp?RH=1300694574999");
						
						
	$aubry_brigitte = array("name" => "AUBRY",
						"firstname" => "Brigitte",
						"status" => "MCF",
						"mail" => "aubry@univ-tlse2.fr  ",
						"team" => "FRAMESPA",
						"research" => "<ul>

<li>Les pratiques artistiques après 1945, en particulier l'art anglais, le pictural dans sa diversité, et les
problématiques de l'image contemporaine - à partir, notamment, de la notion d'« hybridation » des médiums.</ul>",
						"publication" => "<ul><p>
<li>« Produire une ambivalence: la résolution du conflit abstraction/figuration dans les « Irish Paintings » (1983-1993) de Richard Hamilton », Art Présence, n°53, janvier-février-mars 2005, p. 2-13.
</li>
<li>
« Le Mariage du pinceau et de la lentille ». La peinture hybride de Richard Hamilton », Etudes Photographiques, n°11, mai 2002, p. 125-139.
</li>
<li>
« Cherchez l'erreur. De l'autoréférentialité chez Richard Hamilton », Revue d'Esthétique, n°39, 2001, p. 153-155.
</li>
</ul>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de FRAMESPA</p>",
						"link" => "http://framespa.univ-tlse2.fr/actualites/pratique/annuaire/aubry-brigitte-68338.kjsp?RH=annuaire_framespa");
	
						
	$barlangue_luce = array("name" => "BARLANGUE",
						"firstname" => "Luce",
						"status" => "PR",
						"mail" => "luce.barlangue@wanadoo.fr",
						"team" => "FRAMESPA",
						"research" => "<ul>
<li>
L'art en province 1880-1950 : monographies, vie institutionnelle, etc.
</li>
<li>
Le monument public et sa réception.
</li>
<li>
Patrimoine, identité culturelle, sociabilité : le Midi de la France 1870-1970.
</li>
<li>
Expertise en arts décoratifs, métiers du marché de l’art
</li>
</ul>",
						"publication" => "<ul><p>
<li>
“Une école toulousaine ? 1888-1914 : hypothèses, vérifications, conclusions”, dans Arts et identités régionales, Actes des journées du Centre François-Georges Pariset, Bordeaux, 1998, pp. 31-47.
</li>
<li>
“Le monument à Ferroul de Narbonne”, dans Les vignobles du Sud, XVIe-XXe siècle, Actes du colloque du Centre d’Histoire moderne et contemporaine de l’Europe méditerranéenne et ses périphéries, mars 2001.
</li>
<li>
“De l’utilisation des adjectifs toulousain, méridional, latin, occitan, ou comment valoriser les arts plastiques locaux par une typologie apologétique : l’exemple de Toulouse, 1888-1939”, dans Terres et hommes du Sud, Actes du CTHS, Paris, 2003.
</li>
</ul>
</p>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de FRAMESPA</p>",
						"link" => "http://framespa.univ-tlse2.fr/actualites/pratique/annuaire/barlangue-luce-39561.kjsp?RH=annuaire_framespa");
						
	$bon_francois = array("name" => "BON",
						"firstname" => "François",
						"status" => "PR",
						"mail" => "francois.bon@univ-tlse2.fr",
						"team" => "TRACES",
						"research" => "<p>
<ul>
<li>
Avènement du Paléolithique supérieur en Europe occidentale
</li>
<li>
Late Stone Age en Afrique sub-saharienne
</li>
<li>
Histoire de la préhistoire
</li>
<li>
technologie lithique. 
</li>
</ul>
</p>",
						"publication" => "<ul><p>
<li>
L’Aurignacien entre Mer et Océan. Réflexion sur l’unité des phases anciennes de l’Aurignacien dans le sud de la France. Mémoire de la Société Préhistorique Française, XXIX, 2002, 253 p.
</li>
<li>
A probable fifteenth century Khoekhoe kraal on the Vredenburg peninsula. South African Archaeological Bulletin, 2006.
</li>
<li>
L’équipement lithique des Aurignaciens à la Tuto de Camalhot (Saint-Jean-de-Verges, Ariège), sa relation avec la mobilité des groupes et la répartition de leurs activités dans un territoire. In : J. Jaubert et M. Barbaza dir., 
</li>
<li>
Territoires, déplacements, mobilité, échanges durant la Préhistoire. Ed. CTHS, Actes du 126e Congrès National des Sociétés Historiques et Scientifiques, Toulouse, 2005, p. 173-184.
</li>
</p>
</ul>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de TRACES</p>",
						"link" => "http://traces.univ-tlse2.fr/accueil-traces/equipes-de-recherche/equipe-1-societes-et-milieux-des-populations-de-chasseurs-cueilleurs-collecteurs/bon-francois-47310.kjsp?RH=creap");
						
	 $borau_laetitia = array("name" => "BORAU",
						"firstname" => "Laetitia",
						"status" => "ATER",
						"mail" => "l.borau@orange.fr",
						"team" => "ARTEHIS",
						"research" => "<p> 
	<ul>
	<li>					
Recherche sur les équipements hydrauliques romains en particulier les aqueducs (mais aussi les canalisations, les égouts, les bassins, les citernes, les fontaines, les thermes). 
</li>
<li>
 Etude de l’organisation territoriale, de l’urbanisme, de l’habitat urbain et rural. 
 </li>
 <li>
 Analyse des techniques de construction de la fin de l’Age du Fer et de l’époque romaine.
</li>
</ul>
</p>",
						"publication" => "<ul><p>
						<li>
						BORAU L. LABAUNE, Y., MAURICE-CHABARD B. 2010 : Aqua : la gestion de l’eau à Augustodunum. Journal de l’exposition. 30 juin 2010-11 octobre 2010. Autun, Ville d’Autun, Musée Rolin, 12 p.
</li>
<li>
BORAU L. 2010 : « L’équipement hydraulique d’Augustodunum (Autun) à l’époque antique. Synthèse des recherches et premier bilan », L’eau dans la vie des hommes de l’antiquité à nos jours, Actes du 17e colloque de l’Association bourguignonne des Sociétés Savantes, Autun, 13-14 octobre 2007, p.54-66.
</li>
<li>
BORAU L. 2009 : « L’équipement hydraulique d’Augustodunum. Nouvelle étude », Bulletin n°35 : Antiquité, archéologie classique, sous la direction de G. SAURON, Bulletin Archéologique du Comité des Travaux historiques et scientifiques, p. 35-53.
</li>
BORAU L. 2009 : « Nouvelle étude de l’aqueduc gallo-romain de Montjeu à Augustodunum », Revue Archéologique de l’Est, 58, p. 461-476.
</li>
</p>
</ul>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de ARTEHIS</p>",
						"link" => "http://artehis-cnrs.in2p3.fr/BORAU-Laetitia");
						
	$boube_emmanuelle = array("name" => "BOUBE",
						"firstname" => "Emmanuelle",
						"status" => "MCF",
						"mail" => " boube@univ-tlse2.fr ",
						"team" => "TRACES",
						"research" => "<ul><p>
<li>
Antiquité, Antiquité tardive et très haut Moyen Âge (jusqu’au VIIe s), en Espagne et dans le sud-ouest  de la Gaule.
</li>
<li>
Urbanisme romain et romain tardif
</li>
<li>
Topographie chrétienne (IVe-VIIe s.), implantation du christianisme et occupation du sol dans les campagnes (archéologie paléochrétienne)
Étude des traces laissées par les peuples germaniques, les Wisigoths en particulier.
</li>
<li>
Céramique romaine tardive d’importation (Afrique) et ses imitations locales.
</li>
</p>
</ul>",
						"publication" => "<ul><p>
						
<li>
L’urbanisme dans la province ecclésiastique de Carthaginoise de l’Antiquité tardive à la fin du royaume wisigothique (IVe-VIIIe s.), dans Famille, violence et christianisation au Moyen Âge, Cultures et civilisations médiévales, n° 31, Mélanges offerts à Michel Rouche, éd. M. Aurell /Th. Deswarte, PUPS, Paris, 2005, p. 365-376.
</li>
<li>
Un plat de sigillée africaine D à décor de colombes, découvert à Sala (Rabat), dans Mélanges offerts à Mme Joudia Hassar-Benslimane, Rabat (à paraître en 2007) (12 pages).
</li>
<li>
Ouvrage collectif : Carte archéologique de Haute-Garonne (à paraître en 2007).
</li>
</p>
</ul>", 
					 
						"linkLabel" => "<p>Fiche détaillée sur le site de TRACES</p>",
						"link" => "http://traces.univ-tlse2.fr/accueil-traces/equipes-de-recherche/equipe-7-terrae-archeologie-et-histoire-des-societes-medievales-meridionales/boube-emmanuelle-48566.kjsp");
						
											
						
	$bouet_alain = array("name" => "BOUET",
						"firstname" => "Alain",
						"status" => "PR",
						"mail" => "alain.bouet@univ-tlse2.fr ",
						"team" => "FRAMESPA",
						"research" => "<ul><p><li>La thématique des travaux scientifiques menés depuis la thèse de doctorat est celle de l'architecture, qu'elle soit monumentale ou liée à l'habitat. Mon intérêt se porte particulièrement sur l'organisation des villes et de leurs centres monumentaux. Ainsi a été développée une réflexion sur plusieurs types d'édifices : les thermes bien évidemment, mais aussi le campus, fort modestement appréhendé dans les provinces occidentales, les sièges d'association ou, plus récemment, les fontaines et les latrines. Parallèlement, j'ai développé l'important chantier-école de l'Université de Bordeaux III à Barzan (Charente-Maritime) (1998-2009) qui a accueilli jusqu'à cinquante étudiants.</li></p></ul>",
						"publication" => "<ul><p>
<li>
Bouet, A., 2010, De la diversité urbaine : des hommes et des dieux sur les pentes de Puymin à Vasio Vocontiorum, Revue Archéologique, 2010, 3-46.
</li>
<li>
Bouet, A., Saragoza, Fl., Nouvelles recherches sur les thermes de Lutèce, Revue Archéologique, 2, 2009, 186-192.

</li>
<li>
Bouet, A., Saragoza, Fl., Temples affrontés d'époque romaine : origine et avatars d'une forme architecturale, Revue des Etudes Anciennes, 111, 2009, 217-236.
</li>
<li>
Bouet, A., «Les Santons et le commerce de la laine », et «L'entrepôt de Barzan »  in : La voie de Rome, Entre Méditerranée et Atlantique, Catalogue de l'exposition, Bordeaux, 2008, 94 et 119.
</li>
						
				</p>
				</ul>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de TRACES</p>",
						"link" => "http://traces.univ-tlse2.fr/accueil-traces/equipes-de-recherche/equipe-6-villes-et-agglomerations-terroirs-et-territoires/bouet-alain-50117.kjsp?RH=archeologie_traces");
						
	 $bourdier_camille = array("name" => "BOURDIER",
						"firstname" => "Camille",
						"status" => "ATER",
						"mail" => "ca.bourdier@laposte.net",
						"team" => "TRACES",
						"research" => "<ul>
						<li>
						
						<p>Mes recherches portent sur l’art pariétal du Paléolithique supérieur européen, et tout particulièrement sur les sociétés magdaléniennes. L’art pariétal en contexte archéologique (associé à des niveaux archéologiques) en constitue l’objet d’étude privilégié. Axées sur la région Vienne-Charente-Périgord (Roc-aux-Sorciers, Chaire-à-Calvin, Reverdit, Cap-Blanc), ces recherches abordent deux problématiques principales. Une problématique culturelle vise à préciser la structuration spatio-temporelle des faciès symboliques dans cet espace. Une problématique sociologique s’intéresse à la variabilité fonctionnelle des sites ornés et à la structuration symbolique des territoires.
Une partie de mes recherches est également consacrée aux développements méthodologiques dans l’enregistrement et le traitement des graphismes pariétaux, avec un intérêt particulier porté aux technologies 3D (Chauvet, Cussac, Roc-aux-Sorciers).</p>
</li>
</ul>",
						"publication" => "<ul><li><p>
<li>
Bourdier C., Spécificités et parenté du dispositif pariétal de l’abri Reverdit (Sergeac, Dordogne) : l’apport de l’étude des blocs ornés de la collection Delage. Paléo, 22, p. 53-68.
</li>
<li>
Bourdier C., Le Magdalénien moyen en Poitou-Charentes : une expression symbolique propre. In Buisson-Catil J. et Primault J. (dir.) – Préhistoire entre Charente et Vienne. Hommes et sociétés du Paléolithique. Chauvigny : Association des Publications Chauvignoises, mémoire XXXVIII, p. 363-382.
</li>
<li>
Bourdier C., avec la collaboration de Pinçon G., Abgrall A., Huard O., Le Brun E. et Peyroux M., Histoires de bisons et de chevaux : regard sur l’évolution de la frise pariétale du Cap-Blanc (Marquay, Dordogne) à travers l’analyse du panneau de l’alcôve. Paléo, 21, p.17-38.
</li>
						
						</p></ul>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de TRACES</p>",
						"link" => "http://traces.univ-tlse2.fr/accueil-traces/equipes-de-recherche/equipe-2-centre-de-recherche-et-d-etude-pour-l-art-prehistorique-creap-/bourdier-camille-151899.kjsp?RH=creap");
	
	 $castaldo_ines = array("name" => "CASTALDO",
						"firstname" => "Ines",
						"status" => "ATER",
						"mail" => "",
						"team" => "FRAMESPA",
						"research" => "<ul><li><p></p></li></ul>",
						"publication" => "<ul><li><p></p></li></ul>", 
						"linkLabel" => "<p></p>",
						"link" => "");
						
	 $cauliez_jessie = array("name" => "CAULIEZ",
						"firstname" => "Jessie",
						"status" => "ATER",
						"mail" => "jessie.cauliez@univ-tlse2.fr",
						"team" => "TRACES",
						"research" => "<ul><li><p>
						Mes thématiques de recherche sont orientées vers la caractérisation des sociétés néolithiques dans le bassin nord occidental de la Méditerranée. Ici, mes travaux se concentrent sur la fin de la période néolithique (3700-1900 av. n.-è.), étape qui voit le démantèlement des groupes du Néolithique moyen, puis la diffusion de la métallurgie du cuivre et enfin le développement du Campaniforme.
						</p></li></ul>",
						"publication" => "<ul><p>
<li>
Cauliez J. : « Restitution des aires culturelles au Néolithique final dans le sud-est de la France. Dynamiques de formation et d’évolution des styles céramiques », Gallia Préhistoire, t. 53, p. 85-202.
</li>
<li>
Cauliez J., Blaise E., Bressy C., Convertini F., Gilabert C., Hamon C., Lazard N., Negroni S., Ollivier V., Pellissier M., Pétrequin P., Piatscheck C., Provenzano N., Renault S. : « Le Limon-Raspail à Bédoin dans le Vaucluse et le Néolithique final de moyenne vallée du Rhône », Bulletin de la Société Préhistorique Française, t. 108, fasc. 2, p. 263-330
</li>
						
					</p></ul>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de TRACES</p>",
						"link" => "http://traces.univ-tlse2.fr/accueil-traces/equipes-de-recherche/equipe-3-societes-et-cultures-du-neolithique-et-du-debut-des-ages-des-metaux/cauliez-jessie-69977.kjsp?RH=neolithique_traces");
	
	 $cazes_quitterie = array("name" => "CAZES",
						"firstname" => "Quitterie",
						"status" => "MCF",
						"mail" => "",
						"team" => "FRAMESPA",
						"research" => "<p></p>",
						"publication" => "<p></p>", 
						"linkLabel" => "<p></p>",
						"link" => "");
						
	$compain_catherine = array("name" => "COMPAIN",
						"firstname" => "Catherine",
						"status" => "PRAG",
						"mail" => "",
						"team" => "FRAMESPA",
						"research" => "<p></p>",
						"publication" => "<p></p>", 
						"linkLabel" => "<p></p>",
						"link" => "");		
	
						
	$czerniak_virginie = array("name" => "CZERNIAK",
						"firstname" => "Virginie",
						"status" => "MCF",
						"mail" => " virginie.czerniak@wanadoo.fr",
						"team" => "FRAMESPA",
						"research" => "<ul><p>

<li>
Les arts de la couleur au Moyen-Âge, étude technique, stylistique et iconographique des peintures murales du Moyen-Âge central en Europe méridionale, espaces religieux et laïcs.
</li>
<li>
Analyse du bâti culturel et civil conservant des décors peints.
Recherches comparatives et associatives sur la production de peintures et de manuscrits.
</li>
</p>
</ul>",
						"publication" => "<ul><p>
<li>
« Le décor peint dans l'habitat aristocratique médiéval : exemples méridionaux », L'aristocratie, les arts et l'architecture à l'époque romane, Cahiers de Saint-Michel de Cuxa, XXXVI, 2005, p.57-64.
</li>
<li>
« Les ateliers de peintres itinérants au Moyen Age: les exemples quercinois », Rencontres archéologiques de Saint-Céré, n°13, 2006, p.79-85.
</li>
<li>
« Les sujets historiés dans les décors peints des demeures médiévales : une iconographie spécifique? », La maison au Moyen Âge dans le Midi de la France, Actes des journées d'étude de Cahors, 6-8 juillet 2006, Société Archéologique du Midi de la France, hors-série, à paraître en 2007.
</li>
</p>
</ul>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de FRAMESPA</p>",
						"link" => "http://framespa.univ-tlse2.fr/actualites/pratique/annuaire/czerniak-virginie-40012.kjsp?RH=annuaire_framespa");									
						
	$dardenay_alexandra = array("name" => "DARDENAY",
						"firstname" => "Alexandra",
						"status" => "PR",
						"mail" => "adardenay@yahoo.fr ",
						"team" => "TRACES",
						"research" => "<ul><p>

<li>
Histoire de l’art romain
</li>
<li>
Domaines de compétences : Le décor romain, en axant la problématique sur les interactions entre sphère publique et sphère privée dans l’espace de la cité.
</li>
</p>
</ul>",
						"publication" => "<ul><p>

<li>
La diffusion des mythes fondateurs de Rome au sein du décor architectural (sphère publique/sphère privée), Actes du colloque international de l’AIPMA, Saragosse, 25-28 septembre 2004, C. Guiral Pelegrin dir. 
</li>
<li>
Le rôle des ateliers de lampes dans la diffusion iconographique de la fuite d’Enée, Mélanges de la Casa de Velazquez, n°35-2, 2005, p.161-189.
</li>
<li>
Les peintures murales romaines de la Place Kléber, Strasbourg, in Cahiers Alsaciens d’Archéologie, d’Art et d’Histoire, tome XLIV, 2001, p.41- 51.
</li>
</p>
</ul>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de TRACES</p>",
						"link" => "http://traces.univ-tlse2.fr/accueil-traces/equipes-de-recherche/equipe-6-villes-et-agglomerations-terroirs-et-territoires/dardenay-alexandra-48849.kjsp?RH=ACCUEIL_TRACES");
						
	 $debuiche_colin = array("name" => "DEBUICHE",
						"firstname" => "Colin",
						"status" => "ATER",
						"mail" => "debuiche.colin@gmail.com",
						"team" => "FRAMESPA",
						"research" => "<ul><li><p>Dans la continuité des recherches menées en Master qui portaient sur Les ordres dans l'architecture toulousaine à la Renaissance : emplois, conceptions et représentations de 1518 à 1630, mon étude actuelle est centrée sur le foyer artistique toulousain qui rayonne à l'échelle européenne grâce à un contexte culturel et économique favorable. Fondée sur l'influence des traités sur la pratique architecturale (Sagredo, Serlio, Philibert de L'Orme), sur la participation toulousaine au débat de l'interprétation vitruvienne (l'Epitome de D. Bertin et J. Gardet) et sur des questions plus pratiques liées à l'atelier et au métier de maçon et d'architecte, cette recherche se concentre sur les transferts culturels et les différents degrés de culture savante qui nourrissent la pratique artistique de la ville. À travers le profil de certaines carrières d'architectes (Dominique Bachelier) et l'étude de sources inédites (archives, traités) c'est avant tout les liens entre la France et l'Espagne qui sont privilégiés.</p></li></ul>",
						"publication" => "<p></p>", 
						"linkLabel" => "<p>Fiche déaillée sur le site de FRAMESPA</p>",
						"link" => "http://framespa.univ-tlse2.fr/actualites/divers/fiches-annuaire/debuiche-colin-57958.kjsp");
						
	
	$dubois_jacques = array("name" => "DUBOIS",
						"firstname" => "Jacques",
						"status" => "MCF",
						"mail" => "jacques.dubois@univ-tlse2.fr ",
						"team" => "FRAMESPA",
						"research" => "<ul><p>

<li>
Architecture du gothique tardif, religieuse et civile (apparition, développement et rayonnement en Europe et en Midi-Pyrénées en particulier)
</li>
<li>
Etudes des professions artistiques et de la construction, établissement de prosopographies (XIVe-milieu XVIe), comprendre les réseaux de diffusion des formes et les transferts technologiques, recherche menée conjointement à celle sur la clientèle et son rôle dans les modifications des pratiques d'atelier; chantiers de construction: financement et organisation.
</li>
</p>
</ul>",
						"publication" => "<ul><p>
<li>
« L’architecture en France dans les années 1360-1420 », dans Dossiers d’Archéologie, L’architecture religieuse médiévale, art roman et art gothique, une nouvelle vision, n° 319, janv-fév 2007, p. 100-109
</li>
<li>
« Les travaux de construction et d’embellissement à l’église de Saint-Symphorien-des-Bruyères d’après sa comptabilité (1531-1559) », dans Materiam superabat opus. Hommage à Alain Erlande-Brandenburg, RMN, ENC, Paris, 2006, p. 297-303
</li>
<li>
« Les vestiges d’un jardin Renaissance à Alençon : le pavillon dit Henri II », dans bull. de la Société Historique et Archéologique de l’Orne, t. CXXIV, n° 1-2, 2005, p. 83-98
</li>
<li>
« Que dire de l’architecture civile à Alençon au XVIe siècle ! », dans actes du colloque de Cerisy-la-Salle du 1er au 4 octobre 1998, L’architecture de la Renaissance en Normandie, éd. Corlet et PUC, Caen, 2003, vol. 1, p. 193-205
« Le pavillon dit « Henri II » à Alençon », dans actes du colloque de Cerisy-la-Salle, L’architecture…, vol. 2, p. 285-287
</li>
<li>
« Almenêches, l’ancienne église abbatiale Notre-Dame », dans actes du colloque de Cerisy-la-Salle, L’architecture…, vol. 2, p. 391-393
Notre-Dame d’Alençon. Financement et reconstruction (c. 1350-c. 1540), préface A. Erlande-Brandenburg, éd. des Presses Universitaires de Rennes, coll. Art et Société, Rennes, 2000, 194 p.
</li>
</p>
</ul>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de FRAMESPA</p>",
						"link" => "http://framespa.univ-tlse2.fr/actualites/pratique/annuaire/dubois-jacques-40005.kjsp?RH=annuaire_framespa");
	
	$duhem_sophie = array("name" => "DUHEM",
						"firstname" => "Sophie",
						"status" => "MCF",
						"mail" => "duhem@univ-tlse2.fr ",
						"team" => "FRAMESPA",
						"research" => "<ul><p>

<li>
La production artistiques des paroisses rurales (France-Espagne) entre les XVIe et XVIIIe siècles.
</li>
<li>
Les arts du décor religieux: peinture, sculpture, mobilier des églises et production imprimée (livre religieux, traités).
</li>
<li>
Domaines abordés: histoire sociale (ateliers, artistes, etc.), histoire culturelle et religieuse, échanges artistiques transfrontaliers (circulation des modèles), études iconographiques.
</li>
</p>
</ul>",
						"publication" => "<ul><p>
<li>
Les sablières sculptées en Bretagne. Images, ouvriers du bois et culture paroissiale au temps de la prospérité bretonne (15e-17e s.), Rennes, Coll. Art et Société, Presses Universitaires de Rennes, 1998, 385p.
</li>
<li>
Les formes du discours artistique au 16e siècle : la charpente sculptée de Plougras », Eglise, Education, Lumières…Histoires culturelles de la France (1500-1830). A. Croix, A. Lespagnol, G. Provost (dir.), Rennes, PUR, 1999, pp.25-31.
</li>
<li>
« La colonne « salomonique » dans le décor du retable. Genèse des modèles et utilisation dans l’ornementation des retables français et espagnols (XVIIe siècle) », Colloque /L’Europe des retables, /Abbaye de l’Epau, 13-16 octobre 2004. M. Maupoix et M. Ménard dir. A paraître en décembre 2006 dans /Cahiers de Rencontre avec le Patrimoine Religieux/.
</li>
<li>
« Miquel Anglada, sculpteur et expert à Perpignan en 1701. L’expertise dans les métiers du bois aux  XVIIe et XVIIIe s. ». Actes des Jornades d’Història de l’art a Catalunya, L’època del Barroc i els Bonifàs, Vals, 1,2,3 Juin 2006. 
</li>
</p>
</ul>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de FRAMESPA</p>",
						"link" => "http://framespa.univ-tlse2.fr/actualites/pratique/annuaire/duhem-sophie-24458.kjsp?RH=annuaire_framespa");
						
	$galbois_estelle = array("name" => "GALBOIS",
						"firstname" => "Estelle",
						"status" => "MCF",
						"mail" => "estellegalbois@yahoo.fr",
						"team" => "PLH-CRATA",
						"research" => "<ul><p>
<li>
Histoire de l'art de l'époque gréco-romaine
</li>
<li>
Iconographie dans le monde gréco-romain
</li>
<li>
Le portrait dans l'Antiquité
</li>
</p>
</ul>",
						"publication" => "<ul><p>
<li>
						« Un miroir à boîte au Musée du Louvre : étude iconographique », Histoire de l'art 61, octobre 2007, p. 103-113.
</li>
<li>
« Réflexions sur les codes de représentation de l'image royale à la période gréco-romaine par le biais d'une analyse du portrait miniature », dans G. Kamecke, J. Le Rider (éds) avec la collaboration d'A. Szulmajster, La Codification. Perspectives transdisciplinaires, Actes des journées d'études organisées à Paris à l'Institut national d'histoire de l'art les 8-10 juin 2006, Paris, 2007, p. 17-32.
</li>
</p>
</ul>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de PLH-CRATA</p>",
						"link" => "http://plh.univ-tlse2.fr/accueil-plh/pratique/l-annuaire/galbois-estelle-48390.kjsp?RH=crata_PLH");					
	
	
		$hautefeuille_florent = array("name" => "HAUTEFEUILLE",
						"firstname" => "Florent",
						"status" => "MCF",
						"mail" => "florent.hautefeuille@univ-tlse2.fr  ",
						"team" => "TRACES",
						"research" => "<ul><p>
<li>
Espace et société rurale au Moyen Âge
</li>
<li>
Archéologie de terrain (Fouille programmée sur le site de la Truque de Maurélis (46), PCR de Mouret (12) sous la direction de Sylvie Campech,)
</li>
<li>
Articulation entre les sociétés de mas et les sociétés de village (Programme de recherche sur les sociablilités paysannes en bas Quercy du XIII au XV° s., (projet ANR 2006-2008)
</li>
<li>
Collaboration avec les Universités de Pau et de Géorgie (USA) sur l'étude des sociétés et des paysages de la Soule (64))
</li>
<li>
Méthodes de traitement informatisé de données sérielles, telles que celles issues des compoix et des terriers.
</li>
</p>
</ul>",
						"publication" => "<ul><p>
<li>
Publication des actes du colloque Résidences aristocratiques, résidences du pouvoir entre Loire et Pyrénées (Xe - XVe siècles), actes du colloque de Pau; 3-5 octobre 2002, 4ème supplément d'Archéologie du Midi Médiéval, CAML, 2006.
</li>
<li>
« Livre de compte ou livre de raison : le registre d’une famille de paysans quercynois, les Guitard de Saint-Anthet (1417-1526) », Ecrire, compter, mesurer, vers une histoire des rationalités pratiques, Éditions de l’ENS, 2006, p. 231-247.
<li>
</li>
« Un exemple de compoix rural précoce (1451) : Mouret (Aveyron), De l’estime au cadastre en Europe (Le Moyen Age), Colloque de Paris - Bercy,11, 12 et 13 juin  2003, Comité pour l'histoire économique et financière de la France, 2006, p. 423-552.
</li>
</p>
</ul>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de TRACES</p>",
						"link" => "http://traces.univ-tlse2.fr/accueil-traces/equipes-de-recherche/equipe-7-terrae-archeologie-et-histoire-des-societes-medievales-meridionales/hautefeuille-florent-55504.kjsp?RH=villes_traces");					
	
	
		$jacquet_pascale = array("name" => "JACQUET",
						"firstname" => "Pascale",
						"status" => "MCF",
						"mail" => "p.jacquet.rimassa@free.fr",
						"team" => "PLH-CRATA",
						"research" => "<ul><p>

<li>
Iconographie des vases attiques, de Grande Grèce et de Sicile
</li>
</p>
</ul>",
						"publication" => "<ul><p>
<li>
« Un essai de mise au point : la représentation de l'habitat et de l'architecture dans l'imagerie archaïque » Pallas 58 (2002), p. 117-145.
</li>
</p>
</ul>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de PLH-CRATA</p>",
						"link" => "http://plh.univ-tlse2.fr/accueil-plh/pratique/l-annuaire/jacquet-rimassa-pascale-31471.kjsp?RH=annuaire_PLH");					
	
	
		$julien_pascal = array("name" => "JULIEN",
						"firstname" => "Pascal",
						"status" => "PR",
						"mail" => "julien.pascal.aix@wanadoo.fr",
						"team" => "PLH-CRATA",
						"research" => "<ul><p>
<li>
Art religieux
</li>
<li>
Sculpture française et italienne
</li>
<li>
Matériaux, métiers, savoir faire
</li>
<li>
Art et savoirs
</li>
<li>
Arts décoratifs
</li>
<li>
Métiers de la restauration
</li>
<li>
Expertise bois, marbres, art mobilier
</li>
</p>
</ul>",
						"publication" => "<ul><p>
<li>
« Une description inédite des Pyrénées au XVIIIe siècle, le Mémoire sur les marbres de Marc-François de Lassus », Revue de Comminges et des Pyrénées centrales, avril-juin 2004, p. 197-234.
</li>
<li>
« Anamorphoses et visions miraculeuses du père Maignan (1602-1676) », Actes du colloque La Trinité-des-Monts dans la république romaine des sciences et des arts,  Mélanges de l’Ecole française de Rome. Italie et Méditerranée, 117, 2005, p. 45-71.
</li>
<li>
Marbres, de carrières en palais. Du sang des dieux à la gloire des rois, Le bec en l’air, Manosque, 2006, 272 p., 345 ill.
</li></p></ul>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de PLH-CRATA</p>",
						"link" => "http://plh.univ-tlse2.fr/accueil-plh/pratique/l-annuaire/julien-pascal-47793.kjsp?RH=annuaire_PLH");					
	
	
		$lefebvre_bastien = array("name" => "LEFEBVRE",
						"firstname" => "Bastien",
						"status" => "MCF",
						"mail" => "bastien.lefebvre@univ-tlse2.fr",
						"team" => "TRACES",
						"research" => "<ul><p>
<li>
Architecture résidentielle appréhendée par la fouille et l’archéologie du bâti (relevés, phasage, analyses et restitutions) 
 </li>
 <li>
 Histoire des techniques de construction, du décor et de l’organisation des maisons médiévales et des lieux de résidences.
 <li>
 </li>
<li>
Archéologie et topographie urbaines 
</li>
<li>
Formation et transformation de l’espace urbain dans le temps long 
</li>
<li>
Analyses et modélisations des dynamiques socio-spatiales.
</li>
</p>
</ul>",
						"publication" => "<ul><p>
<li>
Lefebvre Bastien. 2009, L'organisation parcellaire et la voirie du quartier canonial de la cathédrale de Tours, du XVIIe au XVIIIe siècle, Histoire & Mesure, n°XXIV-2, 2009 : 221-246.
</li>
<li>
Lefebvre Bastien et Lavallée Marie-Hélène. 2005, Doubs. Ornans, étude de bâti d'une maison des XIIIe-XIVe et XVIe siècles, Bulletin Monumental, t. 163-IV-2005 : 378-381.
</li>
<li>
Lefebvre Bastien. 2004, Une maison du quartier cathédral de Tours (Indre-et-Loire) : évolution architecturale et techniques de construction, Revue archéologique du Centre de la France, Tome 43/2004 : 223-246.
</li>
</p>
</ul>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de TRACES</p>",
						"link" => "http://traces.univ-tlse2.fr/accueil-traces/equipes-de-recherche/equipe-7-terrae-archeologie-et-histoire-des-societes-medievales-meridionales/lefebvre-bastien-55506.kjsp?RH=archeologie_traces");					
				
	
		$luce_jeanmarc = array("name" => "LUCE",
						"firstname" => "Jean Marc",
						"status" => "PR",
						"mail" => "jean-marc.luce@wanadoo.fr ",
						"team" => "PLH-CRATA",
						"research" => "<ul><p>
<li>
Période archaïque sous tous ses aspects, et plus particulièrement sur les sanctuaires, les villes et habitats, les modes funéraires et la céramique.
</li>
<li>
Histoire de l'alimentation, questions d'esthétique
</li>
</p>
</ul>",
						"publication" => "<ul><p>
<li>
L'Aire du pilier des Rhodiens (fouille 1990-1992). A la frontière du profane et du sacré. Fouilles de Delphes II.
</li>
<li>
« Les trois Thries et la «colonne des danseuses» à Delphes », Pallas 57 (2001), p. 111-128.
</li>
</p>
</ul>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de PLH-CRATA</p>",
						"link" => "http://plh.univ-tlse2.fr/accueil-plh/pratique/l-annuaire/luce-jean-marc-31443.kjsp?RH=annuaire_PLH");	
	
	
		$mange_christian = array("name" => "MANGE",
						"firstname" => "Christian",
						"status" => "MCF",
						"mail" => " cmange@univ-tlse2.fr  ",
						"team" => "FRAMESPA",
						"research" => "<ul><p>
<li>
Histoire de l'art XIXe siècle 
</li>
<li>
Art religieux 
</li>
<li>
Genre et sexualités dans l'histoire de l'art moderne et contemporain 
</li>
<li>
Les représentations des femmes et des hommes 
</li>
<li>
Regards et désirs féminins sur des oeuvres d'art 
</li>
<li>
Etudes biographiques des femmes artistes 
</li>
<li>
Place des femmes dans les mouvements d'avant-garde 
</li>
<li>
Homosexualité dans l'art 
</li>
Analyse des institutions artistiques 
<li>
Re-lecture des oeuvres d'art 
</li>
<li>
Etude de la réception
</li>
</p>
</ul>",
						"publication" => "<ul><p>

<li>
« L'iconographie de la Nativité au XIXe siècle », in BERTRAND Régis (dir.), La Nativité et le temps de Noël. XVIIe-XXe siècles, Publications de l'Université de Provence, décembre 2003.
</li>
<li>
« Saint-Louis, évêque de Toulouse, donnant à son frère la couronne de Naples », Catalogue de l'exposition L'Europe des Anjou. Aventure des princes angevins du XIIIe au XVe siècle, Somogy éditions d'art, Paris, 2001.
</li>
<li>
« Hippolyte Flandrin et la filiation post-ingriste dans la Midi de la France », communication à la Société des Amis du musée Ingres, parue dans Actes du colloque international Ingres et ses élèves, Bulletin spécial : Les amis du musée Ingres, Montauban, 2000.
</li>
</p>
</ul>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de FRAMESPA</p>",
						"link" => "http://framespa.univ-tlse2.fr/actualites/pratique/annuaire/mange-christian-40007.kjsp?RH=identite");					
	
		$milcent_pierreyves = array("name" => "MILCENT",
						"firstname" => "Pierre Yves",
						"status" => "MCF",
						"mail" => "milcent@univ-tlse2.fr",
						"team" => "TRACES",
						"research" => "<ul><p>
<li>
Protohistoire récente de l'Europe moyenne occidentale (âges du Bronze et du Fer)
</li>
<li>
Histoire et archéologie des Celtes avant notre ère
</li>
<li>
Archéologie funéraire, économie et société en Gaule centrale et dans le Toulousain protohistoriques
</li>
<li>
Echanges et modes de contact entre les cultures protohistoriques et les civilisations méditerranéennes
</li>
<li>
Méthodologie en étude de la culture matérielle
</li>
</p>
</ul>",
						"publication" => "<ul>
<li>
Statut et fonctions d'un personnage féminin hors norme. Le contexte historique. In : ROLLEY Cl. dir., La tombe princière de Vix. Paris, Picard, 2003, vol.1, p.312-366.
</li>
Le premier âge du Fer en France centrale. Mémoire de la Société Préhistorique Française, XXXIII.
</li>
<li>
in J.Gomez de Soto, P.-Y. Milcent, avec la collaboration de J.-Ph Baigl, J.-M Escude-Quillet, A.Gorgues, P.Moret, Lieux de culte et pratiques cultuelles du centre de la France aux Pyrénées (Centre, Poitou-Charentes, Limousin, Aquitaine, Midi-Pyrénées). 
</li>
</p>
</ul>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de TRACES</p>",
						"link" => "http://traces.univ-tlse2.fr/accueil-traces/equipes-de-recherche/equipe-4-protohistoire-mondes-anciens-cultures-et-societes/milcent-pierre-yves-50136.kjsp?RH=archeologie_traces");			
						
		$minois_leo = array("name" => "MINOIS",
						"firstname" => "Léo",
						"status" => "ATER",
						"mail" => "leo.minois@gmail.com",
						"team" => "FRAMESPA",
						"research" => "<ul><li><p>Mes recherches actuelles, menées dans le cadre du doctorat sous la direction de M. Pascal Julien, professeur à l'UTM, portent sur la figure du roi dans l'art religieux d'Henri IV à Louis XIV. Elles s'insèrent au sein d'une période charnière concernant cette problématique, qui connut des événements aussi importants que la conversion d'Henri IV, le Vœu de Louis XIII ou la révocation de l'Édit de Nantes. Ces événements conduisirent à une redéfinition des rapports entre pouvoir et religion, catholicisme et protestantisme, aussi bien à l'intérieur des frontières du royaume de France qu'à l'extérieur. Il s'agit d'analyser de quelle manière l'art interagit avec ces bouleversements : comment l'œuvre naît-elle dans un contexte, mais comment s'insère-t-elle à son tour dans ce contexte et opère ou participe à des mutations au sein de la société dont elle fait partie ? Ce sujet interroge de manière plus générale les enjeux régissant « l'imagerie royale », les rapports entre art et pouvoir, se situant dans la continuité de mes travaux précédents dans le cadre du Master centrés sur l'étude des représentations du Vœu de Louis XIII.</p></li></ul>",
						"publication" => "<p></p>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de Framespa</p>",
						"link" => "http://framespa.univ-tlse2.fr/actualites/pratique/annuaire/minois-leo-40064.kjsp");	
						
		$nadal_emilie = array("name" => "NADAL",
						"firstname" => "Emilie",
						"status" => "ATER",
						"mail" => "emilienadal@yahoo.fr",
						"team" => "TRACES",
						"research" => "<p></p>",
						"publication" => "<ul><p>
<li>
« Une recherche en cours : les commanditaires ecclésiastiques de manuscrits enluminés dans le Midi de la France au XIVe siècle ». Article faisant suite à l'atelier du Réseau d'Etudes médiévales (FRAMESPA) organisé en 2009 sur le thème Le livre dans la région toulousaine et ailleurs.
</li>
<li>
Emilie NADAL,  « Une recherche en cours : les commanditaires ecclésiastiques de manuscrits enluminés dans le Midi de la France au XIVe siècle  », dans CASSAGNE-BROUQUET Sophie, FOURNIE Michelle (eds.), Le livre dans la région toulousaine et ailleurs au Moyen Âge, Toulouse, CNRS-Université de Toulouse le Mirail, 2010, p.153-168.
</li>	
					</p></ul>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de TRACES</p>",
						"link" => "http://traces.univ-tlse2.fr/accueil-traces/equipes-de-recherche/equipe-7-terrae-archeologie-et-histoire-des-societes-medievales-meridionales/nadal-emilie-48291.kjsp?RH=archeologie_traces");	
						
										
		$nayrolles_jean = array("name" => "NAYROLLES",
						"firstname" => "Jean",
						"status" => "PR",
						"mail" => "j.nayrolles@free.fr  ",
						"team" => "FRAMESPA",
						"research" => "<ul><p>

<li>
Redécouverte de l’art médiéval en France au XIXe siècle.
</li>
<li>
Théorie de l’art et historiographie du néo-classicisme au romantisme.
</li>
<li>
Architecture religieuse à l’époque contemporaine.
</li>
</p>
</ul>",
						"publication" => "<ul><p>
<li>
“ Archéologie et rationalisme : le rétablissement des superstructures d’églises romanes au XIXe siècle ”, Revue de l’art, 121, sept. 1998.
</li>
<li>
“ Sciences naturelles et archéologie médiévale au XIXe siècle ”, L’architecture, les sciences et la culture de l’histoire au XIXe siècle, 10e entretiens du Centre Jacques Cartier, Saint-Etienne, 2001.
</li>
<li>
“ Midi roman ou Midi gothique : dans quel style construire les églises du XIXe siècle ? ”, Terres et hommes du Sud, congrès du CTHS, Paris, 2003.
</li>
</p>
</ul>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de FRAMESPA</p>",
						"link" => "http://framespa.univ-tlse2.fr/actualites/pratique/annuaire/nayrolles-jean-40008.kjsp?RH=annuaire_framespa");	
		
		$neuville_raphael = array("name" => "NEUVILLE",
						"firstname" => "Raphael",
						"status" => "ATER",
						"mail" => "raphael.neuville@ac-toulouse.fr",
						"team" => "FRAMESPA",
						"research" => "<p></p>",
						"publication" => "<ul><p>
<li>
« Musée des Abattoirs : les peintures du surréaliste Adrien Dax » dans Midi-Pyrénées patrimoine, n°26, éd. Midi Pyrénéennes, 2011, p. 100-105.
</li>
<li>
« Adrien Dax : l'enchanteur noir » dans Midi-Pyrénées patrimoine, n°19, éd. Midi-Pyrénéennes, 2009, p. 112.
</li>						

						</p></ul>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de FRAMESPA</p>",
						"link" => "http://framespa.univ-tlse2.fr/actualites/pratique/annuaire/neuville-raphael-90622.kjsp?RH=annuaire_framespa");					
					   
	   
	    $pousthomis_nelly = array("name" => "POUSTHOMIS",
						"firstname" => "Nelly",
						"status" => "PR",
						"mail" => "nelly.pousthomis@univ-tlse2.fr",
						"team" => "TRACES",
						"research" => "<ul><p>
<li>
Architecture et sculpture romanes
</li>
<li>
Archéologie religieuse (établissements réguliers plus particulièrement)
</li>
<li>
Archéologie des élévations (analyse stratigraphique appliquée à l'étude du bâti)
</li>
<li>
Archéologie civile et castrale (fouilles et études du bâti, morphogénèse, urbanisme, châteaux et habitat, coseigneurie, culture matérielle)
occupation du sol et peuplement
</li>
<li>
Morphogénèse et évolution des bourgs d'origine monastique en Midi toulousain
pluridisciplinarité, croisement des méthodes et des données entre histoire, histoire de l'art et archéologie.
</li>
</p>
</ul>",
						"publication" => "<ul><p>
<li>
« Le langage des pierres : l’iconographie des portails romans des Sept Vallées (Hautes-Pyrénées) », actes de la Table ronde sur « Dissidences religieuses et sorcellerie : une spécificité montagnarde ? », 2e journée préparatoire au colloque Religion et montagnes du 30 mai au 1er juin 2002, Dissidences religieuses et sorcellerie, Heresis, n°39, 2003.
</li>
<li>
coordination et collaboration, « Mouret (Aveyron) : un castrum, des châteaux », Résidences aristocratiques, Résidences du pouvoir entre Loire et Pyrénées (Xe - XVe siècles), actes du colloque de Pau (3-5 octobre 2002), textes réunis par Dany Barraud, Florent Hautefeuille et Christian Rémy, p. 307-324.
</li>
<li>
« Histoire et archéologie de la commanderie–Grand prieuré des hospitaliers de Saint-Jean à Toulouse : état de la recherche », Les Ordres militaires dans le Midi (XIIe-XIV siècle), Cahiers de Fanjeaux n°41, Toulouse, Privat, 2006, p. 239-264
</li>
</p>
</ul>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de TRACES</p>",
						"link" => "http://traces.univ-tlse2.fr/accueil-traces/equipes-de-recherche/equipe-7-terrae-archeologie-et-histoire-des-societes-medievales-meridionales/pousthomis-nelly-55505.kjsp?RH=protohistoire_traces");	
	    
		
	
	   $sartre_fabienne = array("name" => "SARTRE",
						"firstname" => "Fabienne",
						"status" => "PR",
						"mail" => "fabienne.sartre@univ-tlse2.fr  ",
						"team" => "FRAMESPA",
						"research" => "<p></p>",
						"publication" => "<p></p>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de FRAMESPA</p>",
						"link" => "http://framespa.univ-tlse2.fr/actualites/pratique/annuaire/sartre-fabienne-40011.kjsp?RH=1221139304398");	
			
					
		$teil_genevieve = array("name" => "TEIL",
						"firstname" => "Geneviève",
						"status" => "PRAG",
						"mail" => "",
						"team" => "FRAMESPA",
						"research" => "<p></p>",
						"publication" => "<p></p>", 
						"linkLabel" => "<p></p>",
						"link" => "");	
						
		$thiebault_celine = array("name" => "THIEBAULT",
						"firstname" => "Céline",
						"status" => "ATER",
						"mail" => "celine.thiebaut@wanadoo.fr",
						"team" => "FRAMESPA",
						"research" => "<ul><li><p>Mes principaux axes de recherche s’intéressent aux comportements techniques des Néandertaliens en Europe occidentale ainsi qu’à leur organisation économique et sociale. </p></li></ul>",
						"publication" => "<ul><p>
<li>
Claud, E., Mourre, V., Thiébaut, C. et Brenet, M., « Le recyclage au Paléolithique moyen. Des bifaces et des nucléus utilisés comme percuteurs », Archéopages, 29, p. 6-15.
</li>
<li>
Thiébaut C, Coumont M.-P., Averbouh, A., L’approche taphonomique, une nécessité en archéologie/ The Taphonomic Approach, an Archaeological Necessity, in Thiébaut, C., Coumont, M.-P., Averbouh, A., (dir.), WS 16 Mise en commun des approches en taphonomie, Actes du Workshop 16 du XVème Congrès de l’UISPP, Lisbonne, 2006, Supplément à Paléo, 3, p. 13-28.
</li>

						</p></ul>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de TRACES</p>",
						"link" => "http://traces.univ-tlse2.fr/accueil-traces/equipes-de-recherche/equipe-1-societes-et-milieux-des-populations-de-chasseurs-cueilleurs-collecteurs/thiebaut-celine-145302.kjsp?RH=Societes_traces");	
		
		$valdeyron_nicolas = array("name" => "VALDEYRON",
						"firstname" => "Nicolas",
						"status" => "PR",
						"mail" => "valdeyro@univ-tlse2.fr ",
						"team" => "FRAMESPA",
						"research" => "<ul><p>
<li>		
Mésolithisation  et Mésolithique 
</li>
<li>
Néolithisation
</li>
<li>
Industrie lithique
</li>
<li>
Europe occidentale
</li>
<li>
Afrique Australe
</li>
</p>
</ul>",
						"publication" => "<ul><p>
<li>
N. Valdeyron (dir.), Le gisement mésolithique du porche ouest des Fieux (Miers, Lot) : une halte de chasse sur le causse de Gramat 		
</li>
<li>
Fullola, J.-M., Valdeyron, N., Langlais, M. (dir.). Les Pyrénées et leurs marges durant le Tardiglaciaire. Mutations et filiations techno-culturelles, évolutions paléo-environnementales, actes du XIVème colloque international d'archéologie de Puigcerda,  Hommages à Georges Laplace, Institut d'Estudis Ceretans.
</li>
<li>
Pétillon, J.-M., Dias-Meirinho, M.-H., Cattelain, P., Honegger, M., Normand, C., Valdeyron, N. (coord.). Recherches sur les armatures de projectiles du Paléolithique supérieur au Néolithique (actes du colloque C83, XVe congrès de l'UISPP, Lisbonne, 4-9 septembre 2006), Palethnologie, 1.
</li>
				</p></ul>", 
						"linkLabel" => "<p>Fiche détaillée sur le site de FRAMESPA</p>",
						"link" => "http://traces.univ-tlse2.fr/accueil-traces/equipes-de-recherche/equipe-1-societes-et-milieux-des-populations-de-chasseurs-cueilleurs-collecteurs/valdeyron-nicolas-47531.kjsp");	
			
	// Liste alphabetique
	$list_profs_alpha[] = $aribaud_christine;
	$list_profs_alpha[] = $aubry_brigitte;
	$list_profs_alpha[] = $barlangue_luce;
	$list_profs_alpha[] = $bon_francois;
	$list_profs_alpha[] = $borau_laetitia;
	$list_profs_alpha[] = $boube_emmanuelle;
	$list_profs_alpha[] = $bouet_alain;
	$list_profs_alpha[] = $bourdier_camille;
	$list_profs_alpha[] = $castaldo_ines;
	$list_profs_alpha[] = $cauliez_jessie;
	$list_profs_alpha[] = $cazes_quitterie;
	$list_profs_alpha[] = $compain_catherine;
	$list_profs_alpha[] = $czerniak_virginie;
	$list_profs_alpha[] = $dardenay_alexandra;
	$list_profs_alpha[] = $debuiche_colin;
	$list_profs_alpha[] = $dubois_jacques;
	$list_profs_alpha[] = $duhem_sophie;
	$list_profs_alpha[] = $galbois_estelle;
	$list_profs_alpha[] = $hautefeuille_florent;
	$list_profs_alpha[] = $jacquet_pascale;
	$list_profs_alpha[] = $julien_pascal;
	$list_profs_alpha[] = $lefebvre_bastien;
	$list_profs_alpha[] = $luce_jeanmarc;
	$list_profs_alpha[] = $mange_christian;
	$list_profs_alpha[] = $milcent_pierreyves;
	$list_profs_alpha[] = $minois_leo;
	$list_profs_alpha[] = $nadal_emilie;
	$list_profs_alpha[] = $nayrolles_jean;
	$list_profs_alpha[] = $neuville_raphael;
	$list_profs_alpha[] = $pousthomis_nelly;
	$list_profs_alpha[] = $sartre_fabienne;
	$list_profs_alpha[] = $teil_genevieve;
	$list_profs_alpha[] = $thiebault_celine;
	$list_profs_alpha[] = $valdeyron_nicolas;
	
	// Liste Art
	$list_profs_art["prehistoire"][] = $bon_francois;
	$list_profs_art["antique"][] = $borau_laetitia;
	$list_profs_art["antique"][] = $dardenay_alexandra;
	$list_profs_art["antique"][] = $galbois_estelle;
	$list_profs_art["antique"][] = $jacquet_pascale;
	$list_profs_art["antique"][] = $luce_jeanmarc;
	$list_profs_art["medieval"][] = $cazes_quitterie;
	$list_profs_art["medieval"][] = $czerniak_virginie;
	$list_profs_art["medieval"][] = $dubois_jacques;
	$list_profs_art["medieval"][] = $nadal_emilie;
	$list_profs_art["medieval"][] = $pousthomis_nelly;
	$list_profs_art["moderne"][] = $aribaud_christine;
	$list_profs_art["moderne"][] = $debuiche_colin;
	$list_profs_art["moderne"][] = $duhem_sophie;
	$list_profs_art["moderne"][] = $castaldo_ines;
	$list_profs_art["moderne"][] = $julien_pascal;
	$list_profs_art["moderne"][] = $minois_leo;
	$list_profs_art["moderne"][] = $sartre_fabienne;
	$list_profs_art["contemporain"][] = $aubry_brigitte;
	$list_profs_art["contemporain"][] = $barlangue_luce;
	$list_profs_art["contemporain"][] = $compain_catherine;
	$list_profs_art["contemporain"][] = $mange_christian;
	$list_profs_art["contemporain"][] = $nayrolles_jean;
	$list_profs_art["contemporain"][] = $neuville_raphael;
	
	
	
	// Liste Archeologie
	
	$list_profs_archeo["prehistoire"][] = $bourdier_camille;
	$list_profs_archeo["prehistoire"][] = $cauliez_jessie;
	$list_profs_archeo["prehistoire"][] = $thiebault_celine;
	$list_profs_archeo["prehistoire"][] = $valdeyron_nicolas;
	$list_profs_archeo["protohistoire"][] = $milcent_pierreyves;
	$list_profs_archeo["antiquite"][] = $boube_emmanuelle;
	$list_profs_archeo["antiquite"][] = $bouet_alain;
	$list_profs_archeo["antiquite"][] = $luce_jeanmarc;
	$list_profs_archeo["moyen-age"][] = $hautefeuille_florent;
	$list_profs_archeo["moyen-age"][] = $lefebvre_bastien;
	$list_profs_archeo["moyen-age"][] = $pousthomis_nelly;

?>

<ul class="nav nav-tabs">
    <li class="active"><a href="#alphabetique" data-toggle="tab">Alphabétique</a></li>
    <li><a href="#specialite" data-toggle="tab">Par spécialité</a></li>
</ul>

 
<div class="tab-content">
    <div class="tab-pane active" id="alphabetique">
    	<div id="alpha-accordion" class="accordion">
    <?php					
		foreach($list_profs_alpha as $prof) {
			display_prof("alpha", $prof, "alpha-accordion");
		}
	?>
    	</div>
    </div>
    
    <div class="tab-pane" id="specialite">
    <h1>Histoire de l'Art</h1>
    <?php					
		foreach($list_profs_art as $titre => $specialite) {
	?>
    	<?php display_title($titre); ?>
        <div id="art-accordion-<?php echo($titre); ?>" class="accordion">
        <?php
			foreach($specialite as $prof) {
				display_prof("specialite-art", $prof, "art-accordion-".$titre);
			}
		?>
        </div>
	<?php
		}
	?>
    <h1>Archéologie</h1>
    <?php					
		foreach($list_profs_archeo as $titre => $specialite) {
	?>
    	<?php display_title($titre); ?>
        <div id="archeo-accordion-<?php echo($titre); ?>" class="accordion">
        <?php
			foreach($specialite as $prof) {
				display_prof("specialite-archeo", $prof, "archeo-accordion-".$titre);
			}
		?>
        </div>
	<?php
		}
	?>
    </div>
</div>

<?php
	function display_prof($list, $prof, $id_accordion) {
		$name = stripAccents(str_replace(" ", "", $prof["name"]));
		$firstname = stripAccents(str_replace(" ", "", $prof["firstname"]));
		$id = $list."-".$name."-".$firstname;
		echo('<div class="accordion-group">');
			echo('<div class="accordion-heading">');
				echo('<a href="#'.$id.'" data-parent="#'.$id_accordion.'" data-toggle="collapse" class="accordion-toggle">');
				echo($prof["name"]." ".$prof["firstname"]);
				echo('</a>');
			echo('</div>');
            echo('<div class="accordion-body collapse" id="'.$id.'" style="height: 0px;">');
				echo('<div class="accordion-inner">');
					display_status($prof["status"]);
					display_team($prof["team"]);
					echo('<p>'.$prof["mail"].'</p>');
					echo("<h3>Recherches</h3>");
					echo($prof["research"]);
					echo("<h3>Dernières publications</h3>");
					echo($prof["publication"]);
					echo('<p><a href="'.$prof["link"].'" target="_blank">'.$prof["linkLabel"].'</a></p>');
            	echo('</div>');
            echo('</div>');
        echo('</div>');
	}
	
	function display_status($status) {
		$result = "";
		
		if(strlen($status) > 0) {
			$result .= "<p>";
			
			if($status == "MCF") {
				$result .= "Maitre de conférences";	
			}
			elseif($status == "PR") {
				$result .= "Professeur";	
			}
			elseif($status == "PRAG") {
				$result .= "Professeur agrégé";	
			}
			
			$result .= "</p>";
		}
		
		echo($result);
	}
	
	function display_team($team) {
		$result = "";
		
		if(strlen($team) > 0) {
			$result .= "<p>Membre de l'équipe ";
			
			if($team == "PLHCRATA") {
				$result .= "PLH-CRATA";	
			}
			elseif($team == "FRAMESPA") {
				$result .= "FRAMESPA";	
			}
			elseif($team == "TRACES") {
				$result .= "TRACES";	
			}
			
		
			$result .= "</p>";
		}
		
		echo($result);
	}
	
	function display_title($title) {
		$result = "<h2>";
		
		if($title == "prehistoire") {
			
			$result .= "Préhistoire";
		}
		elseif($title == "antique") {
			$result .= "Antique";
		}
		elseif($title == "medieval") {
			$result .= "Médiéval";
		}
		elseif($title == "moderne") {
			$result .= "Moderne";
		}
		elseif($title == "contemporain") {
			$result .= "Contemporain";
		}
		elseif($title == "protohistoire") {
			$result .= "Protohistoire";
		}
		elseif($title == "antiquite") {
			$result .= "Antiquité";
		}
		elseif($title == "moyen-age") {
			$result .= "Moyen-Age";
		}
		
		$result .= "</h2>";
		echo($result);
	}
	
	function stripAccents($string){
		return strtr($string,'àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ',
	'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
	}
?>
