<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZTA Maturity Assessment Questionnaire</title>
    <link rel="stylesheet" href="css/home.css">

    <!-- box icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

     <!-- Scroll top -->
     <a href="#hom" class="backto-top">
        <i class='bx bx-up-arrow-alt'></i>
    </a>

    <!-- header -->
  <header>
    <div class="container">
     
     <div class="header">
     <div class="headerlogo"> <a href="index.php">ZTM</a></div>

    <nav>
      <ul class="navbar">
        <li><a href="index.php">Home</a></li>
        <li class="current"><a href="services.php">Services</a></li>
         <li><a href="dashboard.php">Dashboard</a></li>
         <li><a href="assessment.php">Questionnaire</a></li>
     </ul>
    </nav>

    <!-- menu icon -->
    <div class="menu-icon">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
       </div>

 </div>
    </div>
 </header>

    <section id="hom" class="Dashboard-head">
        <div class="container">
            <div class="text-effect">
                <div>
                    <span data-content="Z">Z</span><span data-content="e">e</span><span data-content="r">r</span><span data-content="o">o</span>
                <span data-content="T">T</span><span data-content="r">r</span><span data-content="u">u</span><span data-content="s">s</span><span data-content="t">t</span>
                <span data-content="M">M</span><span data-content="a">a</span><span data-content="t">t</span><span data-content="u">u</span><span data-content="r">r</span><span data-content="i">i</span><span data-content="t">t</span><span data-content="y">y</span>
                <span data-content="(ZTM)">(ZTM)</span>
                </div>
               <div>
                <span data-content="S">S</span><span data-content="e">e</span><span data-content="r">r</span><span data-content="v">v</span><span data-content="i">i</span><span data-content="c">c</span><span data-content="e">e</span><span data-content="s">s</span>
               </div>
            </div>
        </div>
    </section>

    <!-- <header>
        <div class="container">
            <nav>
                <ul class="header">
                 <li class="logo"><a href="#">ZTM</a></li>
                 <li><a class="survay" href="#">Take a survay</a></li>
                </ul>
            </nav>
        </div>
    </header> -->




    <section class="architecture">
        <div class="container">

             <div class="architecture-head">
                <h2>Zero Trust Architecture (ZTA) Maturity Tools & Services</h2>
                <p>This section maps best-in-class Zero Trust technologies to each ZTA Maturity Pillar, 
                    Domain, and Subfunctional Area with corresponding vendor technologies.</p>
             </div>

             
                <div class="sub-zta">
                    <h2><span><i class='bx bxs-shield-alt-2'></i></span> <span>Identity Pillar: Technologies & Services</span></h2>
               <table class="zta-table">
            <thead>
                <tr>
                    <th>Domain</th>
                    <th>Subfunctional Area</th>
                    <th>Best-in-Class Technologies & Vendors</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="3">Identity Governance</td>
                    <td>Policy Enforcement</td>
                    <td>Okta Identity Governance, Microsoft Entra ID, CyberArk</td>
                </tr>
                <tr>
                    <td>Role Management</td>
                    <td>SailPoint IdentityNow, IBM Security Verify, ForgeRock</td>
                </tr>
                <tr>
                    <td>Identity Lifecycle Management</td>
                    <td>Okta Workflows, Microsoft Entra ID, Ping Identity</td>
                </tr>
                <tr>
                    <td rowspan="3">Authentication & Authorization</td>
                    <td>Authentication Methods</td>
                    <td>Okta, Duo Security, FIDO2 (YubiKey), Microsoft Entra ID, PingID</td>
                </tr>
                <tr>
                    <td>Authorization Control</td>
                    <td>CyberArk, BeyondTrust, Okta Policy Engine</td>
                </tr>
                <tr>
                    <td>Credential Management</td>
                    <td>HashiCorp Vault, CyberArk PAM, 1Password for Enterprise</td>
                </tr>
            </tbody>
        </table>
                </div>

                <div class="sub-zta">
                    <h2><span><i class='bx bxs-notepad'></i></span> <span>Endpoint Pillar: Technologies & Services</span></h2>
        <table class="zta-table">
            <thead>
                <tr>
                    <th>Domain</th>
                    <th>Subfunctional Area</th>
                    <th>Best-in-Class Technologies & Vendors</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Device Inventory</td>
                    <td>Device Inventory & Asset Management</td>
                    <td>Microsoft Intune, Tanium, ServiceNow ITAM</td>
                </tr>
                <tr>
                    <td>Device Authentication</td>
                    <td>Device Authentication</td>
                    <td>Okta Device Trust, Duo Device Health, Microsoft Entra ID</td>
                </tr>
                <tr>
                    <td>Configuration Management</td>
                    <td>Device Configuration Management</td>
                    <td>Microsoft Endpoint Manager, VMware Workspace ONE</td>
                </tr>
                <tr>
                    <td>Endpoint Security</td>
                    <td>Endpoint Security</td>
                    <td>CrowdStrike Falcon, Microsoft Defender for Endpoint, SentinelOne</td>
                </tr>
            </tbody>
        </table>
                </div>

                <div class="sub-zta">
                    <h2><span><i class='bx bxs-shield-alt-2'></i></span> <span>Application Pillar: Technologies & Services</span></h2>
        <table class="zta-table">
            <thead>
                <tr>
                    <th>Domain</th>
                    <th>Subfunctional Area</th>
                    <th>Best-in-Class Technologies & Vendors</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Secure Coding Practices</td>
                    <td>Secure Coding Practices</td>
                    <td>Checkmarx, SonarQube, Veracode, GitHub Advanced Security</td>
                </tr>
                <tr>
                    <td rowspan="2">IAM</td>
                    <td>Application Authentication</td>
                    <td>Okta, Auth0, Microsoft Entra ID, Ping Identity</td>
                </tr>
                <tr>
                    <td>Role-Based Access Control (RBAC)</td>
                    <td>CyberArk, BeyondTrust, AWS IAM, ForgeRock</td>
                </tr>
                <tr>
                    <td>API Security</td>
                    <td>API Gateway Security</td>
                    <td>AWS API Gateway, Kong Gateway, Apigee</td>
                </tr>
            </tbody>
        </table>
                </div>

                <div class="sub-zta">
                    <h2><span><i class='bx bx-signal-5'></i></span> <span>Network Pillar: Technologies & Services</span></h2>
        <table class="zta-table">
            <thead>
                <tr>
                    <th>Domain</th>
                    <th>Subfunctional Area</th>
                    <th>Best-in-Class Technologies & Vendors</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="3">Network Segmentation</td>
                    <td>Zone-Based Segmentation</td>
                    <td>Illumio, Cisco Tetration, VMware NSX</td>
                </tr>
                <tr>
                    <td>Dynamic Segmentation</td>
                    <td>Cisco SD-Access, Fortinet SD-WAN, Palo Alto Networks</td>
                </tr>
                <tr>
                    <td>Network Segmentation</td>
                    <td>Juniper Mist AI, Arista CloudVision, Check Point Maestro</td>
                </tr>
                <tr>
                    <td>Threat Protection</td>
                    <td>IPS (Intrusion Prevention System)</td>
                    <td>Palo Alto Threat Prevention, Cisco Firepower, Snort</td>
                </tr>
            </tbody>
        </table>

                </div>

                <div class="sub-zta">
                    <h2><span><span><i class='bx bxs-notepad'></i></span></span> <span>Data Pillar: Technologies & Services</span></h2>
                    <table class="zta-table">
                        <thead>
                            <tr>
                                <th>Domain</th>
                                <th>Subfunctional Area</th>
                                <th>Best-in-Class Technologies & Vendors</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="3">Data Inventory Management</td>
                                <td>Data Discovery</td>
                                <td>BigID, Varonis, AWS Macie</td>
                            </tr>
                            <tr>
                                <td>Automated Data Discovery</td>
                                <td>Informatica, Symantec DLP, Google DLP</td>
                            </tr>
                            <tr>
                                <td>Real-Time Data Inventory</td>
                                <td>Exabeam, Splunk, Microsoft Purview</td>
                            </tr>
                            <tr>
                                <td>Data Encryption</td>
                                <td>Encryption at Rest</td>
                                <td>AWS KMS, HashiCorp Vault, Microsoft Azure Key Vault</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            

        </div>
    </section>


    <main></main>


    <!-- footer -->
    <footer>
        <div class="container">
            <div class="copyright">
                <p>Zero Trust 2025 © copyright</p>
            </div>
        </div>
    </footer>
    

    <script src="js/home.js"></script>
    <script>
        let scrollTop = document.querySelector(".backto-top");

window.addEventListener("scroll", () => {
    scrollTop.classList.toggle("scroll-active", window.scrollY >= 400);
}) 
    </script>
</body>
</html>
