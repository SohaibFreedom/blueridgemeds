<?php /* Template Name: Consent To Telehealth */ ?>
<?php get_header(); ?>

<section class="page-content-header consent-telehealth-header">
    <div class="container">
        <div class="header-content-box">
            <?php 
                $telehealth_header_content = get_field('telehealth_content');
                $heading = $telehealth_header_content['heading'] ?? '';  
                $description = $telehealth_header_content['description'] ?? '';
            ?>

            <?php if ($heading): ?>
                <h2><?php echo $heading; ?></h2>
            <?php endif; ?>

            <?php if ($description): ?>
                <p><?php echo $description; ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="page-content-wrap consent-telehealth-content">
    <div class="container">
        <div class="page-content-inner">
            <p>YOU ACKNOWLEDGE THAT BY ACCESSING THIS WEBSITE, ITS ASSOCIATED APPLICATIONS, PLATFORM, AND/OR SERVICES, YOU HAVE READ, UNDERSTOOD, AND AGREE TO BE LEGALLY BOUND BY AND COMPLY WITH THE TERMS SET FORTH HEREIN. IF YOU DO NOT OR CANNOT AGREE WITH ANY PART OF THIS CONSENT TO TELEHEALTH, YOU MAY NOT ACCESS NOR USE THE WEBSITE, APPLICATIONS, PLATFORM AND/OR SERVICES.</p>
            <h4>Introduction</h4>
            <p>BlueRidge Meds (collectively, "we," "our," "us," or "BlueRidge Meds") is a digital health company that offers a website and a related application through which users, clients, or other visitors (collectively "you" or "your") may request and obtain online consultations with affiliated independent, licensed physicians, nurse practitioners, and other provider types (collectively, a “Provider” or “Providers”) as managed by our contracted provider network, Telegramd Provider Network PC (“Medical Group”). Services may include consultations, treatment plans, at-home labs, diagnoses, or prescriptions through nationwide local and/or mail-order pharmacies that BlueRidge Meds has partnered with for the provision of such services (collectively, “Services”). These Services are offered online via telehealth, a method of delivering remote access to healthcare that makes use of a number of telecommunications technologies, including synchronous video or voice, asynchronous chat, text, email, or other secure communication methods remotely. As a result, telehealth may involve the electronic transmission of personal health information such as health records, laboratory findings, necessary photographs, video recordings, information obtained from remote monitoring devices, or similar data for proper clinical assessment, diagnosis, treatment, and follow-up services. Telehealth is additionally used to provide clinical consultations, assessments, diagnoses, health education, treatment, and follow-up care. </p>
            <h4>Potential Benefits of Telehealth</h4>
            <p>The potential benefits of telehealth Services include: having access to medical care and health education without needing to leave home, thereby improving access to health care, and receiving private diagnosis, and treatment at a time that can be more conducive to client schedules. This can result in improved clinical outcomes and more affordable medical care.</p>
            <h4>Potential Limitations of Telehealth</h4>
            <p>Although BlueRidge Meds is dedicated to using industry best practices for the security of our website, application, platform, network, and software, with enhanced security tools and protocols in place to protect personal health information, the electronic transmission of information always involves a certain degree of risk. This includes but is not limited to, treatment information being disrupted or distorted by technical failures, sessions being interrupted or accessed by unauthorized persons, miscommunication between myself and the provider via Telehealth, being overheard by persons near me, and electronic communication being forwarded, intercepted, or changed without my knowledge and despite taking reasonable measures.</p>
            <p>Regulatory requirements in your state may prevent you from obtaining certain Services or prescriptions, your past medical history or a specific presenting condition may prevent you from using telehealth, we may not be able to perform certain tests, and the information you transmit via telehealth may not be sufficient for an accurate diagnosis and treatment. These limitations can prevent proper diagnosis and treatment, and such technology failures may even disrupt Services.</p>
            <h4>Responsibility to Maintain Separate Primary Care Provider</h4>
            <p>You are encouraged to speak with and take into consideration the counsel of your local primary care providers. Providers available through our platform do not replace care provided by your local primary care physician, or other specialists available to you including internists, gynecologists, cardiologists, psychiatrists, gastroenterologists, or other specialized care providers. It should be noted that as a requirement for care at BlueRidge Meds, you must maintain a relationship with your primary care physician. You must call 911 or go to a hospital if you are experiencing a medical emergency and are unable to receive treatment from your healthcare physician.</p>
            <h4>No Guarantee of Results</h4>
            <p>By using BlueRidge Meds products and services, you acknowledge that there is no guarantee that you will experience positive results. It is in your best interest to discuss alternative treatment options with your primary care physician or another qualified specialist before and during treatment, especially if you are being treated for any suspected or actual medical condition. The Services provided by BlueRidge Meds  do not prevent you from using other treatments or services, although you must notify any practitioners sought of the specific treatments or services that you are receiving from BlueRidge Meds. Failure to follow treatment recommendations and guidelines will affect treatment outcomes. You must inform us immediately of any adverse effects of treatment, including any negative or unexpected physical, mental, or emotional effects associated with the use of any BlueRidge Meds  products or Services.</p>
            <h4>Notification of Information that May Affect Eligibility</h4>
            <p>By using BlueRidge Meds' products and Services, you agree to promptly notify our Providers of any changes that may affect your eligibility for our Services, including pregnancy, breastfeeding, or any other treatment that may conflict with the treatments you are receiving. You are also responsible for disclosing to Providers all medications, lab tests, and assessments received elsewhere to ensure that care is coordinated and appropriate. In addition, it is your responsibility to notify any other healthcare professional of any treatments or laboratory tests that you receive from us.</p>
            <h4>Referrals</h4>
            <p>Some conditions cannot be treated through our platform. By using our platform Services, you understand that a Provider may recommend that you see a medical professional in person. This means you may need to seek treatment in your local community or from your primary care physician. </p>
            <h4>Insurance Use and Financial Responsibility</h4>
            <p>Although BlueRidge Meds may collect insurance information for future applications or to assist with the navigation of insurance-related inquiries for prescription coverage, BlueRidge Meds does not currently accept insurance and therefore you are financially responsible for the services rendered. Furthermore, we do not participate with nor accept Medicare, Medicaid, or Tricare insurance.</p>
            <h4>Telehealth Acknowledgement</h4>
            <p>By accepting this Consent to Telehealth, you affirm that you:</p>
            <p>Understand and have been given informed consent to receive medical care and treatment via telehealth from BlueRidge Meds affiliated Providers.</p>
            <p>Have read this Consent to Telehealth carefully and understand that using telehealth may provide substantial benefits, but as with any medical service offered, results cannot be assured, and there are potential risks that may be involved in the use of telehealth Services for which BlueRidge Meds cannot be made responsible.</p>
            <p>Understand that all existing confidentiality protections under federal and state law apply to information used or disclosed during your telehealth consultation. However, there are both mandatory and permissive exceptions to confidentiality that may allow or require disclosure of information used or disclosed during the telehealth consultation.</p>
            <p>Understand that Providers on our platform may employ varying approaches in my care, for which you have a right to decline.</p>
            <p>Understand that Providers obtained through our platform may at times recommend FDA-approved devices or medications to treat a condition in a way that differs from the use specifically approved by the FDA for such device or medication. You have the right to refuse such devices or medications. Understand that affiliated Providers made available through our platform are an addition to, and not a replacement for, your local primary care provider.</p>
            <p>Understand that there can be no guarantee of satisfactory results in connection with the Services offered through our platform.</p>
            <p>Understand that a Provider made available through our platform may determine that your condition is not appropriate for telehealth Services and that you may be asked to seek care within your local community or with my primary care provider.</p>
            <p>UNDERSTAND THAT YOU CANNOT OBTAIN URGENT OR EMERGENT CARE THROUGH BLUERIDGE MEDS PLATFORM AND PROVIDERS AND AS SUCH, IF YOU ARE EXPERIENCING A MEDICAL EMERGENCY, YOU MUST SEEK CARE AT YOUR LOCAL EMERGENCY DEPARTMENT OR CALL 911.</p>
            <p>Understand that you will have access to all of your health care information at your request and in accordance with applicable laws and regulations.</p>
            <p>Agree and authorize BlueRidge Meds and our associated Providers to collect, use, and share my information, including my personal health information for any purposes permitted by law, including for treatment, payment, and health care operations.</p>
            <p>Understand that you have a responsibility to answer all questions about your health including your medical history honestly, and accurately as withholding such information could result in harm to you including in some cases, death. As such, you must keep your Provider informed of any changes in your health status, diagnoses, symptoms, treatments, medications, and/or supplements used.
            </p>
            <p>Consent to hold harmless BlueRidge Meds including the associated Medical Group including their Providers, partners, software company, vendors, pharmacies, Parent Company, agents, and subsidiaries in the event that your information is compromised; breached; lost; stolen; or your care is otherwise delayed as a result of the compromise or failure of BlueRidge Med's website, applications, or platform technology.</p>
            <p>Understand that you can withdraw consent and cancel at any time in writing by emailing us at ask@blueridgemeds.com. Otherwise, this consent will be considered renewed upon each new telehealth consultation.</p>
            <h4>Services from Medical Group</h4>
            <p>BlueRidge Meds is not a medical group and does not provide medical advice, care, or treatment. However, through its Web or Mobile application, BlueRidge Meds may allow access to independent medical practitioners, including but not limited to Providers contracted through Telegramd Provider Network, PC, an independent medical group with a network of United States-based health care providers.</p>
            <p>It is important to note that BlueRidge Meds does not provide medical advice or care, own or operate the medical practices, employ, or in any way supervise the Providers rendering medical care to you. Care provided is the sole responsibility of the Medical Group and the Providers they employ.
            </p>
            <p>By using our Services, you agree that any prescriptions that you acquire from a Medical Group Provider will be solely for your personal use. You agree to fully and carefully read all product information and labels and to contact your Provider if you have any questions regarding the prescription or directions for its use.</p>
            <h4>USE AGREEMENT</h4>
            <p>By establishing an account and/or logging into BlueRidge Meds' website, applications, and/or platform, and by otherwise using any of BlueRidge Meds Services, you are automatically acknowledging and accepting the most current version of this Consent to Telehealth. Any changes will be updated and made available on our website, superseding, and replacing all prior versions with or without notification. Users are encouraged to often review our Consent to Telehealth, Terms of Use, and Privacy Policy for current information.</p>
        </div>
    </div>
</section>

<section class="live-support-section">
    <div class="container">
        <div class="support-content-wrap">
            <div class="support-info">
                <h3>Do you still have questions?</h3>
                <p>Call us for LIVE support now!</p>
                <a href="tel:1-855-295-2583">1-855-295-BLUE (2583)</a>
            </div>
            <div class="support-action">
                <a class="chat-with-us" href="/contact-us" title="Chat with us">Chat with us</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>