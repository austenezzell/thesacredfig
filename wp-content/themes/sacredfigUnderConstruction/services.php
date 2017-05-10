<?php
/**
 * Template name: services
 *
 *
 * @package ae_boilerplate
 */

get_header(); ?>

<div class="banner services">
	<div class="wrapper">
		<div class="hp-featured">
			<div class="featured-bg"></div>
			<h1>Services</h1>
		</div>
	</div>
</div>

<div class="main-content">

	<div class="main-services grid">
		<div class="grid__item two-thirds">
			<div class="service-content">
				







						<?php
							$i = 1;
							$queryObject = new WP_Query( 'post_type=services' );

							if ($queryObject->have_posts()) {
							   
							    while ($queryObject->have_posts()) {
							        $queryObject->the_post();
							        $ids[] = get_the_ID();
							        

									echo '<div id="' . $i . '" class="main-services-pod pod">';
									echo '<h3 class="service-title">' . get_the_title() . '</h3>';
									echo the_content();
									echo '</div>';

									$i++;

								}
							}
							wp_reset_query();
						?>


<!-- 				<div id="phaseone" class="main-services-pod pod">
					<h3>Phase 1</h3>
					<p>The objective of Phase I environmental site assessments is to identify conditions at the Site that may indicate environmental impairment which may adversely impact teh value of the property.</p>
					<p>Phase I environmental site assessments consist of, but is not limited to:</p>
					<ul> 
						<li>A Site Inspections;</li>
						<li>A visiual review of properties which bound the Site;</li>
						<li>An interview with a person knowledgeable of the Site's history of operations;</li>
						<li>A review of files for the Site Maintained by the local regulatory agencies;</li>
						<li>A review of aerial photographs for the Site and surrounding Sites;</li>
						<li>A review of fire insurance maps and reverse phone directories;</li>
						<li>A review of a government agency database report specifically prepared for the Site, and;</li>
						<li>Preparation of a report summarizing the findings of the information presented above.</li>
					</ul>
					<p>Phase I environmental site assessments prepard by FREY Environmental, Inc. will generally conform to the "Standards for Appropriate Inquiry" prepared by the United States Environmental Protection Agency / American Society for Testing and Materials E1527-05.				
				</div>
				<div id="subsurface" class="main-services-pod pod">
					<h3>Subsurface Investigations</h3>
					
					<p>Subsurface investigations are used to assess the lateral and vertical extent of impacted soil at your property.</p>
					<ul> 
						<li>Preparation of a Site specific Health and Safety Plan;</li>
						<li>Procurement of permits from the regulatory agency;</li>
						<li>Drilling of soil borings a around the area of suspected impacted soil;</li>
						<li>Collection of soil samples for soil lithologic classification, in-field screening for undifferentiated volatile organic compounds and laboratory chemical analysis;</li>
						<li>Groundwater monitoring well or remedial well installation;</li>
						<li>Survey the newly installed groundwater monitoring or remedial wells for elevation and location;</li>
						<li>Evaluation of data and report preparation.</li>
					</ul>
				</div>

				<div id="groundwater" class="main-services-pod pod">
					<h3>Groundwater monitoring and sampling</h3>
					
					<p>Groundwater monitoring and sampling procedures are performed to establish groundwater flow direction and area of impacted water.</p>
					<p>Groundwater monitoring and Sampling activities consist of:</p>
					<ul> 
						<li>Gauging the wells for depth to water used to obtain a calculated groundwater level;</li>
						<li>Purging of at least three well volumes of groundwater from the groundwater monitoring wells;</li>
						<li>Sampling of the grounwater for laboratory analysis;</li>
						<li>Data evaluation and report preparation</li>
					</ul>
				</div>	

				<div id="recovery" class="main-services-pod pod">
					<h3>Free Product Recovery and Removal</h3>
					<p>In cases where free product (also known as light, non-aqueous phase product) is present on the groundwater surface, FREY will immediately implement a free product recovery and removal program. The objective of the program is to reduce the potential for further impacts to groundwater, and to reduce the potential for further lateral and vertical migration of contaminants in groundwater. </p>
					<p>Typically, the free product recovery and removal program consists of manual bailing of wells containing free product at a maximum frequency of once a month. In some cases, the mass of free product beneath a site is extensive enough to warrant installation of an automatic free product recovery system, which continually purges free product from wells. In either case, the collected free product is collected in DOT-approved 55-gallon drums or an appropriate aboveground tank, then profiled, manifested, transported and disposed of as a hazardous waste.</p>
				</div>	

				<div id="remediation" class="main-services-pod pod">
					<h3>Soil and Groundwater Remediation</h3>
					<h6>Experience</h6>
					<p>FREY has extensive experience in designing, installing and operating soil and/or groundwater remediation systems using vapor extraction, high vacuum dual- phase extraction, groundwater pump-and-treat, air sparging, ozone sparging, and bioventing technologies. We have designed, installed and operated remediation systems at a variety of sites including service stations, truck stops, dry cleaners, and various industrial facilities. In nearly all situations, the remediation activities are conducted concurrently with, and do not affect, normal business operations. </p>
					<h6>Evaluation</h6>
					<p>As part of the remediation design process, FREY evaluates previous subsurface investigation activities, and designs appropriate remediation feasibility tests to assess the effectiveness of various appropriate remedial technologies. Based on the feasibility testing, the most cost-effective remedial method(s) is selected, and a Corrective Action Plan (CAP) is then submitted to the regulatory agency for approval. FREY understands that the remediation feasibility testing phase of a project is critical to producing a timely and effective remediation to achieve regulatory case closure. As such, FREY makes a strong effort to design and implement appropriate feasibility testing that considers all Site-specific elements of the project, including geology/hydrogeology, potential preferential subsurface conduits, seasonal groundwater fluctuations, etc., that may adversely affect future remediation efforts.</p>
					<h6>Operation and Maintenance</h6>
					<p>Just as important as designing and conducting appropriate remediation feasibility testing, is efficiently operating and maintaining the remediation system once installed. FREY project managers and remediation technicians are in constant communication on a given project in order to ensure that the systems are properly operated and maintained, and also to continually modify the system setup to maximize system efficiency. FREY understands that significant cost-savings are realized by maximizing system up-time and efficiency since the overall clean-up time can be significantly reduced. </p>
					<h6>Closure</h6>
					<p>FREY has obtained numerous regulatory case closures on remediation projects by dilligently adhering to our approach of intelligently designing, installing, operating and maintaining our remediation systems. References can be provided upon request.</p>
				</div>	

				<div id="asbestos" class="main-services-pod pod">
					<h3>Asbestos-Related Service</h3>
					<h6>Asbestos Consulting</h6>
					<p>In the area of asbestos consulting, our staff members have experience ranging from simple building surveys to large-scale asbestos abatement projects. Our asbestos consulting staff is highly trained with many years of experience in the areas of asbestos sampling; operations & maintenance (O&M); and asbestos abatement.</p>
					<h6>Asbestos Surveys</h6>
					<p><span class="frey">FREY</span> has experience in conducting asbestos surveys at a large number of facilities including: residential buildings; public school buildings; office buildings; and large industrial facilities. Our staff is AHERA trained and certified to work in public school buildings. FREY Environmental, Inc. has provided service to real estate companies, insurance companies, legal firms, property managers, the oil industry, and many other unique and diverse companies.</p>
					<h6>O&M Plans</h6>
					<p>We have prepared numerous O&M plans for the management of asbestos-containing materials which are left in-place at occupied buildings. Depending on our client's objectives, it is sometimes preferable to leave asbestos-containing materials in a building. Our O&M plans can be tailored to handle highly specific materials and situations at specific buildings. The O&M plans are designed to guide the activities of building owners, property managers or maintenance personnel in the safe management of asbestos-containing materials.</p>
					<h6>Asbestos Abatement</h6>
					<p>When it is time to remove asbestos-containing materials from a building, FREY has the experience and knowledge to get the job done at a minimal cost while protecting building occupants, abatement workers, and the environment. FREY Environmental, Inc. can manage your abatement project to ensure that all applicable regulations are followed, while keeping costs under control.</p>
					<p>We have working relationships with a variety of experienced subcontractors to augment our capabilities in the areas of asbestos abatement, construction and industrial hygiene</p>
				</div>	

				<div id="methane" class="main-services-pod pod">
					<h3>Methane Assessments / Mitigation</h3>
					<h6>Experience</h6>
					<p><span class="frey">FREY</span> has conducted methane assessment and/or mitigation work throughout Southern California, and is an approved methane assessment and mitigation contractor with the Orange County Fire Authority and other Southern California cities.</p>
					<p><span class="frey">FREY</span> is experienced at working on the methane assessment and, if required, methane mitigation aspects of commercial and residential projects with clients in an efficient and cost-conscious manner in order to expedite receipt of building permits. If a passive or active methane mitigation system is required, we can expeditiously design and install the system concurrently with building construction.</p>
				</div>	

				<div id="general" class="main-service-pod pod">
					<h6>What is the Underground Storage Tank Cleanup Fund?</h6>
					<p>The Barry Keene Underground Storage Tank Cleanup Fund (UST Cleanup Fund) Act of 1989 was created by the California Legislature to provide a means for petroleum UST owners and operators to meet Federal and State requirements and pay for the cleanup of contaminated soil and groundwater when a leak is discovered. The maximum coverage available from the Fund is $1.5 million per occurrence.</p>
					<h6>Who is eligible?</h6>
					<p>To be eligible to file a claim with the Fund, the claimant must be a current or past owner or operator of the UST from which an unauthorized release of petroleum has occurred, and be required to undertake corrective actions directed by the regulatory agency. Other eligibility conditions include compliance with applicable state UST permitting requirements, payment of UST storage fees, compliance with regulatory agency cleanup orders, and compliance with the federal financial responsibility requirement. In addition to petroleum USTs, owners of certain small home heating oil tanks that have had an unauthorized release of petroleum are eligible.</p>
					<h6>Why <span class="frey">FREY</span>?</h6>
					<p><span class="frey">FREY</span> has helped hundreds of our clients apply for the UST Cleanup Fund and successfully completed the investigation and cleanup of their properties. FREY will interface with the UST Cleanup Fund on your behalf and will ensure that investigations and cleanup directives move forward while maintaining UST Cleanup Fund funding for the work. FREY has extensive experience in working with UST Cleanup Fund staff and has assisted our clients reimbursement for current and past environmental expenses, including previously denied costs.A unique service that FREY offers is that we can defer payment for our services until the UST Fund has issued payment to you. FREY provides a limited guarantee, in writing, that we will only require payment of the amount that you are reimbursed by the UST Fund. With exception to the UST Cleanup Fund’s one time deductible, this results in no out of pocket expense to you and ensures that the investigation or remediation phase(s) of the fuel release case continues to move forward independent of the UST Fund’s reimbursement process. Underground Storage Tank Cleanup Fund Facts .</p>
				</div>
 -->
			</div>

		</div>

		<div class="grid__item one-third">
			<div class="service-nav pod">
				<ul>
						<?php

							$queryObject = new WP_Query( 'post_type=services' );
							$i = 1;

							if ($queryObject->have_posts()) {
							   
							    while ($queryObject->have_posts()) {
							        $queryObject->the_post();
							        $ids[] = get_the_ID();


									echo '<li><a class="nav-' . $i . '" href="#' . $i . '">' . get_the_title() . '</a></li>';

									$i++;

								}
							}
							wp_reset_query();
						?>

				</ul>
			</div>
		</div>
	</div>
	



	

<?php get_footer(); ?>
