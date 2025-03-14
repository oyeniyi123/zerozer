<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZTA Maturity Assessment Questionnaire</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/assessment.css">
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
     <div class="headerlogo"> <a href="index.html">ZTM</a></div>

    <nav>
      <ul class="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="services.php">Services</a></li>
         <li><a href="dashboard.php">Dashboard</a></li>
         <li class="current"><a href="assessment.php">Questionnaire</a></li>
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
                <span data-content="A">A</span><span data-content="s">s</span><span data-content="s">s</span><span data-content="e">e</span><span data-content="s">s</span><span data-content="s">s</span><span data-content="m">m</span><span data-content="e">e</span><span data-content="n">n</span><span data-content="t">t</span>
            </div>  
            </div>
        </div>
    </section>




    <div class="nav-buttons" id="hom">
        <div class="container">
            <div class="header">
                <button id="btn-identities" onclick="showSection('identities')">IDENTITIES</button>
                <button id="btn-endpoint" onclick="showSection('endpoint')">ENDPOINT</button>
                <button id="btn-infrastructure" onclick="showSection('infrastructure')">INFRASTRUCTURE</button>
                <button id="btn-data" onclick="showSection('data')">DATA</button>
                <button id="btn-apps" onclick="showSection('apps')">APPS</button>
                <button id="btn-network" onclick="showSection('network')">NETWORK</button>
            </div>
        </div>
    </div>

    <!-- Identities Section -->
    <section>
        <div class="container">
            
            <div id="identities" class="section">

                <div class="progress-bar">
                    <div class="progress-fill" id="progress-identities">
                        <span class="progress-percentage" id="percentage-identities">0%</span>
                    </div>
                </div>
                <h2>Zero Trust Identity Maturity Assessment</h2>
                <div class="question">
                    <h3>1. How are identity policies enforced?</h3>
                    <label><input type="radio" name="identity_q1" value="0" onchange="updateProgress('identities')"><span>Traditional – Identity policies are informal and inconsistently applied across the organization.</span></label>
                    <label><input type="radio" name="identity_q1" value="1" onchange="updateProgress('identities')"><span>Initial – Policies exist but require manual enforcement and oversight.</span></label>
                    <label><input type="radio" name="identity_q1" value="2" onchange="updateProgress('identities')"><span>Advanced – Policies are enforced automatically based on predefined rules and role-based access controls (RBAC).</span></label>
                    <label><input type="radio" name="identity_q1" value="3" onchange="updateProgress('identities')"><span>Optimal – AI-driven policies dynamically adjust based on real-time risk assessments and behavioral analytics.</span></label>
                </div>
                <div class="question">
                    <h3>2. How are roles and entitlements managed?</h3>
                    <label><input type="radio" name="identity_q2" value="0" onchange="updateProgress('identities')"><span>Traditional – Access is assigned based on job title with no defined roles or review processes.</span></label>
                    <label><input type="radio" name="identity_q2" value="1" onchange="updateProgress('identities')"><span>Initial – Some roles are defined, but entitlements are managed manually.</span></label>
                    <label><input type="radio" name="identity_q2" value="2" onchange="updateProgress('identities')"><span>Advanced – Role-based access controls (RBAC) and regular entitlement reviews ensure minimal privilege.</span></label>
                    <label><input type="radio" name="identity_q2" value="3" onchange="updateProgress('identities')"><span>Optimal – AI-driven entitlement management dynamically adjusts access based on behavior and risk.</span></label>
                </div>
                <div class="question">
                    <h3>3. How are identities provisioned and de-provisioned?</h3>
                    <label><input type="radio" name="identity_q3" value="0" onchange="updateProgress('identities')"><span>Traditional – User accounts are created manually, and old accounts remain active indefinitely.</span></label>
                    <label><input type="radio" name="identity_q3" value="1" onchange="updateProgress('identities')"><span>Initial – HR or IT manually updates access lists, but delays occur in removing or granting access.</span></label>
                    <label><input type="radio" name="identity_q3" value="2" onchange="updateProgress('identities')"><span>Advanced – Automated provisioning and de-provisioning ensure immediate access and account removal upon departure.</span></label>
                    <label><input type="radio" name="identity_q3" value="3" onchange="updateProgress('identities')"><span>Optimal – AI-driven identity lifecycle management dynamically adjusts access based on role changes, user behavior, and risk analysis.</span></label>
                </div>
                <div class="question">
                    <h3>4. What authentication mechanisms are in place for accessing critical resources?</h3>
                    <label><input type="radio" name="identity_q4" value="0" onchange="updateProgress('identities')"><span>Traditional – Users log in with only a username and password.</span></label>
                    <label><input type="radio" name="identity_q4" value="1" onchange="updateProgress('identities')"><span>Initial – Multi-Factor Authentication (MFA) is available but not required for all applications.</span></label>
                    <label><input type="radio" name="identity_q4" value="2" onchange="updateProgress('identities')"><span>Advanced – MFA is required for all critical resources, and adaptive authentication is based on user risk.</span></label>
                    <label><input type="radio" name="identity_q4" value="3" onchange="updateProgress('identities')"><span>Optimal – AI continuously assesses authentication requests and dynamically adjusts security controls.</span></label>
                </div>
                <div class="question">
                    <h3>5. How is Single Sign-On (SSO) implemented across applications?</h3>
                    <label><input type="radio" name="identity_q5" value="0" onchange="updateProgress('identities')"><span>Traditional – Users have separate logins for each application, increasing password fatigue.</span></label>
                    <label><input type="radio" name="identity_q5" value="1" onchange="updateProgress('identities')"><span>Initial – Some applications use SSO, but many still require separate credentials.</span></label>
                    <label><input type="radio" name="identity_q5" value="2" onchange="updateProgress('identities')"><span>Advanced – SSO is implemented across all critical applications, reducing the need for multiple logins.</span></label>
                    <label><input type="radio" name="identity_q5" value="3" onchange="updateProgress('identities')"><span>Optimal – AI-driven SSO ensures secure, risk-based access and integrates with adaptive authentication.</span></label>
                </div>
                <div class="question">
                    <h3>6. How are identity-related threats detected? (Visibility & Analytics)</h3>
                    <label><input type="radio" name="identity_q6" value="0" onchange="updateProgress('identities')"><span>Traditional – Threat detection relies on manual reviews of security logs.</span></label>
                    <label><input type="radio" name="identity_q6" value="1" onchange="updateProgress('identities')"><span>Initial – Security teams receive alerts, but response is not automated.</span></label>
                    <label><input type="radio" name="identity_q6" value="2" onchange="updateProgress('identities')"><span>Advanced – Automated tools analyze identity behavior and flag anomalies.</span></label>
                    <label><input type="radio" name="identity_q6" value="3" onchange="updateProgress('identities')"><span>Optimal – AI-driven analytics detect and respond to threats before they escalate.</span></label>
                </div>
                <div class="question">
                    <h3>7. How are identity workflows managed? (Automation & Orchestration)</h3>
                    <label><input type="radio" name="identity_q7" value="0" onchange="updateProgress('identities')"><span>Traditional – Identity processes rely on manual approval workflows.</span></label>
                    <label><input type="radio" name="identity_q7" value="1" onchange="updateProgress('identities')"><span>Initial – Some identity tasks are automated, but approval processes remain manual.</span></label>
                    <label><input type="radio" name="identity_q7" value="2" onchange="updateProgress('identities')"><span>Advanced – Automated workflows streamline identity provisioning and de-provisioning.</span></label>
                    <label><input type="radio" name="identity_q7" value="3" onchange="updateProgress('identities')"><span>Optimal – AI-driven orchestration dynamically adapts identity workflows based on real-time risk assessments.</span></label>
                </div>
                <div class="question">
                    <h3>8. How is compliance with identity policies tracked and enforced? (Governance)</h3>
                    <label><input type="radio" name="identity_q8" value="0" onchange="updateProgress('identities')"><span>Traditional – Compliance reviews are performed infrequently, typically only when required by auditors.</span></label>
                    <label><input type="radio" name="identity_q8" value="1" onchange="updateProgress('identities')"><span>Initial – Manual audits track identity compliance, but gaps exist.</span></label>
                    <label><input type="radio" name="identity_q8" value="2" onchange="updateProgress('identities')"><span>Advanced – Automated compliance monitoring enforces policies consistently.</span></label>
                    <label><input type="radio" name="identity_q8" value="3" onchange="updateProgress('identities')"><span>Optimal – AI-driven compliance ensures real-time policy enforcement and regulatory adherence.</span></label>
                </div>

                <div class="summary-table">
                     <!-- Identity Pillar -->
        <div class="pillar">
            <div class="pillar-header" onclick="toggleContent(this)">
                <span>Identity</span>
                <span>Score: <span class="score">2.58 (User Account), 2.21 (Service Account)</span></span>
            </div>
            <div class="pillar-content">
                <h3>Identity Assessment</h3>
                <input type="text" class="search-box" placeholder="Search Identity Subfunctional Areas..." onkeyup="searchTable(this, 'identity-table')">
                <table id="identity-table">
                    <tr>
                        <th>Subfunctional Area</th>
                        <th>Question</th>
                        <th>Score</th>
                        <th>Stage</th>
                        <th>Criteria</th>
                        <th>Gaps</th>
                        <th>Recommendations</th>
                    </tr>
                    <tr>
                        <td class="tooltip">Policy Enforcement<span class="tooltiptext">The application and enforcement of security policies consistently across all identities to ensure compliance and mitigate risks.</span></td>
                        <td>How are identity policies enforced?</td>
                        <td>3.0</td>
                        <td>Advanced</td>
                        <td>> 80% implementation of governance practices, with some automation.</td>
                        <td>Policy enforcement requires more automation, especially in dynamic environments.</td>
                        <td>Automate policy enforcement with Azure Entra Conditional Access.</td>
                    </tr>
                    <tr>
                        <td>Role Management</td>
                        <td>How are roles and entitlements managed?</td>
                        <td>2.0</td>
                        <td>Initial</td>
                        <td>> 50% implementation of basic governance practices.</td>
                        <td>Full automation for role-based provisioning is needed.</td>
                        <td>Implement full automation with SailPoint Account Provisioning.</td>
                    </tr>
                    <!-- Add remaining Identity subfunctional areas (17 more) similarly -->
                </table>
                <p>Total User Account Score: <span class="score">49 (2.58)</span>, Service Account Score: <span class="score">42 (2.21)</span></p>
            </div>
        </div>
                </div>

                <div class="section-nav">
                    <button onclick="navigate('previous', 'identities')" disabled>Previous</button>
                    <button onclick="navigate('next', 'identities')">Next</button>
                </div>

        </div>

        </div>
    </section>

    <!-- Endpoint Section -->
    <section >
        <div class="container">

            <div id="endpoint" class="section">

                <div class="progress-bar">
                    <div class="progress-fill" id="progress-endpoint">
                        <span class="progress-percentage" id="percentage-endpoint">0%</span>
                    </div>
                </div>
                <h2>Zero Trust Device Maturity Assessment</h2>
                <div class="question">
                    <h3>1. How are devices inventoried and tracked?</h3>
                    <label><input type="radio" name="device_q1" value="0" onchange="updateProgress('endpoint')"><span>Traditional – We don’t track devices. Employees use personal and company devices freely without oversight.</span></label>
                    <label><input type="radio" name="device_q1" value="1" onchange="updateProgress('endpoint')"><span>Initial – We manually track devices using spreadsheets, but updates are infrequent.</span></label>
                    <label><input type="radio" name="device_q1" value="2" onchange="updateProgress('endpoint')"><span>Advanced – Automated asset management tools track all devices, including ownership and security status.</span></label>
                    <label><input type="radio" name="device_q1" value="3" onchange="updateProgress('endpoint')"><span>Optimal – AI-driven inventory continuously updates, detects new devices, and flags unauthorized endpoints.</span></label>
                </div>
                <div class="question">
                    <h3>2. How are devices authenticated before accessing resources?</h3>
                    <label><input type="radio" name="device_q2" value="0" onchange="updateProgress('endpoint')"><span>Traditional – Any device with network access can connect to company systems.</span></label>
                    <label><input type="radio" name="device_q2" value="1" onchange="updateProgress('endpoint')"><span>Initial – Devices must enter a password or basic credentials for authentication.</span></label>
                    <label><input type="radio" name="device_q2" value="2" onchange="updateProgress('endpoint')"><span>Advanced – Certificates and Multi-Factor Authentication (MFA) verify device identity.</span></label>
                    <label><input type="radio" name="device_q2" value="3" onchange="updateProgress('endpoint')"><span>Optimal – AI-driven device trust dynamically adapts authentication based on risk, location, and behavior.</span></label>
                </div>
                <div class="question">
                    <h3>3. How are devices configured and kept compliant?</h3>
                    <label><input type="radio" name="device_q3" value="0" onchange="updateProgress('endpoint')"><span>Traditional – Devices are configured manually with no security enforcement.</span></label>
                    <label><input type="radio" name="device_q3" value="1" onchange="updateProgress('endpoint')"><span>Initial – Basic security configurations exist but vary between devices.</span></label>
                    <label><input type="radio" name="device_q3" value="2" onchange="updateProgress('endpoint')"><span>Advanced – Standardized configurations are enforced through Mobile Device Management (MDM) tools.</span></label>
                    <label><input type="radio" name="device_q3" value="3" onchange="updateProgress('endpoint')"><span>Optimal – AI continuously enforces configurations and adapts to emerging threats dynamically.</span></label>
                </div>
                <div class="question">
                    <h3>4. How is endpoint security enforced and monitored?</h3>
                    <label><input type="radio" name="device_q4" value="0" onchange="updateProgress('endpoint')"><span>Traditional – There is no formal endpoint security strategy.</span></label>
                    <label><input type="radio" name="device_q4" value="1" onchange="updateProgress('endpoint')"><span>Initial – Antivirus and firewalls are installed, but updates are manual.</span></label>
                    <label><input type="radio" name="device_q4" value="2" onchange="updateProgress('endpoint')"><span>Advanced – Endpoint Detection and Response (EDR) tools detect and mitigate threats automatically.</span></label>
                    <label><input type="radio" name="device_q4" value="3" onchange="updateProgress('endpoint')"><span>Optimal – AI-powered security solutions predict and neutralize endpoint threats before they escalate.</span></label>
                </div>
                <div class="question">
                    <h3>5. How is network access controlled for devices?</h3>
                    <label><input type="radio" name="device_q5" value="0" onchange="updateProgress('endpoint')"><span>Traditional – Any device with the Wi-Fi password can connect.</span></label>
                    <label><input type="radio" name="device_q5" value="1" onchange="updateProgress('endpoint')"><span>Initial – Basic MAC address filtering is used, but not strictly enforced.</span></label>
                    <label><input type="radio" name="device_q5" value="2" onchange="updateProgress('endpoint')"><span>Advanced – Network Access Control (NAC) verifies device security before allowing access.</span></label>
                    <label><input type="radio" name="device_q5" value="3" onchange="updateProgress('endpoint')"><span>Optimal – AI dynamically controls network access based on device behavior and compliance status.</span></label>
                </div>
                <div class="question">
                    <h3>6. How are device updates managed?</h3>
                    <label><input type="radio" name="device_q6" value="0" onchange="updateProgress('endpoint')"><span>Traditional – Employees decide when to update their devices, if at all.</span></label>
                    <label><input type="radio" name="device_q6" value="1" onchange="updateProgress('endpoint')"><span>Initial – Patches are applied manually, and some devices remain outdated.</span></label>
                    <label><input type="radio" name="device_q6" value="2" onchange="updateProgress('endpoint')"><span>Advanced – Automated update management ensures patches are applied across all devices.</span></label>
                    <label><input type="radio" name="device_q6" value="3" onchange="updateProgress('endpoint')"><span>Optimal – AI-driven patching prioritizes critical vulnerabilities and enforces updates dynamically.</span></label>
                </div>
                <div class="question">
                    <h3>7. How are devices securely decommissioned?</h3>
                    <label><input type="radio" name="device_q7" value="0" onchange="updateProgress('endpoint')"><span>Traditional – Old devices are discarded without wiping sensitive data.</span></label>
                    <label><input type="radio" name="device_q7" value="1" onchange="updateProgress('endpoint')"><span>Initial – Some devices are manually wiped, but not consistently.</span></label>
                    <label><input type="radio" name="device_q7" value="2" onchange="updateProgress('endpoint')"><span>Advanced – Devices are securely erased using automated data destruction tools before disposal.</span></label>
                    <label><input type="radio" name="device_q7" value="3" onchange="updateProgress('endpoint')"><span>Optimal – AI monitors device lifecycle and enforces secure decommissioning when devices reach end-of-life.</span></label>
                </div>
                <div class="question">
                    <h3>8. How is telemetry data collected and analyzed for security insights?</h3>
                    <label><input type="radio" name="device_q8" value="0" onchange="updateProgress('endpoint')"><span>Traditional – We do not collect device telemetry data.</span></label>
                    <label><input type="radio" name="device_q8" value="1" onchange="updateProgress('endpoint')"><span>Initial – We collect telemetry data, but analysis is manual and infrequent.</span></label>
                    <label><input type="radio" name="device_q8" value="2" onchange="updateProgress('endpoint')"><span>Advanced – Automated tools analyze telemetry data for anomalies and security insights.</span></label>
                    <label><input type="radio" name="device_q8" value="3" onchange="updateProgress('endpoint')"><span>Optimal – AI continuously assesses telemetry data, detects threats, and triggers automated responses.</span></label>
                </div>
                <div class="question">
                    <h3>9. How are governance policies enforced across devices?</h3>
                    <label><input type="radio" name="device_q9" value="0" onchange="updateProgress('endpoint')"><span>Traditional – We have policies, but enforcement is inconsistent.</span></label>
                    <label><input type="radio" name="device_q9" value="1" onchange="updateProgress('endpoint')"><span>Initial – Device policies are documented but require manual enforcement.</span></label>
                    <label><input type="radio" name="device_q9" value="2" onchange="updateProgress('endpoint')"><span>Advanced – Governance policies are enforced using automated compliance tools.</span></label>
                    <label><input type="radio" name="device_q9" value="3" onchange="updateProgress('endpoint')"><span>Optimal – AI dynamically adapts policies based on real-time compliance data.</span></label>
                </div>
                <div class="question">
                    <h3>10. How are device and identity security integrated?</h3>
                    <label><input type="radio" name="device_q10" value="0" onchange="updateProgress('endpoint')"><span>Traditional – Device security is separate from identity security.</span></label>
                    <label><input type="radio" name="device_q10" value="1" onchange="updateProgress('endpoint')"><span>Initial – Some integration exists, but manual intervention is required.</span></label>
                    <label><input type="radio" name="device_q10" value="2" onchange="updateProgress('endpoint')"><span>Advanced – Device security is tightly integrated with identity access management.</span></label>
                    <label><input type="radio" name="device_q10" value="3" onchange="updateProgress('endpoint')"><span>Optimal – AI-driven integration ensures dynamic security adjustments based on both device and user behavior.</span></label>
                </div>

                 <!-- Device Pillar -->
        <div class="summary-table">
            <div class="pillar">
                <div class="pillar-header" onclick="toggleContent(this)">
                    <span>Device</span>
                    <span>Score: <span class="score">2.88</span></span>
                </div>
                <div class="pillar-content">
                    <h3>Device Assessment</h3>
                    <input type="text" class="search-box" placeholder="Search Device Subfunctional Areas..." onkeyup="searchTable(this, 'device-table')">
                    <table id="device-table">
                        <tr>
                            <th>Subfunctional Area</th>
                            <th>Question</th>
                            <th>Score</th>
                            <th>Stage</th>
                            <th>Criteria</th>
                            <th>Gaps</th>
                            <th>Recommendations</th>
                        </tr>
                        <tr>
                            <td class="tooltip">Device Inventory<span class="tooltiptext">The process of tracking and managing all devices connected to the network, ensuring visibility into device type, location, and ownership.</span></td>
                            <td>How are devices inventoried and tracked?</td>
                            <td>2.0</td>
                            <td>Initial</td>
                            <td>< 50% implementation of network security practices.</td>
                            <td>Device inventory is tracked through CMDB, but cloud inventory processes need improvement.</td>
                            <td>Expand asset inventory with ServiceNow CMDB and Crowdstrike Falcon.</td>
                        </tr>
                        <tr>
                            <td>Endpoint Security</td>
                            <td>How is endpoint security enforced?</td>
                            <td>3.0</td>
                            <td>Advanced</td>
                            <td>> 50% implementation of basic device management practices.</td>
                            <td>Coverage for BYOD is lacking.</td>
                            <td>Extend EDR coverage with Crowdstrike Falcon Endpoint Protection.</td>
                        </tr>
                        <!-- Add remaining Device subfunctional areas (22 more) similarly -->
                    </table>
                    <p>Total Device Score: <span class="score">69 (2.88)</span></p>
                </div>
            </div>
    
        </div>

                <div class="section-nav">
                    <button onclick="navigate('previous', 'endpoint')">Previous</button>
                    <button onclick="navigate('next', 'endpoint')">Next</button>
                </div>

        </div>

        </div>
    </section>

    <!-- Infrastructure Section -->
    <section>
        <div class="container">

            <div id="infrastructure" class="section">

                <div class="progress-bar">
                    <div class="progress-fill" id="progress-infrastructure">
                        <span class="progress-percentage" id="percentage-infrastructure">0%</span>
                    </div>
                </div>
                <h2>Zero Trust Infrastructure Maturity Assessment</h2>
                <div class="question">
                    <h3>1. How is network segmentation implemented to control access to critical infrastructure?</h3>
                    <label><input type="radio" name="infra_q1" value="0" onchange="updateProgress('infrastructure')"><span>Traditional – There is no segmentation; all network resources are accessible to all users and devices.</span></label>
                    <label><input type="radio" name="infra_q1" value="1" onchange="updateProgress('infrastructure')"><span>Initial – Basic VLANs are used, but segmentation is static and not dynamically enforced.</span></label>
                    <label><input type="radio" name="infra_q1" value="2" onchange="updateProgress('infrastructure')"><span>Advanced – Role-based microsegmentation restricts access based on user, device, and behavior.</span></label>
                    <label><input type="radio" name="infra_q1" value="3" onchange="updateProgress('infrastructure')"><span>Optimal – AI-driven microsegmentation dynamically adapts based on real-time risk assessments.</span></label>
                </div>
                <div class="question">
                    <h3>2. How is secure remote access provided to infrastructure resources?</h3>
                    <label><input type="radio" name="infra_q2" value="0" onchange="updateProgress('infrastructure')"><span>Traditional – Users connect via VPN with no additional security layers.</span></label>
                    <label><input type="radio" name="infra_q2" value="1" onchange="updateProgress('infrastructure')"><span>Initial – MFA is required for VPN access, but policies are static and manual.</span></label>
                    <label><input type="radio" name="infra_q2" value="2" onchange="updateProgress('infrastructure')"><span>Advanced – Zero Trust Network Access (ZTNA) enforces user, device, and risk-based policies.</span></label>
                    <label><input type="radio" name="infra_q2" value="3" onchange="updateProgress('infrastructure')"><span>Optimal – AI dynamically adjusts access privileges based on behavior, location, and device security posture.</span></label>
                </div>
                <div class="question">
                    <h3>3. How is infrastructure resiliency ensured to maintain availability?</h3>
                    <label><input type="radio" name="infra_q3" value="0" onchange="updateProgress('infrastructure')"><span>Traditional – No redundancy; a single point of failure exists.</span></label>
                    <label><input type="radio" name="infra_q3" value="1" onchange="updateProgress('infrastructure')"><span>Initial – Basic redundancy, but failover mechanisms are manual and slow.</span></label>
                    <label><input type="radio" name="infra_q3" value="2" onchange="updateProgress('infrastructure')"><span>Advanced – Automated failover mechanisms ensure high availability (HA).</span></label>
                    <label><input type="radio" name="infra_q3" value="3" onchange="updateProgress('infrastructure')"><span>Optimal – AI-driven auto-scaling and self-healing infrastructure ensure continuous availability.</span></label>
                </div>
                <div class="question">
                    <h3>4. How is security managed across on-premises and cloud environments?</h3>
                    <label><input type="radio" name="infra_q4" value="0" onchange="updateProgress('infrastructure')"><span>Traditional – Cloud and on-premises security are managed separately with inconsistent policies.</span></label>
                    <label><input type="radio" name="infra_q4" value="1" onchange="updateProgress('infrastructure')"><span>Initial – Some security policies are applied, but cloud and on-prem remain siloed.</span></label>
                    <label><input type="radio" name="infra_q4" value="2" onchange="updateProgress('infrastructure')"><span>Advanced – Unified security policies enforce controls across hybrid environments.</span></label>
                    <label><input type="radio" name="infra_q4" value="3" onchange="updateProgress('infrastructure')"><span>Optimal – AI dynamically adapts security policies across cloud and on-prem based on real-time risk assessment.</span></label>
                </div>
                <div class="question">
                    <h3>5. How are threats and anomalies detected across the infrastructure?</h3>
                    <label><input type="radio" name="infra_q5" value="0" onchange="updateProgress('infrastructure')"><span>Traditional – No monitoring tools are in place; threats are detected after incidents occur.</span></label>
                    <label><input type="radio" name="infra_q5" value="1" onchange="updateProgress('infrastructure')"><span>Initial – Basic SIEM (Security Information and Event Management) collects logs, but analysis is manual.</span></label>
                    <label><input type="radio" name="infra_q5" value="2" onchange="updateProgress('infrastructure')"><span>Advanced – Automated threat detection tools provide real-time alerts and response.</span></label>
                    <label><input type="radio" name="infra_q5" value="3" onchange="updateProgress('infrastructure')"><span>Optimal – AI-driven analytics predict threats and trigger automated mitigations.</span></label>
                </div>
                <div class="question">
                    <h3>6. How is visibility into infrastructure security ensured?</h3>
                    <label><input type="radio" name="infra_q6" value="0" onchange="updateProgress('infrastructure')"><span>Traditional – There is no centralized visibility; logs are stored but not actively monitored.</span></label>
                    <label><input type="radio" name="infra_q6" value="1" onchange="updateProgress('infrastructure')"><span>Initial – Some logging and monitoring exist, but analysis is manual and infrequent.</span></label>
                    <label><input type="radio" name="infra_q6" value="2" onchange="updateProgress('infrastructure')"><span>Advanced – Automated security analytics tools provide real-time visibility and alerts.</span></label>
                    <label><input type="radio" name="infra_q6" value="3" onchange="updateProgress('infrastructure')"><span>Optimal – AI-driven analytics correlate data across multiple sources to provide real-time security insights.</span></label>
                </div>
                <div class="question">
                    <h3>7. How are infrastructure security operations automated?</h3>
                    <label><input type="radio" name="infra_q7" value="0" onchange="updateProgress('infrastructure')"><span>Traditional – Security configurations and responses are entirely manual.</span></label>
                    <label><input type="radio" name="infra_q7" value="1" onchange="updateProgress('infrastructure')"><span>Initial – Some automation is used, but most security processes require human intervention.</span></label>
                    <label><input type="radio" name="infra_q7" value="2" onchange="updateProgress('infrastructure')"><span>Advanced – Automated security orchestration tools improve response times and reduce risk.</span></label>
                    <label><input type="radio" name="infra_q7" value="3" onchange="updateProgress('infrastructure')"><span>Optimal – AI-driven automation dynamically adjusts security settings based on real-time threats.</span></label>
                </div>
                <div class="question">
                    <h3>8. How are security policies enforced and monitored for compliance?</h3>
                    <label><input type="radio" name="infra_q8" value="0" onchange="updateProgress('infrastructure')"><span>Traditional – Compliance is checked only when required by regulations or audits.</span></label>
                    <label><input type="radio" name="infra_q8" value="1" onchange="updateProgress('infrastructure')"><span>Initial – Policies exist, but enforcement is manual and inconsistent.</span></label>
                    <label><input type="radio" name="infra_q8" value="2" onchange="updateProgress('infrastructure')"><span>Advanced – Automated compliance tools continuously enforce security policies.</span></label>
                    <label><input type="radio" name="infra_q8" value="3" onchange="updateProgress('infrastructure')"><span>Optimal – AI dynamically updates and enforces compliance based on regulatory changes and risk analysis.</span></label>
                </div>
                <div class="section-nav">
                    <button onclick="navigate('previous', 'infrastructure')">Previous</button>
                    <button onclick="navigate('next', 'infrastructure')">Next</button>
                </div>

        </div>

        </div>
    </section>

    <!-- Data Section -->
    <section>
        <div class="container">

            <div id="data" class="section">

                <div class="progress-bar">
                    <div class="progress-fill" id="progress-data">
                        <span class="progress-percentage" id="percentage-data">0%</span>
                    </div>
                </div>
                <h2>Zero Trust Data Maturity Assessment</h2>
                <div class="question">
                    <h3>1. How are data assets discovered and cataloged across environments?</h3>
                    <label><input type="radio" name="data_q1" value="0" onchange="updateProgress('data')"><span>Traditional – We don’t have a formal data inventory. Employees store files wherever they want (e.g., personal drives, cloud storage, USBs).</span></label>
                    <label><input type="radio" name="data_q1" value="1" onchange="updateProgress('data')"><span>Initial – We maintain a basic data inventory manually in spreadsheets, but updates are inconsistent.</span></label>
                    <label><input type="radio" name="data_q1" value="2" onchange="updateProgress('data')"><span>Advanced – Automated tools track and classify data across all storage locations, providing real-time updates.</span></label>
                    <label><input type="radio" name="data_q1" value="3" onchange="updateProgress('data')"><span>Optimal – AI-driven tools continuously discover and classify data, alerting security teams to unauthorized access or risks.</span></label>
                </div>
                <div class="question">
                    <h3>2. How is data classified based on sensitivity and business impact?</h3>
                    <label><input type="radio" name="data_q2" value="0" onchange="updateProgress('data')"><span>Traditional – We don’t classify data. Employees decide what’s important on their own.</span></label>
                    <label><input type="radio" name="data_q2" value="1" onchange="updateProgress('data')"><span>Initial – Some files are manually labeled (e.g., Confidential), but enforcement is inconsistent.</span></label>
                    <label><input type="radio" name="data_q2" value="2" onchange="updateProgress('data')"><span>Advanced – AI-driven tools automatically classify data based on sensitivity and enforce security policies.</span></label>
                    <label><input type="radio" name="data_q2" value="3" onchange="updateProgress('data')"><span>Optimal – Classification is dynamic and adjusts based on context, such as real-time user behavior and business rules.</span></label>
                </div>
                <div class="question">
                    <h3>3. How does your organization ensure data availability in case of failure?</h3>
                    <label><input type="radio" name="data_q3" value="0" onchange="updateProgress('data')"><span>Traditional – We don’t have backups or rely on occasional manual backups.</span></label>
                    <label><input type="radio" name="data_q3" value="1" onchange="updateProgress('data')"><span>Initial – We back up data regularly, but restoration is slow and untested.</span></label>
                    <label><input type="radio" name="data_q3" value="2" onchange="updateProgress('data')"><span>Advanced – Real-time data replication ensures backups are always up to date, and recovery testing is performed.</span></label>
                    <label><input type="radio" name="data_q3" value="3" onchange="updateProgress('data')"><span>Optimal – AI-driven backup and recovery systems automatically detect failures and restore data instantly.</span></label>
                </div>
                <div class="question">
                    <h3>4. How is sensitive data protected from unauthorized access?</h3>
                    <label><input type="radio" name="data_q4" value="0" onchange="updateProgress('data')"><span>Traditional – We don’t encrypt data, or only encrypt specific files manually.</span></label>
                    <label><input type="radio" name="data_q4" value="1" onchange="updateProgress('data')"><span>Initial – Some sensitive files are encrypted, but encryption keys are stored insecurely (e.g., in documents or emails).</span></label>
                    <label><input type="radio" name="data_q4" value="2" onchange="updateProgress('data')"><span>Advanced – All sensitive data is automatically encrypted at rest and in transit, with centralized key management.</span></label>
                    <label><input type="radio" name="data_q4" value="3" onchange="updateProgress('data')"><span>Optimal – AI-driven encryption adapts to risks dynamically, using quantum-safe cryptography for future threats.</span></label>
                </div>
                <div class="question">
                    <h3>5. How do you verify users before they access sensitive data?</h3>
                    <label><input type="radio" name="data_q5" value="0" onchange="updateProgress('data')"><span>Traditional – Employees log in with a username and password, no additional security.</span></label>
                    <label><input type="radio" name="data_q5" value="1" onchange="updateProgress('data')"><span>Initial – We use Multi-Factor Authentication (MFA), but it’s not enforced everywhere.</span></label>
                    <label><input type="radio" name="data_q5" value="2" onchange="updateProgress('data')"><span>Advanced – MFA is required for all sensitive data access, with adaptive authentication for higher-risk access requests.</span></label>
                    <label><input type="radio" name="data_q5" value="3" onchange="updateProgress('data')"><span>Optimal – AI-driven authentication continuously assesses user risk and dynamically adjusts security controls.</span></label>
                </div>
                <div class="question">
                    <h3>6. How do you enforce regulatory compliance and security policies?</h3>
                    <label><input type="radio" name="data_q6" value="0" onchange="updateProgress('data')"><span>Traditional – We follow security best practices informally, but there’s no compliance enforcement.</span></label>
                    <label><input type="radio" name="data_q6" value="1" onchange="updateProgress('data')"><span>Initial – We conduct periodic compliance audits but rely on manual reviews.</span></label>
                    <label><input type="radio" name="data_q6" value="2" onchange="updateProgress('data')"><span>Advanced – Automated compliance tools enforce security policies and generate reports for audits.</span></label>
                    <label><input type="radio" name="data_q6" value="3" onchange="updateProgress('data')"><span>Optimal – AI-driven compliance monitoring continuously adapts to evolving regulations and industry standards.</span></label>
                </div>
                <div class="question">
                    <h3>7. How is data leakage prevented?</h3>
                    <label><input type="radio" name="data_q7" value="0" onchange="updateProgress('data')"><span>Traditional – Employees can freely copy, email, or upload company data anywhere.</span></label>
                    <label><input type="radio" name="data_q7" value="1" onchange="updateProgress('data')"><span>Initial – We block USB drives and external file transfers, but some users find workarounds.</span></label>
                    <label><input type="radio" name="data_q7" value="2" onchange="updateProgress('data')"><span>Advanced – DLP tools prevent unauthorized data transfers and block risky actions automatically.</span></label>
                    <label><input type="radio" name="data_q7" value="3" onchange="updateProgress('data')"><span>Optimal – AI-driven DLP dynamically detects abnormal data movements and stops leaks before they occur.</span></label>
                </div>

                <div class="summary-table">
                    <!-- Data Pillar -->
        <div class="pillar">
            <div class="pillar-header" onclick="toggleContent(this)">
                <span>Data</span>
                <span>Score: <span class="score">1.55</span></span>
            </div>
            <div class="pillar-content">
                <h3>Data Assessment</h3>
                <input type="text" class="search-box" placeholder="Search Data Subfunctional Areas..." onkeyup="searchTable(this, 'data-table')">
                <table id="data-table">
                    <tr>
                        <th>Subfunctional Area</th>
                        <th>Question</th>
                        <th>Score</th>
                        <th>Stage</th>
                        <th>Criteria</th>
                        <th>Gaps</th>
                        <th>Recommendations</th>
                    </tr>
                    <tr>
                        <td class="tooltip">Data Discovery<span class="tooltiptext">The process of identifying and cataloging data assets across various environments, ensuring comprehensive visibility into data locations and types.</span></td>
                        <td>How are data assets discovered?</td>
                        <td>1.0</td>
                        <td>Traditional</td>
                        <td>< 50% implementation of data governance practices.</td>
                        <td>Lack of comprehensive automated discovery across all environments.</td>
                        <td>Implement automated data discovery with Microsoft Purview and Collibra.</td>
                    </tr>
                    <!-- Add remaining Data subfunctional areas (28 more) similarly -->
                </table>
                <p>Total Data Score: <span class="score">45 (1.55)</span></p>
            </div>
        </div>
                </div>

                <div class="section-nav">
                    <button onclick="navigate('previous', 'data')">Previous</button>
                    <button onclick="navigate('next', 'data')">Next</button>
                </div>

        </div>

        </div>
    </section>

    <!-- Apps Section -->
    <section>
        <div class="container">

            <div id="apps" class="section">

                <div class="progress-bar">
                    <div class="progress-fill" id="progress-apps">
                        <span class="progress-percentage" id="percentage-apps">0%</span>
                    </div>
                </div>
                <h2>Zero Trust Application Maturity Assessment</h2>
                <div class="question">
                    <h3>1. How are secure coding practices enforced in your application development process?</h3>
                    <label><input type="radio" name="app_q1" value="0" onchange="updateProgress('apps')"><span>Traditional – Developers write code without formal security guidelines or reviews.</span></label>
                    <label><input type="radio" name="app_q1" value="1" onchange="updateProgress('apps')"><span>Initial – We have secure coding guidelines, but security testing is manual.</span></label>
                    <label><input type="radio" name="app_q1" value="2" onchange="updateProgress('apps')"><span>Advanced – Automated tools scan for vulnerabilities during development; secure coding is a standard practice.</span></label>
                    <label><input type="radio" name="app_q1" value="3" onchange="updateProgress('apps')"><span>Optimal – AI-driven tools continuously scan and provide real-time fixes to ensure secure coding practices.</span></label>
                </div>
                <div class="question">
                    <h3>2. How are vulnerabilities in applications identified and mitigated?</h3>
                    <label><input type="radio" name="app_q2" value="0" onchange="updateProgress('apps')"><span>Traditional – We only address vulnerabilities after an incident occurs.</span></label>
                    <label><input type="radio" name="app_q2" value="1" onchange="updateProgress('apps')"><span>Initial – We conduct periodic vulnerability scans, but remediation is manual.</span></label>
                    <label><input type="radio" name="app_q2" value="2" onchange="updateProgress('apps')"><span>Advanced – Automated security testing (SAST, DAST) is integrated into development and deployment.</span></label>
                    <label><input type="radio" name="app_q2" value="3" onchange="updateProgress('apps')"><span>Optimal – AI-driven tools continuously scan, predict, and mitigate vulnerabilities before they are exploited.</span></label>
                </div>
                <div class="question">
                    <h3>3. How is user authentication enforced for accessing applications?</h3>
                    <label><input type="radio" name="app_q3" value="0" onchange="updateProgress('apps')"><span>Traditional – Applications rely only on username and password authentication.</span></label>
                    <label><input type="radio" name="app_q3" value="1" onchange="updateProgress('apps')"><span>Initial – Multi-Factor Authentication (MFA) is optional and inconsistently used.</span></label>
                    <label><input type="radio" name="app_q3" value="2" onchange="updateProgress('apps')"><span>Advanced – MFA is required, and risk-based authentication is applied.</span></label>
                    <label><input type="radio" name="app_q3" value="3" onchange="updateProgress('apps')"><span>Optimal – AI continuously evaluates authentication risks and dynamically adjusts security requirements.</span></label>
                </div>
                <div class="question">
                    <h3>4. How are APIs secured through an API gateway?</h3>
                    <label><input type="radio" name="app_q4" value="0" onchange="updateProgress('apps')"><span>Traditional – APIs are publicly exposed without security controls.</span></label>
                    <label><input type="radio" name="app_q4" value="1" onchange="updateProgress('apps')"><span>Initial – Basic authentication is used, but no traffic filtering or threat detection exists.</span></label>
                    <label><input type="radio" name="app_q4" value="2" onchange="updateProgress('apps')"><span>Advanced – API gateways enforce authentication, rate limiting, and access controls.</span></label>
                    <label><input type="radio" name="app_q4" value="3" onchange="updateProgress('apps')"><span>Optimal – AI-driven API security dynamically adjusts protections based on real-time threat analysis.</span></label>
                </div>
                <div class="question">
                    <h3>5. How are applications audited for compliance with regulatory requirements?</h3>
                    <label><input type="radio" name="app_q5" value="0" onchange="updateProgress('apps')"><span>Traditional – Compliance is reviewed only when required by external audits.</span></label>
                    <label><input type="radio" name="app_q5" value="1" onchange="updateProgress('apps')"><span>Initial – Compliance audits are conducted manually and irregularly.</span></label>
                    <label><input type="radio" name="app_q5" value="2" onchange="updateProgress('apps')"><span>Advanced – Automated compliance monitoring ensures continuous adherence to regulations.</span></label>
                    <label><input type="radio" name="app_q5" value="3" onchange="updateProgress('apps')"><span>Optimal – AI-driven compliance dynamically updates policies based on regulatory changes.</span></label>
                </div>

                <div class="summary-table">
                     <!-- Application Pillar -->
        <div class="pillar">
            <div class="pillar-header" onclick="toggleContent(this)">
                <span>Application</span>
                <span>Score: <span class="score">2.48</span></span>
            </div>
            <div class="pillar-content">
                <h3>Application Assessment</h3>
                <input type="text" class="search-box" placeholder="Search Application Subfunctional Areas..." onkeyup="searchTable(this, 'application-table')">
                <table id="application-table">
                    <tr>
                        <th>Subfunctional Area</th>
                        <th>Question</th>
                        <th>Score</th>
                        <th>Stage</th>
                        <th>Criteria</th>
                        <th>Gaps</th>
                        <th>Recommendations</th>
                    </tr>
                    <tr>
                        <td class="tooltip">Secure Coding Practices<span class="tooltiptext">Techniques and guidelines applied during software development to prevent vulnerabilities, such as input validation and error handling.</span></td>
                        <td>How are secure coding practices enforced?</td>
                        <td>3.0</td>
                        <td>Advanced</td>
                        <td> 50% implementation of network security practices.</td>
                        <td>Focus on automation is needed for cloud-native apps.</td>
                        <td>Automate secure coding with Palo Alto Prisma Cloud in CI/CD pipelines.</td>
                    </tr>
                    <!-- Add remaining Application subfunctional areas (24 more) similarly -->
                </table>
                <p>Total Application Score: <span class="score">62 (2.48)</span></p>
            </div>
        </div>
                </div>

                <div class="section-nav">
                    <button onclick="navigate('previous', 'apps')">Previous</button>
                    <button onclick="navigate('next', 'apps')">Next</button>
                </div>

        </div>

        </div>
    </section>

    <!-- Network Section -->
    <section>
        <div class="container">

            <div id="network" class="section">

                <div class="progress-bar">
                    <div class="progress-fill" id="progress-network">
                        <span class="progress-percentage" id="percentage-network">0%</span>
                    </div>
                </div>
                <h2>Zero Trust Network Maturity Assessment</h2>
                <div class="question">
                    <h3>1. How is segmentation implemented to control and secure network traffic?</h3>
                    <label><input type="radio" name="network_q1" value="0" onchange="updateProgress('network')"><span>Traditional – All devices, users, and applications are on the same network. There is no segmentation.</span></label>
                    <label><input type="radio" name="network_q1" value="1" onchange="updateProgress('network')"><span>Initial – We separate networks (e.g., guest vs. corporate) but allow broad access between segments.</span></label>
                    <label><input type="radio" name="network_q1" value="2" onchange="updateProgress('network')"><span>Advanced – We use VLANs and firewalls to enforce network segmentation based on department or function.</span></label>
                    <label><input type="radio" name="network_q1" value="3" onchange="updateProgress('network')"><span>Optimal – Dynamic microsegmentation is enforced, isolating traffic based on user, device, and real-time risk levels.</span></label>
                </div>
                <div class="question">
                    <h3>2. How are network logs collected, correlated, and analyzed?</h3>
                    <label><input type="radio" name="network_q2" value="0" onchange="updateProgress('network')"><span>Traditional – We don’t collect or review logs unless a major incident occurs.</span></label>
                    <label><input type="radio" name="network_q2" value="1" onchange="updateProgress('network')"><span>Initial – We collect logs but review them manually and only during audits.</span></label>
                    <label><input type="radio" name="network_q2" value="2" onchange="updateProgress('network')"><span>Advanced – Logs are continuously collected, correlated, and analyzed in real-time for anomalies.</span></label>
                    <label><input type="radio" name="network_q2" value="3" onchange="updateProgress('network')"><span>Optimal – AI-driven analytics predict and prevent security threats based on log patterns.</span></label>
                </div>
                <div class="question">
                    <h3>3. How does your organization detect and respond to network threats?</h3>
                    <label><input type="radio" name="network_q3" value="0" onchange="updateProgress('network')"><span>Traditional – We rely on basic antivirus software installed on devices.</span></label>
                    <label><input type="radio" name="network_q3" value="1" onchange="updateProgress('network')"><span>Initial – We have firewalls and IDS/IPS but rely on manual intervention for threat response.</span></label>
                    <label><input type="radio" name="network_q3" value="2" onchange="updateProgress('network')"><span>Advanced – Our security tools detect and automatically mitigate threats in real time.</span></label>
                    <label><input type="radio" name="network_q3" value="3" onchange="updateProgress('network')"><span>Optimal – AI-driven security predicts, blocks, and automatically isolates threats before they spread.</span></label>
                </div>
                <div class="question">
                    <h3>4. How does your organization protect against intrusions, DDoS attacks, and encrypted threats?</h3>
                    <label><input type="radio" name="network_q4" value="0" onchange="updateProgress('network')"><span>Traditional – We have a basic firewall but no intrusion prevention or DDoS mitigation.</span></label>
                    <label><input type="radio" name="network_q4" value="1" onchange="updateProgress('network')"><span>Initial – We use an IPS and some basic DDoS protection but require manual intervention.</span></label>
                    <label><input type="radio" name="network_q4" value="2" onchange="updateProgress('network')"><span>Advanced – Our security tools actively block intrusions, DDoS attacks, and inspect encrypted traffic.</span></label>
                    <label><input type="radio" name="network_q4" value="3" onchange="updateProgress('network')"><span>Optimal – AI-driven security adapts dynamically to new attack methods and mitigates threats autonomously.</span></label>
                </div>
                <div class="question">
                    <h3>5. How do you enforce access control across users and devices?</h3>
                    <label><input type="radio" name="network_q5" value="0" onchange="updateProgress('network')"><span>Traditional – Anyone who knows the Wi-Fi password can connect, even personal devices.</span></label>
                    <label><input type="radio" name="network_q5" value="1" onchange="updateProgress('network')"><span>Initial – We use passwords and VPNs, but users can access corporate systems from any device.</span></label>
                    <label><input type="radio" name="network_q5" value="2" onchange="updateProgress('network')"><span>Advanced – We enforce Multi-Factor Authentication (MFA) and device trust policies before granting access.</span></label>
                    <label><input type="radio" name="network_q5" value="3" onchange="updateProgress('network')"><span>Optimal – Access is dynamically adjusted based on user behavior, risk, and device health.</span></label>
                </div>
                <div class="question">
                    <h3>6. How does your organization handle real-time monitoring and automated security responses?</h3>
                    <label><input type="radio" name="network_q6" value="0" onchange="updateProgress('network')"><span>Traditional – We check security logs manually, usually after a problem occurs.</span></label>
                    <label><input type="radio" name="network_q6" value="1" onchange="updateProgress('network')"><span>Initial – We have alerts set up, but responses are manual.</span></label>
                    <label><input type="radio" name="network_q6" value="2" onchange="updateProgress('network')"><span>Advanced – We use automated threat detection and response tools to block suspicious activity.</span></label>
                    <label><input type="radio" name="network_q6" value="3" onchange="updateProgress('network')"><span>Optimal – AI-driven security continuously monitors and adapts to emerging threats with no human intervention required.</span></label>
                </div>

                 <!-- Network Pillar -->
       <div class="summary-table">
        <div class="pillar">
            <div class="pillar-header" onclick="toggleContent(this)">
                <span>Network</span>
                <span>Score: <span class="score">2.5</span></span>
            </div>
            <div class="pillar-content">
                <h3>Network Assessment</h3>
                <input type="text" class="search-box" placeholder="Search Network Subfunctional Areas..." onkeyup="searchTable(this, 'network-table')">
                <table id="network-table">
                    <tr>
                        <th>Subfunctional Area</th>
                        <th>Question</th>
                        <th>Score</th>
                        <th>Stage</th>
                        <th>Criteria</th>
                        <th>Gaps</th>
                        <th>Recommendations</th>
                    </tr>
                    <tr>
                        <td class="tooltip">Network Segmentation<span class="tooltiptext">The division of a network into smaller subnetworks or segments to contain potential breaches and limit access to sensitive data.</span></td>
                        <td>How is the network segmented?</td>
                        <td>2.0</td>
                        <td>Initial</td>
                        <td>> 50% implementation of basic network security practices.</td>
                        <td>Static segmentation lacks dynamic updates based on risk.</td>
                        <td>Implement dynamic segmentation with Palo Alto NGFW.</td>
                    </tr>
                    <!-- Add remaining Network subfunctional areas (23 more) similarly -->
                </table>
                <p>Total Network Score: <span class="score">60 (2.5)</span></p>
            </div>
        </div>
       </div>

                <div class="section-nav">
                    <button onclick="navigate('previous', 'network')">Previous</button>
                    <button onclick="navigate('next', 'network')" disabled>Next</button>
                </div>

        </div>

        </div>
    </section>

    <div id="appreciation">Thank you for participating in the Zero Trust Maturity Assessment!</div>
    <button id="calculate" onclick="calculateScores()">Calculate Maturity Scores</button>
    <div id="result"></div>

    <!-- Popup and Overlay -->
    <div id="overlay" class="overlay"></div>
    <div id="popup" class="popup">
        <div class="sub-come-out">
        <p>Please answer all questions before submitting</p>
        <button onclick="closePopup()">OK</button>
    </div>
    </div>

    <main></main>

    <footer>
        <div class="container">
            <div class="copyright">
                <p>Zero Trust 2025 © copyright</p>
            </div>
        </div>
    </footer>
    <script>
        let scrollTop = document.querySelector(".backto-top");

window.addEventListener("scroll", () => {
    scrollTop.classList.toggle("scroll-active", window.scrollY >= 400);
}) 
    </script>
    <!-- <script src="js/assessment.js"></script> -->
     <script>
        /* menu */
let menu = document.querySelector(".menu-icon");
let navbar = document.querySelector(".navbar");

menu.onclick = () =>{
   navbar.classList.toggle("open-menu");
   menu.classList.toggle("move");
};

window.onscroll = () =>{
   navbar.classList.remove("open-menu");
   menu.classList.remove("move");
}

/* Background change on scroll */
let header = document.querySelector("header");

window.addEventListener("scroll", () => {
    header.classList.toggle("header-active", window.scrollY > 0);
}) 


// Questionaire
const sectionOrder = ['identities', 'endpoint', 'infrastructure', 'data', 'apps', 'network'];
        const sectionQuestions = {
            'identities': 8,
            'endpoint': 10,
            'infrastructure': 8,
            'data': 7,
            'apps': 5,
            'network': 6
        };

        function showSection(sectionId) {
            document.querySelectorAll('.section').forEach(section => {
                section.classList.remove('active');
            });
            document.getElementById(sectionId).classList.add('active');

            document.getElementById('appreciation').style.display = 'none';

            document.querySelectorAll('.header button').forEach(button => {
                button.classList.remove('active');
            });
            const buttonId = `btn-${sectionId}`;
            const button = document.getElementById(buttonId);
            if (button) {
                button.classList.add('active');
            }

            updateProgress(sectionId);
        }

        function navigate(direction, currentSectionId) {
            const currentIndex = sectionOrder.indexOf(currentSectionId);
            let nextIndex = direction === 'previous' ? currentIndex - 1 : currentIndex + 1;
            if (nextIndex >= 0 && nextIndex < sectionOrder.length) {
                showSection(sectionOrder[nextIndex]);
            }
        }

        function updateProgress(sectionId) {
            const totalQuestions = sectionQuestions[sectionId];
            let answeredQuestions = 0;

            for (let i = 1; i <= totalQuestions; i++) {
                const radios = document.getElementsByName(`${sectionId === 'identities' ? 'identity' : sectionId === 'endpoint' ? 'device' : sectionId === 'infrastructure' ? 'infra' : sectionId === 'apps' ? 'app' : sectionId === 'data' ? 'data' : 'network'}_q${i}`);
                if (Array.from(radios).some(radio => radio.checked)) {
                    answeredQuestions++;
                }
            }

            const progressPercentage = (answeredQuestions / totalQuestions) * 100;
            const progressFill = document.getElementById(`progress-${sectionId}`);
            const percentageText = document.getElementById(`percentage-${sectionId}`);
            progressFill.style.width = `${progressPercentage}%`;
            percentageText.textContent = `${Math.round(progressPercentage)}%`;
        }

        function showPopup() {
            document.getElementById('popup').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('popup').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }

        // function calculateScores() {
        //     const sections = {
        //         identity: { questions: 8, maxScore: 24 },
        //         device: { questions: 10, maxScore: 30 },
        //         infra: { questions: 8, maxScore: 24 },
        //         data: { questions: 7, maxScore: 21 },
        //         app: { questions: 5, maxScore: 15 },
        //         network: { questions: 6, maxScore: 18 }
        //     };

        //     let unanswered = false;
        //     for (let section in sections) {
        //         const totalQuestions = sections[section].questions;
        //         for (let i = 1; i <= totalQuestions; i++) {
        //             const radios = document.getElementsByName(`${section}_q${i}`);
        //             const isAnswered = Array.from(radios).some(radio => radio.checked);
        //             if (!isAnswered) {
        //                 unanswered = true;
        //                 break;
        //             }
        //         }
        //         if (unanswered) break;
        //     }

        //     if (unanswered) {
        //         showPopup();
        //         return;
        //     }

        //     document.getElementById('appreciation').style.display = 'block';

        //     let resultHTML = "";
        //     for (let section in sections) {
        //         let score = 0;
        //         const totalQuestions = sections[section].questions;

        //         for (let i = 1; i <= totalQuestions; i++) {
        //             const radios = document.getElementsByName(`${section}_q${i}`);
        //             const selected = Array.from(radios).find(radio => radio.checked);
        //             score += parseInt(selected.value);
        //         }

        //         let maturityLevel = "";
        //         let color = "";
        //         const advancedOptimalCount = score >= 2 ? Math.floor(score / 2) : 0;

        //         if (advancedOptimalCount <= 4) {
        //             maturityLevel = "Traditional (High Risk)";
        //             color = "#f00";
        //         } else if (advancedOptimalCount <= 8) {
        //             maturityLevel = "Initial (Basic Security)";
        //             color = "#ff0";
        //         } else if (advancedOptimalCount <= 11) {
        //             maturityLevel = "Advanced (Mature Zero Trust)";
        //             color = "#0f0";
        //         } else {
        //             maturityLevel = "Optimal (AI-Driven)";
        //             color = "#00f";
        //         }

        //         resultHTML += `<p>${section.charAt(0).toUpperCase() + section.slice(1)} Maturity: <span style="color:${color}">${maturityLevel}</span> (Score: ${score}/${sections[section].maxScore})</p>`;
        //     }

        //     document.getElementById("result").innerHTML = resultHTML;
        // }
        function calculateScores() {
    const sections = {
        identity: { questions: 8, maxScore: 24 },
        device: { questions: 10, maxScore: 30 },
        infra: { questions: 8, maxScore: 24 },
        data: { questions: 7, maxScore: 21 },
        app: { questions: 5, maxScore: 15 },
        network: { questions: 6, maxScore: 18 }
    };

    let unanswered = false;
    for (let section in sections) {
        const totalQuestions = sections[section].questions;
        for (let i = 1; i <= totalQuestions; i++) {
            const radios = document.getElementsByName(`${section}_q${i}`);
            const isAnswered = Array.from(radios).some(radio => radio.checked);
            if (!isAnswered) {
                unanswered = true;
                break;
            }
        }
        if (unanswered) break;
    }

    if (unanswered) {
        showPopup();
        return;
    }

    document.getElementById('appreciation').style.display = 'block';

    let resultHTML = "";
    let scores = {};

    for (let section in sections) {
        let score = 0;
        const totalQuestions = sections[section].questions;

        for (let i = 1; i <= totalQuestions; i++) {
            const radios = document.getElementsByName(`${section}_q${i}`);
            const selected = Array.from(radios).find(radio => radio.checked);
            score += parseInt(selected.value);
        }

        scores[section] = score;

        let maturityLevel = "";
        let color = "";
        const advancedOptimalCount = score >= 2 ? Math.floor(score / 2) : 0;

        if (advancedOptimalCount <= 4) {
            maturityLevel = "Traditional (High Risk)";
            color = "#f00";
        } else if (advancedOptimalCount <= 8) {
            maturityLevel = "Initial (Basic Security)";
            color = "#ff0";
        } else if (advancedOptimalCount <= 11) {
            maturityLevel = "Advanced (Mature Zero Trust)";
            color = "#0f0";
        } else {
            maturityLevel = "Optimal (AI-Driven)";
            color = "#00f";
        }

        resultHTML += `<p>${section.charAt(0).toUpperCase() + section.slice(1)} Maturity: <span style="color:${color}">${maturityLevel}</span> (Score: ${score}/${sections[section].maxScore})</p>`;
    }

    document.getElementById("result").innerHTML = resultHTML;

    // Send scores to the PHP backend
    fetch('submit_survey.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(scores),
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            console.log('Survey results saved successfully');
            alert('Survey results have been submitted successfully!');
        } else {
            console.error('Error:', data.message);
            alert('Failed to submit survey results: ' + data.message);
        }
    })
    .catch(error => {
        console.error('Fetch error:', error);
        alert('An error occurred while submitting the survey.');
    });
}
        showSection('identities');


//         function checkSession() {
//     fetch('process.php', {
//         method: 'POST',
//         headers: { 'Content-Type': 'application/json' }
//     })
//     .then(response => response.json())
//     .then(data => {
//         if (data.status === 'success') {
//             // Session exists, fetch user ID from registration response or assume registered
//             fetch('register.php', { method: 'GET' }) // Dummy call to get user_id if needed
//             .then(response => response.json())
//             .then(regData => {
//                 if (regData.status === 'success') {
//                     userId = regData.user_id;
//                     alert(userId);
//                     document.getElementById('user-status').innerText = `Registered as User ID: ${userId}`;
//                     document.getElementById('calculate').style.display = 'block';
//                     fetchUserResults();
//                 }
//             });
//         }
//     })
//     .catch(() => {
//         document.getElementById('user-status').innerText = 'Not registered';
//     });
// }


        // summary table
function toggleContent(header) {
    const content = header.nextElementSibling;
    content.classList.toggle('active');
}

function searchTable(input, tableId) {
    const filter = input.value.toLowerCase();
    const table = document.getElementById(tableId);
    const rows = table.getElementsByTagName('tr');

    for (let i = 1; i < rows.length; i++) { // Skip header row
        const cells = rows[i].getElementsByTagName('td');
        let match = false;
        for (let j = 0; j < cells.length; j++) {
            if (cells[j].textContent.toLowerCase().includes(filter)) {
                match = true;
                break;
            }
        }
        rows[i].style.display = match ? '' : 'none';
    }
}
     </script>

   
</body>
</html>
