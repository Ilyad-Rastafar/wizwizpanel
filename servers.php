<?php
include 'includ/header.php';
?>
<?php
$sql_admins = "SELECT * FROM admins";

$stmt = $conn->prepare($sql_admins);
$stmt->execute();
$result_admins = $stmt->get_result();
$stmt->close();

$row_admins = $result_admins->fetch_assoc();
$lang_file = 'langs/lang_' . $row_admins['lang'] . '.php';
if (file_exists($lang_file)) {
    include($lang_file);
}
?>
<ul class="mt-4">
    <li class="relative px-6 py-3">
        <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="index.php"
        >
            <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
            >
                <path
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                ></path>
            </svg>
            <span class="ml-4"><?php echo $_LANG['Dashboard'] ?></span>
        </a>
    </li>
</ul>
<ul>
    <li class="relative px-6 py-3">
        <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="orders.php"
        >
            <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
            >
                <path
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                ></path>
            </svg>
            <span class="ml-4"><?php echo $_LANG['Orders'] ?></span>
        </a>
    </li>
    <li class="relative px-6 py-3">
              <span
                      class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                      aria-hidden="true"
              ></span>
        <a
                class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                href="servers.php"
        >
            <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
            >
                <path
                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                ></path>
            </svg>
            <span class="ml-4"><?php echo $_LANG['Servers'] ?></span>
        </a>
    </li>
    <li class="relative px-6 py-3">
        <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="category.php"
        >
            <svg stroke-linejoin="round" fill="gray" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                 id="Outline" viewBox="0 0 24 24" width="20" height="20">
                <path d="M7,0H4A4,4,0,0,0,0,4V7a4,4,0,0,0,4,4H7a4,4,0,0,0,4-4V4A4,4,0,0,0,7,0ZM9,7A2,2,0,0,1,7,9H4A2,2,0,0,1,2,7V4A2,2,0,0,1,4,2H7A2,2,0,0,1,9,4Z"/>
                <path d="M7,13H4a4,4,0,0,0-4,4v3a4,4,0,0,0,4,4H7a4,4,0,0,0,4-4V17A4,4,0,0,0,7,13Zm2,7a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V17a2,2,0,0,1,2-2H7a2,2,0,0,1,2,2Z"/>
                <path d="M20,13H17a4,4,0,0,0-4,4v3a4,4,0,0,0,4,4h3a4,4,0,0,0,4-4V17A4,4,0,0,0,20,13Zm2,7a2,2,0,0,1-2,2H17a2,2,0,0,1-2-2V17a2,2,0,0,1,2-2h3a2,2,0,0,1,2,2Z"/>
                <path d="M14,7h3v3a1,1,0,0,0,2,0V7h3a1,1,0,0,0,0-2H19V2a1,1,0,0,0-2,0V5H14a1,1,0,0,0,0,2Z"/>
            </svg>

            <span class="ml-4"><?php echo $_LANG['category'] ?></span>
        </a>
    </li>
    <li class="relative px-6 py-3">
        <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="singleplans.php"
        >
            <svg stroke-linejoin="round" fill="gray" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                 id="Outline" viewBox="0 0 24 24" width="20" height="20">
                <path d="M19,3H12.472a1.019,1.019,0,0,1-.447-.1L8.869,1.316A3.014,3.014,0,0,0,7.528,1H5A5.006,5.006,0,0,0,0,6V18a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V8A5.006,5.006,0,0,0,19,3ZM5,3H7.528a1.019,1.019,0,0,1,.447.1l3.156,1.579A3.014,3.014,0,0,0,12.472,5H19a3,3,0,0,1,2.779,1.882L2,6.994V6A3,3,0,0,1,5,3ZM19,21H5a3,3,0,0,1-3-3V8.994l20-.113V18A3,3,0,0,1,19,21Z"/>
            </svg>

            <span class="ml-4"><?php echo $_LANG['SinglePlans'] ?></span>
        </a>
    </li>
    <li class="relative px-6 py-3">
        <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="multipleplans.php"
        >
            <svg stroke-linejoin="round" fill="gray" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                 id="Outline" viewBox="0 0 24 24" width="20" height="20">
                <path d="M19,3H12.472a1.019,1.019,0,0,1-.447-.1L8.869,1.316A3.014,3.014,0,0,0,7.528,1H5A5.006,5.006,0,0,0,0,6V18a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V8A5.006,5.006,0,0,0,19,3ZM5,3H7.528a1.019,1.019,0,0,1,.447.1l3.156,1.579A3.014,3.014,0,0,0,12.472,5H19a3,3,0,0,1,2.779,1.882L2,6.994V6A3,3,0,0,1,5,3ZM19,21H5a3,3,0,0,1-3-3V8.994l20-.113V18A3,3,0,0,1,19,21Z"/>
            </svg>

            <span class="ml-4"><?php echo $_LANG['MultiplePlans'] ?></span>
        </a>
    </li>
    <li class="relative px-6 py-3">
        <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="pays.php">
            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" fill="gray" data-name="Layer 1"
                 viewBox="0 0 24 24" width="21" height="21">
                <path d="M12,9C17.934,8.844,17.933,.155,12,0c-5.934,.156-5.933,8.845,0,9Zm0-7c3.286,.059,3.285,4.942,0,5-3.285-.059-3.285-4.942,0-5Zm10.204,9.162c-1.143-.953-2.64-1.347-4.099-1.081l-3.821,.695c-.913,.166-1.707,.634-2.284,1.289-.578-.655-1.371-1.123-2.285-1.289l-3.821-.695c-1.461-.264-2.956,.128-4.098,1.081-1.142,.953-1.796,2.352-1.796,3.839v2.793c0,2.417,1.727,4.486,4.106,4.919l6.284,1.143c1.068,.194,2.151,.194,3.219,0l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.793c0-1.487-.654-2.886-1.796-3.838Zm-11.204,10.767c-.084-.012-.168-.026-.252-.041l-6.284-1.143c-1.428-.26-2.464-1.501-2.464-2.952v-2.793c0-.892,.393-1.731,1.078-2.303,.685-.573,1.59-.808,2.459-.648l3.821,.695c.952,.173,1.642,1,1.642,1.968v7.217Zm11-4.135c0,1.451-1.036,2.692-2.463,2.952l-6.285,1.143c-.084,.015-.168,.029-.252,.041v-7.217c0-.967,.69-1.795,1.642-1.968l3.821-.695c.875-.16,1.774,.077,2.46,.648,.685,.572,1.077,1.411,1.077,2.303v2.793Z"/>
            </svg>

            <span class="ml-4"><?php echo $_LANG['Pays'] ?></span>
        </a>
    </li>
    <li class="relative px-6 py-3">
        <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="add-volume.php">
            <svg fill="gray" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                 id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                 xml:space="preserve" width="21" height="21"><g>
                    <path d="M480,224H288V32c0-17.673-14.327-32-32-32s-32,14.327-32,32v192H32c-17.673,0-32,14.327-32,32s14.327,32,32,32h192v192   c0,17.673,14.327,32,32,32s32-14.327,32-32V288h192c17.673,0,32-14.327,32-32S497.673,224,480,224z"/>
                </g></svg>


            <span class="ml-4"><?php echo $_LANG['AddVolume'] ?></span>
        </a>
    </li>
    <li class="relative px-6 py-3">
        <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="volume.php">
            <svg xmlns="http://www.w3.org/2000/svg" id="Outline" fill="gray" viewBox="0 0 24 24" width="21" height="21">
                <path d="M22.485,10.975,12,17.267,1.515,10.975A1,1,0,1,0,.486,12.69l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z"/>
                <path d="M22.485,15.543,12,21.834,1.515,15.543A1,1,0,1,0,.486,17.258l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z"/>
                <path d="M12,14.773a2.976,2.976,0,0,1-1.531-.425L.485,8.357a1,1,0,0,1,0-1.714L10.469.652a2.973,2.973,0,0,1,3.062,0l9.984,5.991a1,1,0,0,1,0,1.714l-9.984,5.991A2.976,2.976,0,0,1,12,14.773ZM2.944,7.5,11.5,12.633a.974.974,0,0,0,1,0L21.056,7.5,12.5,2.367a.974.974,0,0,0-1,0h0Z"/>
            </svg>


            <span class="ml-4"><?php echo $_LANG['Volumeorders'] ?></span>
        </a>
    </li>
    <li class="relative px-6 py-3">
        <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="discount.php">
            <svg id="Layer_1" height="21" viewBox="0 0 24 24" fill="gray" width="21" xmlns="http://www.w3.org/2000/svg"
                 data-name="Layer 1">
                <path d="m24 12a1 1 0 0 1 -2 0 10.011 10.011 0 0 0 -10-10 1 1 0 0 1 0-2 12.013 12.013 0 0 1 12 12zm-8 1a1 1 0 0 0 0-2h-2.277a2 2 0 0 0 -.723-.723v-3.277a1 1 0 0 0 -2 0v3.277a1.994 1.994 0 1 0 2.723 2.723zm-14.173-6.216a1 1 0 1 0 1 1 1 1 0 0 0 -1-1zm.173 5.216a1 1 0 1 0 -1 1 1 1 0 0 0 1-1zm10 10a1 1 0 1 0 1 1 1 1 0 0 0 -1-1zm-7.779-18.793a1 1 0 1 0 1 1 1 1 0 0 0 -1-1zm3.558-2.366a1 1 0 1 0 1 1 1 1 0 0 0 -1-1zm-5.952 14.375a1 1 0 1 0 1 1 1 1 0 0 0 -1-1zm2.394 3.577a1 1 0 1 0 1 1 1 1 0 0 0 -1-1zm3.558 2.366a1 1 0 1 0 1 1 1 1 0 0 0 -1-1zm14.394-5.943a1 1 0 1 0 1 1 1 1 0 0 0 -1-1zm-2.394 3.577a1 1 0 1 0 1 1 1 1 0 0 0 -1-1zm-3.558 2.366a1 1 0 1 0 1 1 1 1 0 0 0 -1-1z"/>
            </svg>

            <span class="ml-4"><?php echo $_LANG['Discountcode'] ?></span>
        </a>
    </li>
    <li class="relative px-6 py-3">
        <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="rahgozar.php">
            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" fill="gray" viewBox="0 0 24 24"
                 width="21" height="21">
                <path d="M23,12.5A1.5,1.5,0,0,1,21.5,14H18.63a3.516,3.516,0,0,1-3-1.7l-1.225-2.034-1.79,4.363,2.614,1.487A3.507,3.507,0,0,1,17,19.163V22.5a1.5,1.5,0,0,1-3,0V19.163a.5.5,0,0,0-.252-.434L9.666,16.406a3.511,3.511,0,0,1-1.427-4.322L9.5,9H7.736a.5.5,0,0,0-.447.277L5.842,12.171a1.5,1.5,0,0,1-2.684-1.342L4.605,7.935A3.483,3.483,0,0,1,7.736,6H13.36a3.516,3.516,0,0,1,3,1.7L18.2,10.758A.5.5,0,0,0,18.63,11H21.5A1.5,1.5,0,0,1,23,12.5ZM8.057,16.85a1.5,1.5,0,0,0-1.95.836A.5.5,0,0,1,5.643,18H3.5a1.5,1.5,0,0,0,0,3H5.643a3.484,3.484,0,0,0,3.25-2.2A1.5,1.5,0,0,0,8.057,16.85ZM14.5,5A2.5,2.5,0,1,0,12,2.5,2.5,2.5,0,0,0,14.5,5Z"/>
            </svg>


            <span class="ml-4"><?php echo $_LANG['Rahgozar'] ?></span>
        </a>
    </li>
    <li class="relative px-6 py-3">
        <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="gift.php">
            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" fill="gray" data-name="Layer 1" viewBox="0 0 24 24"
                 width="21" height="21">
                <path d="M21,7H17.866A6.547,6.547,0,0,0,20,2H18c0,2.881-1.971,4.307-4.152,4.8A9.239,9.239,0,0,0,15,3,3,3,0,0,0,9,3a9.239,9.239,0,0,0,1.152,3.8C7.971,6.307,6,4.881,6,2H4A6.547,6.547,0,0,0,6.134,7H3a3,3,0,0,0-3,3v4H2V24H22V14h2V10A3,3,0,0,0,21,7ZM12,2a1,1,0,0,1,1,1,7.71,7.71,0,0,1-1,3.013A7.71,7.71,0,0,1,11,3,1,1,0,0,1,12,2ZM2,10A1,1,0,0,1,3,9h8v3H2Zm2,4h7v8H4Zm16,8H13V14h7Zm2-10H13V9h8a1,1,0,0,1,1,1Z"/>
            </svg>


            <span class="ml-4"><?php echo $_LANG['Gift'] ?></span>
        </a>
    </li>
    <li class="relative px-6 py-3">
        <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="software.php">
            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" fill="gray" data-name="Layer 1" viewBox="0 0 24 24"
                 width="21" height="21">
                <path d="M11.24,24a2.262,2.262,0,0,1-.948-.212,2.18,2.18,0,0,1-1.2-2.622L10.653,16H6.975A3,3,0,0,1,4.1,12.131l3.024-10A2.983,2.983,0,0,1,10,0h3.693a2.6,2.6,0,0,1,2.433,3.511L14.443,8H17a3,3,0,0,1,2.483,4.684l-6.4,10.3A2.2,2.2,0,0,1,11.24,24ZM10.3.1,1,0,0,0-.958.71l-3.024,10A1,1,0,0,0,6.975,14H12a1,1,0,0,1,.957,1.29L11.01,21.732a.183.183,0,0,0,.121.241A.188.188,0,0,0,11.4,21.9l6.4-10.3a1,1,0,0,0,.078-1.063A.979.979,0,0,0,17,10H13a1,1,0,0,1-.937-1.351l2.19-5.84A.6.6,0,0,0,13.693,2Z"/>
            </svg>
            <span class="ml-4"><?php echo $_LANG['Software'] ?></span>
        </a>
    </li>
    <li class="relative px-6 py-3">
        <a
            class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
            href="wizwizbackup.php">
            <svg xmlns="http://www.w3.org/2000/svg" fill="gray" id="Outline" viewBox="0 0 24 24" width="21" height="21"><path d="M18.4,7.379a1.128,1.128,0,0,1-.769-.754h0a8,8,0,1,0-15.1,5.237A1.046,1.046,0,0,1,2.223,13.1,5.5,5.5,0,0,0,.057,18.3,5.622,5.622,0,0,0,5.683,23H11a1,1,0,0,0,1-1h0a1,1,0,0,0-1-1H5.683a3.614,3.614,0,0,1-3.646-2.981,3.456,3.456,0,0,1,1.376-3.313A3.021,3.021,0,0,0,4.4,11.141a6.113,6.113,0,0,1-.073-4.126A5.956,5.956,0,0,1,9.215,3.05,6.109,6.109,0,0,1,9.987,3a5.984,5.984,0,0,1,5.756,4.28,2.977,2.977,0,0,0,2.01,1.99,5.934,5.934,0,0,1,.778,11.09.976.976,0,0,0-.531.888h0a.988.988,0,0,0,1.388.915c4.134-1.987,6.38-7.214,2.88-12.264A6.935,6.935,0,0,0,18.4,7.379Z"/><path d="M18.707,16.707a1,1,0,0,0,0-1.414l-1.586-1.586a3,3,0,0,0-4.242,0l-1.586,1.586a1,1,0,0,0,1.414,1.414L14,15.414V23a1,1,0,0,0,2,0V15.414l1.293,1.293a1,1,0,0,0,1.414,0Z"/></svg>
            <span class="ml-4"><?php echo $_LANG['Backup'] ?></span>
        </a>
    </li>
    <li class="relative px-6 py-3">
        <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="settings.php">
            <svg xmlns="http://www.w3.org/2000/svg" fill="gray" id="Outline" viewBox="0 0 24 24" width="21"
                 height="21">
                <path d="M12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z"/>
                <path d="M21.294,13.9l-.444-.256a9.1,9.1,0,0,0,0-3.29l.444-.256a3,3,0,1,0-3-5.2l-.445.257A8.977,8.977,0,0,0,15,3.513V3A3,3,0,0,0,9,3v.513A8.977,8.977,0,0,0,6.152,5.159L5.705,4.9a3,3,0,0,0-3,5.2l.444.256a9.1,9.1,0,0,0,0,3.29l-.444.256a3,3,0,1,0,3,5.2l.445-.257A8.977,8.977,0,0,0,9,20.487V21a3,3,0,0,0,6,0v-.513a8.977,8.977,0,0,0,2.848-1.646l.447.258a3,3,0,0,0,3-5.2Zm-2.548-3.776a7.048,7.048,0,0,1,0,3.75,1,1,0,0,0,.464,1.133l1.084.626a1,1,0,0,1-1,1.733l-1.086-.628a1,1,0,0,0-1.215.165,6.984,6.984,0,0,1-3.243,1.875,1,1,0,0,0-.751.969V21a1,1,0,0,1-2,0V19.748a1,1,0,0,0-.751-.969A6.984,6.984,0,0,1,7.006,16.9a1,1,0,0,0-1.215-.165l-1.084.627a1,1,0,1,1-1-1.732l1.084-.626a1,1,0,0,0,.464-1.133,7.048,7.048,0,0,1,0-3.75A1,1,0,0,0,4.79,8.992L3.706,8.366a1,1,0,0,1,1-1.733l1.086.628A1,1,0,0,0,7.006,7.1a6.984,6.984,0,0,1,3.243-1.875A1,1,0,0,0,11,4.252V3a1,1,0,0,1,2,0V4.252a1,1,0,0,0,.751.969A6.984,6.984,0,0,1,16.994,7.1a1,1,0,0,0,1.215.165l1.084-.627a1,1,0,1,1,1,1.732l-1.084.626A1,1,0,0,0,18.746,10.125Z"/>
            </svg>

            <span class="ml-4"><?php echo $_LANG['Settings'] ?></span>
        </a>
    </li>
</ul>
<div class="px-6 my-2 mt-4">
    <a href="https://t.me/wizwizch" target="_blank">
        <button
                class="flex items-center shadow-xl justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-500 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue"
        >
            Telegram wizwiz
            <span class="ml-2" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                       fill="#fff" width="15" height="15"><g id="_01_align_center"
                                                                                             data-name="01 align center"><path
                                d="M1.444,6.669a2,2,0,0,0-.865,3.337l3.412,3.408V20h6.593l3.435,3.43a1.987,1.987,0,0,0,1.408.588,2.034,2.034,0,0,0,.51-.066,1.978,1.978,0,0,0,1.42-1.379L23.991.021ZM2,8.592l17.028-5.02L5.993,16.586v-4Zm13.44,13.424L11.413,18h-4L20.446,4.978Z"/></g></svg>
</span>
        </button>
    </a>
</div>
<div class="px-6 my-2">
    <a href="https://github.com/wizwizdev/wizwizxui-timebot" target="_blank">
        <button
                class="flex items-center shadow-xl justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-gray-500 border border-transparent rounded-lg active:bg-gray-600 hover:bg-gray-700 focus:outline-none focus:shadow-outline-blue">
            Github
            <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve" width="15" height="15"><g>
                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M12,0.296c-6.627,0-12,5.372-12,12c0,5.302,3.438,9.8,8.206,11.387   c0.6,0.111,0.82-0.26,0.82-0.577c0-0.286-0.011-1.231-0.016-2.234c-3.338,0.726-4.043-1.416-4.043-1.416   C4.421,18.069,3.635,17.7,3.635,17.7c-1.089-0.745,0.082-0.729,0.082-0.729c1.205,0.085,1.839,1.237,1.839,1.237   c1.07,1.834,2.807,1.304,3.492,0.997C9.156,18.429,9.467,17.9,9.81,17.6c-2.665-0.303-5.467-1.332-5.467-5.93   c0-1.31,0.469-2.381,1.237-3.221C5.455,8.146,5.044,6.926,5.696,5.273c0,0,1.008-0.322,3.301,1.23   C9.954,6.237,10.98,6.104,12,6.099c1.02,0.005,2.047,0.138,3.006,0.404c2.29-1.553,3.297-1.23,3.297-1.23   c0.653,1.653,0.242,2.873,0.118,3.176c0.769,0.84,1.235,1.911,1.235,3.221c0,4.609-2.807,5.624-5.479,5.921   c0.43,0.372,0.814,1.103,0.814,2.222c0,1.606-0.014,2.898-0.014,3.293c0,0.319,0.216,0.694,0.824,0.576   c4.766-1.589,8.2-6.085,8.2-11.385C24,5.669,18.627,0.296,12,0.296z"/>
                    <path d="M4.545,17.526c-0.026,0.06-0.12,0.078-0.206,0.037c-0.087-0.039-0.136-0.121-0.108-0.18   c0.026-0.061,0.12-0.078,0.207-0.037C4.525,17.384,4.575,17.466,4.545,17.526L4.545,17.526z"/>
                    <path d="M5.031,18.068c-0.057,0.053-0.169,0.028-0.245-0.055c-0.079-0.084-0.093-0.196-0.035-0.249   c0.059-0.053,0.167-0.028,0.246,0.056C5.076,17.903,5.091,18.014,5.031,18.068L5.031,18.068z"/>
                    <path d="M5.504,18.759c-0.074,0.051-0.194,0.003-0.268-0.103c-0.074-0.107-0.074-0.235,0.002-0.286   c0.074-0.051,0.193-0.005,0.268,0.101C5.579,18.579,5.579,18.707,5.504,18.759L5.504,18.759z"/>
                    <path d="M6.152,19.427c-0.066,0.073-0.206,0.053-0.308-0.046c-0.105-0.097-0.134-0.234-0.068-0.307   c0.067-0.073,0.208-0.052,0.311,0.046C6.191,19.217,6.222,19.355,6.152,19.427L6.152,19.427z"/>
                    <path d="M7.047,19.814c-0.029,0.094-0.164,0.137-0.3,0.097C6.611,19.87,6.522,19.76,6.55,19.665   c0.028-0.095,0.164-0.139,0.301-0.096C6.986,19.609,7.075,19.719,7.047,19.814L7.047,19.814z"/>
                    <path d="M8.029,19.886c0.003,0.099-0.112,0.181-0.255,0.183c-0.143,0.003-0.26-0.077-0.261-0.174c0-0.1,0.113-0.181,0.256-0.184   C7.912,19.708,8.029,19.788,8.029,19.886L8.029,19.886z"/>
                    <path d="M8.943,19.731c0.017,0.096-0.082,0.196-0.224,0.222c-0.139,0.026-0.268-0.034-0.286-0.13   c-0.017-0.099,0.084-0.198,0.223-0.224C8.797,19.574,8.925,19.632,8.943,19.731L8.943,19.731z"/>
                </g></svg>

        </button>
    </a>
</div>
</div>
</aside>
<!-- Backdrop -->
<div
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-20 sm:items-center sm:justify-center"
></div>
<aside
        class="fixed inset-y-0 z-20 flex-shrink-0 w-64 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20"
        @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu"
>
    <div class="py-4 text-gray-500 dark:text-gray-400">
            <div class="ml-2 flex justify-start items-center ">
            <img width="40px" src="./icons/wizwiz.png">
            <a class=" text-lg font-bold text-gray-800 dark:text-gray-200" href="index.php" > WizWiz <span class="px-1 ml-1 rounded" style="font-size: 10px;background-color: #e7cef1;color:#45013c !important;"> v 10.3.1</span></a>
            </div>
        <ul class="mt-6">
            <li class="relative px-6 py-3">
                <a
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        href="index.php"
                >
                    <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                    >
                        <path
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                        ></path>
                    </svg>
                    <span class="ml-4"><?php echo $_LANG['Dashboard'] ?></span>
                </a>
            </li>
        </ul>
        <ul>
            <li class="relative px-6 py-3">
                <a
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        href="orders.php"
                >
                    <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                    >
                        <path
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                        ></path>
                    </svg>
                    <span class="ml-4"><?php echo $_LANG['Orders'] ?></span>
                </a>
            </li>
            <li class="relative px-6 py-3">
              <span
                      class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                      aria-hidden="true"
              ></span>
                <a
                        class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                        href="servers.php"
                >
                    <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                    >
                        <path
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                        ></path>
                    </svg>
                    <span class="ml-4"><?php echo $_LANG['Servers'] ?></span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        href="category.php"
                >
                    <svg stroke-linejoin="round" fill="gray" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                         id="Outline" viewBox="0 0 24 24" width="20" height="20">
                        <path d="M7,0H4A4,4,0,0,0,0,4V7a4,4,0,0,0,4,4H7a4,4,0,0,0,4-4V4A4,4,0,0,0,7,0ZM9,7A2,2,0,0,1,7,9H4A2,2,0,0,1,2,7V4A2,2,0,0,1,4,2H7A2,2,0,0,1,9,4Z"/>
                        <path d="M7,13H4a4,4,0,0,0-4,4v3a4,4,0,0,0,4,4H7a4,4,0,0,0,4-4V17A4,4,0,0,0,7,13Zm2,7a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V17a2,2,0,0,1,2-2H7a2,2,0,0,1,2,2Z"/>
                        <path d="M20,13H17a4,4,0,0,0-4,4v3a4,4,0,0,0,4,4h3a4,4,0,0,0,4-4V17A4,4,0,0,0,20,13Zm2,7a2,2,0,0,1-2,2H17a2,2,0,0,1-2-2V17a2,2,0,0,1,2-2h3a2,2,0,0,1,2,2Z"/>
                        <path d="M14,7h3v3a1,1,0,0,0,2,0V7h3a1,1,0,0,0,0-2H19V2a1,1,0,0,0-2,0V5H14a1,1,0,0,0,0,2Z"/>
                    </svg>

                    <span class="ml-4"><?php echo $_LANG['category'] ?></span>
                </a>
            </li>
    <li class="relative px-6 py-3">
        <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="singleplans.php"
        >
            <svg stroke-linejoin="round" fill="gray" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                 id="Outline" viewBox="0 0 24 24" width="20" height="20">
                <path d="M19,3H12.472a1.019,1.019,0,0,1-.447-.1L8.869,1.316A3.014,3.014,0,0,0,7.528,1H5A5.006,5.006,0,0,0,0,6V18a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V8A5.006,5.006,0,0,0,19,3ZM5,3H7.528a1.019,1.019,0,0,1,.447.1l3.156,1.579A3.014,3.014,0,0,0,12.472,5H19a3,3,0,0,1,2.779,1.882L2,6.994V6A3,3,0,0,1,5,3ZM19,21H5a3,3,0,0,1-3-3V8.994l20-.113V18A3,3,0,0,1,19,21Z"/>
            </svg>

            <span class="ml-4"><?php echo $_LANG['SinglePlans'] ?></span>
        </a>
    </li>
    <li class="relative px-6 py-3">
        <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="multipleplans.php"
        >
            <svg stroke-linejoin="round" fill="gray" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                 id="Outline" viewBox="0 0 24 24" width="20" height="20">
                <path d="M19,3H12.472a1.019,1.019,0,0,1-.447-.1L8.869,1.316A3.014,3.014,0,0,0,7.528,1H5A5.006,5.006,0,0,0,0,6V18a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V8A5.006,5.006,0,0,0,19,3ZM5,3H7.528a1.019,1.019,0,0,1,.447.1l3.156,1.579A3.014,3.014,0,0,0,12.472,5H19a3,3,0,0,1,2.779,1.882L2,6.994V6A3,3,0,0,1,5,3ZM19,21H5a3,3,0,0,1-3-3V8.994l20-.113V18A3,3,0,0,1,19,21Z"/>
            </svg>

            <span class="ml-4"><?php echo $_LANG['MultiplePlans'] ?></span>
        </a>
    </li>
            <li class="relative px-6 py-3">
                <a
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        href="pays.php">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" fill="gray" data-name="Layer 1"
                         viewBox="0 0 24 24" width="21" height="21">
                        <path d="M12,9C17.934,8.844,17.933,.155,12,0c-5.934,.156-5.933,8.845,0,9Zm0-7c3.286,.059,3.285,4.942,0,5-3.285-.059-3.285-4.942,0-5Zm10.204,9.162c-1.143-.953-2.64-1.347-4.099-1.081l-3.821,.695c-.913,.166-1.707,.634-2.284,1.289-.578-.655-1.371-1.123-2.285-1.289l-3.821-.695c-1.461-.264-2.956,.128-4.098,1.081-1.142,.953-1.796,2.352-1.796,3.839v2.793c0,2.417,1.727,4.486,4.106,4.919l6.284,1.143c1.068,.194,2.151,.194,3.219,0l6.285-1.143c2.379-.433,4.105-2.502,4.105-4.919v-2.793c0-1.487-.654-2.886-1.796-3.838Zm-11.204,10.767c-.084-.012-.168-.026-.252-.041l-6.284-1.143c-1.428-.26-2.464-1.501-2.464-2.952v-2.793c0-.892,.393-1.731,1.078-2.303,.685-.573,1.59-.808,2.459-.648l3.821,.695c.952,.173,1.642,1,1.642,1.968v7.217Zm11-4.135c0,1.451-1.036,2.692-2.463,2.952l-6.285,1.143c-.084,.015-.168,.029-.252,.041v-7.217c0-.967,.69-1.795,1.642-1.968l3.821-.695c.875-.16,1.774,.077,2.46,.648,.685,.572,1.077,1.411,1.077,2.303v2.793Z"/>
                    </svg>

                    <span class="ml-4"><?php echo $_LANG['Pays'] ?></span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        href="add-volume.php">
                    <svg fill="gray" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512"
                         style="enable-background:new 0 0 512 512;" xml:space="preserve" width="21" height="21"><g>
                            <path d="M480,224H288V32c0-17.673-14.327-32-32-32s-32,14.327-32,32v192H32c-17.673,0-32,14.327-32,32s14.327,32,32,32h192v192   c0,17.673,14.327,32,32,32s32-14.327,32-32V288h192c17.673,0,32-14.327,32-32S497.673,224,480,224z"/>
                        </g></svg>


                    <span class="ml-4"><?php echo $_LANG['AddVolume'] ?></span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        href="volume.php">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Outline" fill="gray" viewBox="0 0 24 24" width="21"
                         height="21">
                        <path d="M22.485,10.975,12,17.267,1.515,10.975A1,1,0,1,0,.486,12.69l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z"/>
                        <path d="M22.485,15.543,12,21.834,1.515,15.543A1,1,0,1,0,.486,17.258l11,6.6a1,1,0,0,0,1.03,0l11-6.6a1,1,0,1,0-1.029-1.715Z"/>
                        <path d="M12,14.773a2.976,2.976,0,0,1-1.531-.425L.485,8.357a1,1,0,0,1,0-1.714L10.469.652a2.973,2.973,0,0,1,3.062,0l9.984,5.991a1,1,0,0,1,0,1.714l-9.984,5.991A2.976,2.976,0,0,1,12,14.773ZM2.944,7.5,11.5,12.633a.974.974,0,0,0,1,0L21.056,7.5,12.5,2.367a.974.974,0,0,0-1,0h0Z"/>
                    </svg>


                    <span class="ml-4"><?php echo $_LANG['Volumeorders'] ?></span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        href="discount.php">
                    <svg id="Layer_1" height="21" viewBox="0 0 24 24" fill="gray" width="21"
                         xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                        <path d="m24 12a1 1 0 0 1 -2 0 10.011 10.011 0 0 0 -10-10 1 1 0 0 1 0-2 12.013 12.013 0 0 1 12 12zm-8 1a1 1 0 0 0 0-2h-2.277a2 2 0 0 0 -.723-.723v-3.277a1 1 0 0 0 -2 0v3.277a1.994 1.994 0 1 0 2.723 2.723zm-14.173-6.216a1 1 0 1 0 1 1 1 1 0 0 0 -1-1zm.173 5.216a1 1 0 1 0 -1 1 1 1 0 0 0 1-1zm10 10a1 1 0 1 0 1 1 1 1 0 0 0 -1-1zm-7.779-18.793a1 1 0 1 0 1 1 1 1 0 0 0 -1-1zm3.558-2.366a1 1 0 1 0 1 1 1 1 0 0 0 -1-1zm-5.952 14.375a1 1 0 1 0 1 1 1 1 0 0 0 -1-1zm2.394 3.577a1 1 0 1 0 1 1 1 1 0 0 0 -1-1zm3.558 2.366a1 1 0 1 0 1 1 1 1 0 0 0 -1-1zm14.394-5.943a1 1 0 1 0 1 1 1 1 0 0 0 -1-1zm-2.394 3.577a1 1 0 1 0 1 1 1 1 0 0 0 -1-1zm-3.558 2.366a1 1 0 1 0 1 1 1 1 0 0 0 -1-1z"/>
                    </svg>

                    <span class="ml-4"><?php echo $_LANG['Discountcode'] ?></span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        href="rahgozar.php">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" fill="gray"
                         viewBox="0 0 24 24" width="21" height="21">
                        <path d="M23,12.5A1.5,1.5,0,0,1,21.5,14H18.63a3.516,3.516,0,0,1-3-1.7l-1.225-2.034-1.79,4.363,2.614,1.487A3.507,3.507,0,0,1,17,19.163V22.5a1.5,1.5,0,0,1-3,0V19.163a.5.5,0,0,0-.252-.434L9.666,16.406a3.511,3.511,0,0,1-1.427-4.322L9.5,9H7.736a.5.5,0,0,0-.447.277L5.842,12.171a1.5,1.5,0,0,1-2.684-1.342L4.605,7.935A3.483,3.483,0,0,1,7.736,6H13.36a3.516,3.516,0,0,1,3,1.7L18.2,10.758A.5.5,0,0,0,18.63,11H21.5A1.5,1.5,0,0,1,23,12.5ZM8.057,16.85a1.5,1.5,0,0,0-1.95.836A.5.5,0,0,1,5.643,18H3.5a1.5,1.5,0,0,0,0,3H5.643a3.484,3.484,0,0,0,3.25-2.2A1.5,1.5,0,0,0,8.057,16.85ZM14.5,5A2.5,2.5,0,1,0,12,2.5,2.5,2.5,0,0,0,14.5,5Z"/>
                    </svg>


                    <span class="ml-4"><?php echo $_LANG['Rahgozar'] ?></span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        href="gift.php">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" fill="gray" data-name="Layer 1"
                         viewBox="0 0 24 24" width="21" height="21">
                        <path d="M21,7H17.866A6.547,6.547,0,0,0,20,2H18c0,2.881-1.971,4.307-4.152,4.8A9.239,9.239,0,0,0,15,3,3,3,0,0,0,9,3a9.239,9.239,0,0,0,1.152,3.8C7.971,6.307,6,4.881,6,2H4A6.547,6.547,0,0,0,6.134,7H3a3,3,0,0,0-3,3v4H2V24H22V14h2V10A3,3,0,0,0,21,7ZM12,2a1,1,0,0,1,1,1,7.71,7.71,0,0,1-1,3.013A7.71,7.71,0,0,1,11,3,1,1,0,0,1,12,2ZM2,10A1,1,0,0,1,3,9h8v3H2Zm2,4h7v8H4Zm16,8H13V14h7Zm2-10H13V9h8a1,1,0,0,1,1,1Z"/>
                    </svg>


                    <span class="ml-4"><?php echo $_LANG['Gift'] ?></span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        href="software.php">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" fill="gray" data-name="Layer 1"
                         viewBox="0 0 24 24" width="21" height="21">
                        <path d="M11.24,24a2.262,2.262,0,0,1-.948-.212,2.18,2.18,0,0,1-1.2-2.622L10.653,16H6.975A3,3,0,0,1,4.1,12.131l3.024-10A2.983,2.983,0,0,1,10,0h3.693a2.6,2.6,0,0,1,2.433,3.511L14.443,8H17a3,3,0,0,1,2.483,4.684l-6.4,10.3A2.2,2.2,0,0,1,11.24,24ZM10.3.1,1,0,0,0-.958.71l-3.024,10A1,1,0,0,0,6.975,14H12a1,1,0,0,1,.957,1.29L11.01,21.732a.183.183,0,0,0,.121.241A.188.188,0,0,0,11.4,21.9l6.4-10.3a1,1,0,0,0,.078-1.063A.979.979,0,0,0,17,10H13a1,1,0,0,1-.937-1.351l2.19-5.84A.6.6,0,0,0,13.693,2Z"/>
                    </svg>
                    <span class="ml-4"><?php echo $_LANG['Software'] ?></span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        href="wizwizbackup.php">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="gray" id="Outline" viewBox="0 0 24 24" width="21" height="21"><path d="M18.4,7.379a1.128,1.128,0,0,1-.769-.754h0a8,8,0,1,0-15.1,5.237A1.046,1.046,0,0,1,2.223,13.1,5.5,5.5,0,0,0,.057,18.3,5.622,5.622,0,0,0,5.683,23H11a1,1,0,0,0,1-1h0a1,1,0,0,0-1-1H5.683a3.614,3.614,0,0,1-3.646-2.981,3.456,3.456,0,0,1,1.376-3.313A3.021,3.021,0,0,0,4.4,11.141a6.113,6.113,0,0,1-.073-4.126A5.956,5.956,0,0,1,9.215,3.05,6.109,6.109,0,0,1,9.987,3a5.984,5.984,0,0,1,5.756,4.28,2.977,2.977,0,0,0,2.01,1.99,5.934,5.934,0,0,1,.778,11.09.976.976,0,0,0-.531.888h0a.988.988,0,0,0,1.388.915c4.134-1.987,6.38-7.214,2.88-12.264A6.935,6.935,0,0,0,18.4,7.379Z"/><path d="M18.707,16.707a1,1,0,0,0,0-1.414l-1.586-1.586a3,3,0,0,0-4.242,0l-1.586,1.586a1,1,0,0,0,1.414,1.414L14,15.414V23a1,1,0,0,0,2,0V15.414l1.293,1.293a1,1,0,0,0,1.414,0Z"/></svg>
                    <span class="ml-4"><?php echo $_LANG['Backup'] ?></span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <a
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        href="settings.php">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="gray" id="Outline" viewBox="0 0 24 24" width="21"
                         height="21">
                        <path d="M12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z"/>
                        <path d="M21.294,13.9l-.444-.256a9.1,9.1,0,0,0,0-3.29l.444-.256a3,3,0,1,0-3-5.2l-.445.257A8.977,8.977,0,0,0,15,3.513V3A3,3,0,0,0,9,3v.513A8.977,8.977,0,0,0,6.152,5.159L5.705,4.9a3,3,0,0,0-3,5.2l.444.256a9.1,9.1,0,0,0,0,3.29l-.444.256a3,3,0,1,0,3,5.2l.445-.257A8.977,8.977,0,0,0,9,20.487V21a3,3,0,0,0,6,0v-.513a8.977,8.977,0,0,0,2.848-1.646l.447.258a3,3,0,0,0,3-5.2Zm-2.548-3.776a7.048,7.048,0,0,1,0,3.75,1,1,0,0,0,.464,1.133l1.084.626a1,1,0,0,1-1,1.733l-1.086-.628a1,1,0,0,0-1.215.165,6.984,6.984,0,0,1-3.243,1.875,1,1,0,0,0-.751.969V21a1,1,0,0,1-2,0V19.748a1,1,0,0,0-.751-.969A6.984,6.984,0,0,1,7.006,16.9a1,1,0,0,0-1.215-.165l-1.084.627a1,1,0,1,1-1-1.732l1.084-.626a1,1,0,0,0,.464-1.133,7.048,7.048,0,0,1,0-3.75A1,1,0,0,0,4.79,8.992L3.706,8.366a1,1,0,0,1,1-1.733l1.086.628A1,1,0,0,0,7.006,7.1a6.984,6.984,0,0,1,3.243-1.875A1,1,0,0,0,11,4.252V3a1,1,0,0,1,2,0V4.252a1,1,0,0,0,.751.969A6.984,6.984,0,0,1,16.994,7.1a1,1,0,0,0,1.215.165l1.084-.627a1,1,0,1,1,1,1.732l-1.084.626A1,1,0,0,0,18.746,10.125Z"/>
                    </svg>

                    <span class="ml-4"><?php echo $_LANG['Settings'] ?></span>
                </a>
            </li>
        </ul>
        <div class="px-6 mt-3">
            <a href="https://t.me/wizwizch" target="_blank">
                <button class="flex items-center shadow-xl justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-500 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                    Telegram wizwiz
                    <span class="ml-2" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                               fill="#fff" width="15" height="15"><g
                                    id="_01_align_center" data-name="01 align center"><path
                                        d="M1.444,6.669a2,2,0,0,0-.865,3.337l3.412,3.408V20h6.593l3.435,3.43a1.987,1.987,0,0,0,1.408.588,2.034,2.034,0,0,0,.51-.066,1.978,1.978,0,0,0,1.42-1.379L23.991.021ZM2,8.592l17.028-5.02L5.993,16.586v-4Zm13.44,13.424L11.413,18h-4L20.446,4.978Z"/></g></svg></span>
                </button>
            </a>
        </div>
        <div class="px-6 my-2">
            <a href="https://github.com/wizwizdev/wizwizxui-timebot" target="_blank">
                <button class="flex items-center shadow-xl justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-gray-500 border border-transparent rounded-lg active:bg-gray-600 hover:bg-gray-700 focus:outline-none focus:shadow-outline-gray">
                    Github
                    <span class="ml-2" aria-hidden="true">
            <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve" width="15" height="15"><g>
                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M12,0.296c-6.627,0-12,5.372-12,12c0,5.302,3.438,9.8,8.206,11.387   c0.6,0.111,0.82-0.26,0.82-0.577c0-0.286-0.011-1.231-0.016-2.234c-3.338,0.726-4.043-1.416-4.043-1.416   C4.421,18.069,3.635,17.7,3.635,17.7c-1.089-0.745,0.082-0.729,0.082-0.729c1.205,0.085,1.839,1.237,1.839,1.237   c1.07,1.834,2.807,1.304,3.492,0.997C9.156,18.429,9.467,17.9,9.81,17.6c-2.665-0.303-5.467-1.332-5.467-5.93   c0-1.31,0.469-2.381,1.237-3.221C5.455,8.146,5.044,6.926,5.696,5.273c0,0,1.008-0.322,3.301,1.23   C9.954,6.237,10.98,6.104,12,6.099c1.02,0.005,2.047,0.138,3.006,0.404c2.29-1.553,3.297-1.23,3.297-1.23   c0.653,1.653,0.242,2.873,0.118,3.176c0.769,0.84,1.235,1.911,1.235,3.221c0,4.609-2.807,5.624-5.479,5.921   c0.43,0.372,0.814,1.103,0.814,2.222c0,1.606-0.014,2.898-0.014,3.293c0,0.319,0.216,0.694,0.824,0.576   c4.766-1.589,8.2-6.085,8.2-11.385C24,5.669,18.627,0.296,12,0.296z"/>
                    <path d="M4.545,17.526c-0.026,0.06-0.12,0.078-0.206,0.037c-0.087-0.039-0.136-0.121-0.108-0.18   c0.026-0.061,0.12-0.078,0.207-0.037C4.525,17.384,4.575,17.466,4.545,17.526L4.545,17.526z"/>
                    <path d="M5.031,18.068c-0.057,0.053-0.169,0.028-0.245-0.055c-0.079-0.084-0.093-0.196-0.035-0.249   c0.059-0.053,0.167-0.028,0.246,0.056C5.076,17.903,5.091,18.014,5.031,18.068L5.031,18.068z"/>
                    <path d="M5.504,18.759c-0.074,0.051-0.194,0.003-0.268-0.103c-0.074-0.107-0.074-0.235,0.002-0.286   c0.074-0.051,0.193-0.005,0.268,0.101C5.579,18.579,5.579,18.707,5.504,18.759L5.504,18.759z"/>
                    <path d="M6.152,19.427c-0.066,0.073-0.206,0.053-0.308-0.046c-0.105-0.097-0.134-0.234-0.068-0.307   c0.067-0.073,0.208-0.052,0.311,0.046C6.191,19.217,6.222,19.355,6.152,19.427L6.152,19.427z"/>
                    <path d="M7.047,19.814c-0.029,0.094-0.164,0.137-0.3,0.097C6.611,19.87,6.522,19.76,6.55,19.665   c0.028-0.095,0.164-0.139,0.301-0.096C6.986,19.609,7.075,19.719,7.047,19.814L7.047,19.814z"/>
                    <path d="M8.029,19.886c0.003,0.099-0.112,0.181-0.255,0.183c-0.143,0.003-0.26-0.077-0.261-0.174c0-0.1,0.113-0.181,0.256-0.184   C7.912,19.708,8.029,19.788,8.029,19.886L8.029,19.886z"/>
                    <path d="M8.943,19.731c0.017,0.096-0.082,0.196-0.224,0.222c-0.139,0.026-0.268-0.034-0.286-0.13   c-0.017-0.099,0.084-0.198,0.223-0.224C8.797,19.574,8.925,19.632,8.943,19.731L8.943,19.731z"/>
                </g></svg>
                </button>
            </a>
        </div>
    </div>
</aside>
<div class="flex flex-col flex-1 w-full">
    <?php
    include 'includ/top-header.php';
    ?>
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto ">


            <a style="font-size: 20px"
               class="text-xs font-semibold tracking-wide text-left text-gray-500 0 dark:text-gray-400 inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
            >
                <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                >
                    <path
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                    ></path>
                </svg>
                <span class="ml-4" style="padding: 20px"><?php echo $_LANG['Servers']?></span>
                <?php session_notif_wizwiz() ?>
            </a>


            <?php
            $serverHandler = new ServerHandler($conn);
            $serverHandler->handleRequest();
            $serverHandler->typesserver($conn);

            $sql1 = "SELECT * FROM server_config , server_info where server_config.id = server_info.id";
			$stmt = $conn->prepare($sql1);
			$stmt->execute();
			$result1 = $stmt->get_result();
			$stmt->close();

            echo '
                            <div style="margin-top:40px" class="shadow-md min-w-0 p-4 bg-white rounded-lg dark:bg-gray-800 text-xs font-semibold tracking-wide text-left text-gray-500 border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">

                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wra">
                        <thead class="">
                        <tr style="font-size: 13px" class="text-center tracking-wide text-left text-gray-500  dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-700">
                                <th class="px-4 py-3">'.$_LANG['id'].'</th>
                                <th class="px-4 py-3"></th>
                                <th class="px-4 py-3">'.$_LANG['remark'].'</th>
                                <th class="px-4 py-3">'.$_LANG['count'].'</th>
                                <th class="px-4 py-3">'.$_LANG['reality'].'</th>
                                <th class="px-4 py-3">'.$_LANG['status'].'</th>
                                <th class="px-4 py-3">'.$_LANG['port'].'</th>
                                <th class="px-4 py-3">'.$_LANG['type'].'</th>
                                <th class="px-4 py-3">'.$_LANG['Settings'].'</th>
                            </tr>
                            </thead>
                                ';
            echo '<tbody style="font-size: 13px;" class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800 text-center border-b dark:border-gray-600">';
            while ($row1 = $result1->fetch_assoc()) {
                $id_server_d = $row1["id"];
                echo '<tr class="text-gray-700 dark:text-gray-400">';
                echo '<td class="" style="font-size: 12px;color: #de2038;">' . $row1["id"] . '</td>';
                echo '<td class="px-4 py-3">';
                echo '<div class="flex items-center text-sm ">';
                echo '<div class="relative hidden w-8 h-8 mr-3 mt-2 rounded-full md:block" >';
                if ($row1["flag"] == '🇮🇷') {
                    echo '
                   <svg class="object-cover w-full" style="border-radius: 5px" xmlns="http://www.w3.org/2000/svg" id="flag-icons-ir" viewBox="0 0 640 480">
  <defs>
    <clipPath id="a">
      <path fill-opacity=".7" d="M-85.3 0h682.7v512H-85.3z"/>
    </clipPath>
  </defs>
  <g fill-rule="evenodd" clip-path="url(#a)" transform="translate(80) scale(.9375)">
    <path fill="#fff" d="M-192 0h896v512h-896z"/>
    <path fill="#da0000" d="M-192 343.8h896V512h-896z"/>
    <g fill="#fff" stroke-width="1pt">
      <path d="M-21.6 351h49v3.3h-49zm7.3 16.8h3.4v3.3h-3.4zm41.9 0v3.3h-9.8v-3.4zm5.2-16.8h3.4v20h-3.4z"/>
      <path d="M52.4 367.7v3.4H33.8v-3.4zm-34.6-7.9H21v11.3h-3.3z"/>
      <path d="M49.6 351H53v20h-3.4zm-8.4 0h3.3v20h-3.3zm-44.8 8v3.4h-18V359zm39.3 0v3.4h-18V359z"/>
      <path d="M17.8 359.9H21V371h-3.3z"/>
      <path d="M17.8 359.9H21V371h-3.3z"/>
      <path d="M17.8 359.9H21V371h-3.3zm-39.3 0h3.3V371h-3.3zm28.8 0h3.4V371H7.3zm-14.3 0h3.4V371H-7z"/>
      <path d="M9.6 367.7v3.4H-5.5v-3.4zm1-8.7v3.4H1V359z"/>
    </g>
    <g fill="#fff" stroke-width="1pt">
      <path d="M-102.2 351h49v3.3h-49zm7.3 16.8h3.4v3.3H-95zm41.9 0v3.3h-9.8v-3.4zm5.2-16.8h3.4v20h-3.4z"/>
      <path d="M-28.2 367.7v3.4h-18.6v-3.4zm-34.6-7.9h3.3v11.3h-3.3z"/>
      <path d="M-31 351h3.4v20H-31zm-8.4 0h3.3v20h-3.3zm-44.8 8v3.4h-18V359zm39.3 0v3.4h-18V359z"/>
      <path d="M-62.8 359.9h3.3V371h-3.3z"/>
      <path d="M-62.8 359.9h3.3V371h-3.3z"/>
      <path d="M-62.8 359.9h3.3V371h-3.3zm-39.3 0h3.3V371h-3.3zm28.8 0h3.3V371h-3.3zm-14.3 0h3.4V371h-3.4z"/>
      <path d="M-71 367.7v3.4h-15v-3.4zm1-8.7v3.4h-9.6V359z"/>
    </g>
    <g fill="#fff" stroke-width="1pt">
      <path d="M58.3 351h49v3.3h-49zm7.3 16.8H69v3.3h-3.4zm41.9 0v3.3h-9.8v-3.4zm5.3-16.8h3.4v20h-3.4z"/>
      <path d="M132.3 367.7v3.4h-18.6v-3.4zm-34.6-7.9h3.4v11.3h-3.4z"/>
      <path d="M129.5 351h3.4v20h-3.4zm-8.4 0h3.4v20H121zm-44.8 8v3.4h-18V359zm39.3 0v3.4h-18V359z"/>
      <path d="M97.7 359.9h3.4V371h-3.4z"/>
      <path d="M97.7 359.9h3.4V371h-3.4z"/>
      <path d="M97.7 359.9h3.4V371h-3.4zm-39.3 0h3.4V371h-3.4zm28.8 0h3.4V371h-3.4zm-14.3 0h3.4V371h-3.4z"/>
      <path d="M89.6 367.7v3.4H74.4v-3.4zm1-8.7v3.4H81V359z"/>
    </g>
    <g fill="#fff" stroke-width="1pt">
      <path d="M622.7 351h49v3.3h-49zm7.3 16.8h3.4v3.3H630zm41.9 0v3.3H662v-3.4zm5.3-16.8h3.3v20h-3.4z"/>
      <path d="M696.7 367.7v3.4H678v-3.4zm-34.6-7.9h3.4v11.3H662z"/>
      <path d="M694 351h3.3v20h-3.4zm-8.5 0h3.4v20h-3.4zm-44.8 8v3.4h-18V359zm39.3 0v3.4h-18V359z"/>
      <path d="M662 359.9h3.5V371H662z"/>
      <path d="M662 359.9h3.5V371H662z"/>
      <path d="M662 359.9h3.5V371H662zm-39.2 0h3.4V371h-3.4zm28.8 0h3.4V371h-3.4zm-14.3 0h3.4V371h-3.4z"/>
      <path d="M654 367.7v3.4h-15.2v-3.4zm1-8.7v3.4h-9.6V359z"/>
    </g>
    <g fill="#fff" stroke-width="1pt">
      <path d="M138.7 351h49.1v3.3h-49zm7.4 16.8h3.3v3.3h-3.3zm41.8 0v3.3h-9.8v-3.4zm5.3-16.8h3.4v20h-3.4z"/>
      <path d="M212.8 367.7v3.4h-18.6v-3.4zm-34.7-7.9h3.4v11.3h-3.4z"/>
      <path d="M210 351h3.4v20H210zm-8.5 0h3.4v20h-3.4zm-44.8 8v3.4h-17.9V359zm39.3 0v3.4h-17.9V359z"/>
      <path d="M178.1 359.9h3.4V371h-3.4z"/>
      <path d="M178.1 359.9h3.4V371h-3.4z"/>
      <path d="M178.1 359.9h3.4V371h-3.4zm-39.3 0h3.4V371h-3.4zm28.8 0h3.4V371h-3.4zm-14.2 0h3.3V371h-3.3z"/>
      <path d="M170 367.7v3.4h-15.1v-3.4zm1-8.7v3.4h-9.6V359z"/>
    </g>
    <g fill="#fff" stroke-width="1pt">
      <path d="M219.5 351h49v3.3h-49zm7.3 16.8h3.4v3.3h-3.4zm41.9 0v3.3h-9.8v-3.4zM274 351h3.3v20H274z"/>
      <path d="M293.5 367.7v3.4h-18.6v-3.4zm-34.6-7.9h3.4v11.3h-3.4z"/>
      <path d="M290.7 351h3.4v20h-3.4zm-8.4 0h3.4v20h-3.4zm-44.8 8v3.4h-18V359zm39.3 0v3.4h-18V359z"/>
      <path d="M258.9 359.9h3.4V371h-3.4z"/>
      <path d="M258.9 359.9h3.4V371h-3.4z"/>
      <path d="M258.9 359.9h3.4V371h-3.4zm-39.3 0h3.3V371h-3.3zm28.8 0h3.4V371h-3.4zm-14.3 0h3.4V371H234z"/>
      <path d="M250.8 367.7v3.4h-15.2v-3.4zm1-8.7v3.4H242V359z"/>
    </g>
    <path fill="#239f40" d="M-192 0h896v168.2h-896z"/>
    <g fill="#fff" stroke-width="1pt">
      <path d="M300.7 351h49v3.3h-49zm7.3 16.8h3.4v3.3H308zm41.9 0v3.3H340v-3.4zm5.3-16.8h3.3v20h-3.3z"/>
      <path d="M374.7 367.7v3.4h-18.6v-3.4zm-34.6-7.9h3.4v11.3H340z"/>
      <path d="M372 351h3.3v20H372zm-8.5 0h3.4v20h-3.4zm-44.8 8v3.4h-18V359zm39.3 0v3.4h-18V359z"/>
      <path d="M340 359.9h3.5V371H340z"/>
      <path d="M340 359.9h3.5V371H340z"/>
      <path d="M340 359.9h3.5V371H340zm-39.2 0h3.4V371h-3.4zm28.8 0h3.4V371h-3.4zm-14.3 0h3.4V371h-3.4z"/>
      <path d="M332 367.7v3.4h-15.2v-3.4zm1-8.7v3.4h-9.6V359z"/>
    </g>
    <g fill="#fff" stroke-width="1pt">
      <path d="M381.4 351h49v3.3h-49zm7.3 16.8h3.4v3.3h-3.4zm42 0v3.3h-9.9v-3.4zm5.2-16.8h3.4v20h-3.4z"/>
      <path d="M455.4 367.7v3.4h-18.6v-3.4zm-34.6-7.9h3.4v11.3h-3.4z"/>
      <path d="M452.7 351h3.3v20h-3.3zm-8.5 0h3.4v20h-3.4zm-44.8 8v3.4h-17.9V359zm39.3 0v3.4h-17.9V359z"/>
      <path d="M420.8 359.9h3.4V371h-3.4z"/>
      <path d="M420.8 359.9h3.4V371h-3.4z"/>
      <path d="M420.8 359.9h3.4V371h-3.4zm-39.3 0h3.4V371h-3.4zm28.8 0h3.4V371h-3.4zm-14.3 0h3.4V371h-3.3z"/>
      <path d="M412.7 367.7v3.4h-15.1v-3.4zm1-8.7v3.4H404V359z"/>
    </g>
    <g fill="#fff" stroke-width="1pt">
      <path d="M462.2 351h49v3.3h-49zm7.3 16.8h3.4v3.3h-3.4zm41.9 0v3.3h-9.8v-3.4zm5.2-16.8h3.4v20h-3.4z"/>
      <path d="M536.2 367.7v3.4h-18.6v-3.4zm-34.7-7.9h3.4v11.3h-3.4z"/>
      <path d="M533.4 351h3.4v20h-3.4zm-8.4 0h3.3v20H525zm-44.8 8v3.4h-18V359zm39.3 0v3.4h-18V359z"/>
      <path d="M501.6 359.9h3.3V371h-3.3z"/>
      <path d="M501.6 359.9h3.3V371h-3.3z"/>
      <path d="M501.6 359.9h3.3V371h-3.3zm-39.4 0h3.4V371h-3.4zm28.9 0h3.3V371h-3.3zm-14.3 0h3.4V371h-3.4z"/>
      <path d="M493.4 367.7v3.4h-15.1v-3.4zm1-8.7v3.4h-9.6V359z"/>
    </g>
    <g fill="#fff" stroke-width="1pt">
      <path d="M543.4 351h49v3.3h-49zm7.3 16.8h3.4v3.3h-3.4zm41.9 0v3.3h-9.8v-3.4zm5.2-16.8h3.4v20h-3.4z"/>
      <path d="M617.4 367.7v3.4h-18.6v-3.4zm-34.6-7.9h3.3v11.3h-3.3z"/>
      <path d="M614.6 351h3.4v20h-3.4zm-8.4 0h3.3v20h-3.3zm-44.8 8v3.4h-18V359zm39.3 0v3.4h-18V359z"/>
      <path d="M582.8 359.9h3.3V371h-3.3z"/>
      <path d="M582.8 359.9h3.3V371h-3.3z"/>
      <path d="M582.8 359.9h3.3V371h-3.3zm-39.3 0h3.3V371h-3.3zm28.8 0h3.4V371h-3.4zm-14.3 0h3.4V371H558z"/>
      <path d="M574.6 367.7v3.4h-15.1v-3.4zm1-8.7v3.4H566V359z"/>
    </g>
    <g fill="#fff" stroke-width="1pt">
      <path d="M-183.8 351h49v3.3h-49zm7.3 16.8h3.4v3.3h-3.4zm42 0v3.3h-9.9v-3.4zm5.2-16.8h3.4v20h-3.4z"/>
      <path d="M-109.8 367.7v3.4h-18.6v-3.4zm-34.6-7.9h3.4v11.3h-3.4z"/>
      <path d="M-112.5 351h3.3v20h-3.3zm-8.5 0h3.4v20h-3.4zm-44.8 8v3.4h-17.9V359zm39.3 0v3.4h-17.9V359z"/>
      <path d="M-144.4 359.9h3.4V371h-3.4z"/>
      <path d="M-144.4 359.9h3.4V371h-3.4z"/>
      <path d="M-144.4 359.9h3.4V371h-3.4zm-39.3 0h3.4V371h-3.4zm28.8 0h3.4V371h-3.4zm-14.3 0h3.4V371h-3.4z"/>
      <path d="M-152.5 367.7v3.4h-15.2v-3.4zm1-8.7v3.4h-9.6V359z"/>
    </g>
    <g fill="#fff" stroke-width="1pt">
      <path d="M-21.6 143.4h49v3.4h-49zm7.3 17h3.4v3.2h-3.4zm41.9-.2v3.4h-9.8v-3.4zm5.2-16.8h3.4v20.2h-3.4z"/>
      <path d="M52.4 160.2v3.4H33.8v-3.4zm-34.6-7.9H21v11.3h-3.3z"/>
      <path d="M49.6 143.4H53v20.2h-3.4zm-8.4 0h3.3v20.2h-3.3zm-44.8 8v3.4h-18v-3.3zm39.3 0v3.4h-18v-3.3z"/>
      <path d="M17.8 152.3H21v11.3h-3.3z"/>
      <path d="M17.8 152.3H21v11.3h-3.3z"/>
      <path d="M17.8 152.3H21v11.3h-3.3zm-39.3 0h3.3v11.3h-3.3zm28.8 0h3.4v11.3H7.3zm-14.3 0h3.4v11.3H-7z"/>
      <path d="M9.6 160.2v3.4H-5.5v-3.4zm1-8.7v3.3H1v-3.3z"/>
    </g>
    <g fill="#fff" stroke-width="1pt">
      <path d="M-102.2 143.4h49v3.4h-49zm7.3 17h3.4v3.2H-95zm41.9-.2v3.4h-9.8v-3.4zm5.2-16.8h3.4v20.2h-3.4z"/>
      <path d="M-28.2 160.2v3.4h-18.6v-3.4zm-34.6-7.9h3.3v11.3h-3.3z"/>
      <path d="M-31 143.4h3.4v20.2H-31zm-8.4 0h3.3v20.2h-3.3zm-44.8 8v3.4h-18v-3.3zm39.3 0v3.4h-18v-3.3z"/>
      <path d="M-62.8 152.3h3.3v11.3h-3.3z"/>
      <path d="M-62.8 152.3h3.3v11.3h-3.3z"/>
      <path d="M-62.8 152.3h3.3v11.3h-3.3zm-39.3 0h3.3v11.3h-3.3zm28.8 0h3.3v11.3h-3.3zm-14.3 0h3.4v11.3h-3.4z"/>
      <path d="M-71 160.2v3.4h-15v-3.4zm1-8.7v3.3h-9.6v-3.3z"/>
    </g>
    <g fill="#fff" stroke-width="1pt">
      <path d="M58.3 143.4h49v3.4h-49zm7.3 17H69v3.2h-3.4zm41.9-.2v3.4h-9.8v-3.4zm5.3-16.8h3.4v20.2h-3.4z"/>
      <path d="M132.3 160.2v3.4h-18.6v-3.4zm-34.6-7.9h3.4v11.3h-3.4z"/>
      <path d="M129.5 143.4h3.4v20.2h-3.4zm-8.4 0h3.4v20.2H121zm-44.8 8v3.4h-18v-3.3zm39.3 0v3.4h-18v-3.3z"/>
      <path d="M97.7 152.3h3.4v11.3h-3.4z"/>
      <path d="M97.7 152.3h3.4v11.3h-3.4z"/>
      <path d="M97.7 152.3h3.4v11.3h-3.4zm-39.3 0h3.4v11.3h-3.4zm28.8 0h3.4v11.3h-3.4zm-14.3 0h3.4v11.3h-3.4z"/>
      <path d="M89.6 160.2v3.4H74.4v-3.4zm1-8.7v3.3H81v-3.3z"/>
    </g>
    <g fill="#fff" stroke-width="1pt">
      <path d="M622.7 143.4h49v3.4h-49zm7.3 17h3.4v3.2H630zm41.9-.2v3.4H662v-3.4zm5.3-16.8h3.3v20.2h-3.4z"/>
      <path d="M696.7 160.2v3.4H678v-3.4zm-34.6-7.9h3.4v11.3H662z"/>
      <path d="M694 143.4h3.3v20.2h-3.4zm-8.5 0h3.4v20.2h-3.4zm-44.8 8v3.4h-18v-3.3zm39.3 0v3.4h-18v-3.3z"/>
      <path d="M662 152.3h3.5v11.3H662z"/>
      <path d="M662 152.3h3.5v11.3H662z"/>
      <path d="M662 152.3h3.5v11.3H662zm-39.2 0h3.4v11.3h-3.4zm28.8 0h3.4v11.3h-3.4zm-14.3 0h3.4v11.3h-3.4z"/>
      <path d="M654 160.2v3.4h-15.2v-3.4zm1-8.7v3.3h-9.6v-3.3z"/>
    </g>
    <g fill="#fff" stroke-width="1pt">
      <path d="M138.7 143.4h49.1v3.4h-49zm7.4 17h3.3v3.2h-3.3zm41.8-.2v3.4h-9.8v-3.4zm5.3-16.8h3.4v20.2h-3.4z"/>
      <path d="M212.8 160.2v3.4h-18.6v-3.4zm-34.7-7.9h3.4v11.3h-3.4z"/>
      <path d="M210 143.4h3.4v20.2H210zm-8.5 0h3.4v20.2h-3.4zm-44.8 8v3.4h-17.9v-3.3zm39.3 0v3.4h-17.9v-3.3z"/>
      <path d="M178.1 152.3h3.4v11.3h-3.4z"/>
      <path d="M178.1 152.3h3.4v11.3h-3.4z"/>
      <path d="M178.1 152.3h3.4v11.3h-3.4zm-39.3 0h3.4v11.3h-3.4zm28.8 0h3.4v11.3h-3.4zm-14.2 0h3.3v11.3h-3.3z"/>
      <path d="M170 160.2v3.4h-15.1v-3.4zm1-8.7v3.3h-9.6v-3.3z"/>
    </g>
    <g fill="#fff" stroke-width="1pt">
      <path d="M219.5 143.4h49v3.4h-49zm7.3 17h3.4v3.2h-3.4zm41.9-.2v3.4h-9.8v-3.4zm5.3-16.8h3.3v20.2H274z"/>
      <path d="M293.5 160.2v3.4h-18.6v-3.4zm-34.6-7.9h3.4v11.3h-3.4z"/>
      <path d="M290.7 143.4h3.4v20.2h-3.4zm-8.4 0h3.4v20.2h-3.4zm-44.8 8v3.4h-18v-3.3zm39.3 0v3.4h-18v-3.3z"/>
      <path d="M258.9 152.3h3.4v11.3h-3.4z"/>
      <path d="M258.9 152.3h3.4v11.3h-3.4z"/>
      <path d="M258.9 152.3h3.4v11.3h-3.4zm-39.3 0h3.3v11.3h-3.3zm28.8 0h3.4v11.3h-3.4zm-14.3 0h3.4v11.3H234z"/>
      <path d="M250.8 160.2v3.4h-15.2v-3.4zm1-8.7v3.3H242v-3.3z"/>
    </g>
    <g fill="#fff" stroke-width="1pt">
      <path d="M300.7 143.4h49v3.4h-49zm7.3 17h3.4v3.2H308zm41.9-.2v3.4H340v-3.4zm5.3-16.8h3.3v20.2h-3.3z"/>
      <path d="M374.7 160.2v3.4h-18.6v-3.4zm-34.6-7.9h3.4v11.3H340z"/>
      <path d="M372 143.4h3.3v20.2H372zm-8.5 0h3.4v20.2h-3.4zm-44.8 8v3.4h-18v-3.3zm39.3 0v3.4h-18v-3.3z"/>
      <path d="M340 152.3h3.5v11.3H340z"/>
      <path d="M340 152.3h3.5v11.3H340z"/>
      <path d="M340 152.3h3.5v11.3H340zm-39.2 0h3.4v11.3h-3.4zm28.8 0h3.4v11.3h-3.4zm-14.3 0h3.4v11.3h-3.4z"/>
      <path d="M332 160.2v3.4h-15.2v-3.4zm1-8.7v3.3h-9.6v-3.3z"/>
    </g>
    <g fill="#fff" stroke-width="1pt">
      <path d="M381.4 143.4h49v3.4h-49zm7.3 17h3.4v3.2h-3.4zm42-.2v3.4h-9.9v-3.4zm5.2-16.8h3.4v20.2h-3.4z"/>
      <path d="M455.4 160.2v3.4h-18.6v-3.4zm-34.6-7.9h3.4v11.3h-3.4z"/>
      <path d="M452.7 143.4h3.3v20.2h-3.3zm-8.5 0h3.4v20.2h-3.4zm-44.8 8v3.4h-17.9v-3.3zm39.3 0v3.4h-17.9v-3.3z"/>
      <path d="M420.8 152.3h3.4v11.3h-3.4z"/>
      <path d="M420.8 152.3h3.4v11.3h-3.4z"/>
      <path d="M420.8 152.3h3.4v11.3h-3.4zm-39.3 0h3.4v11.3h-3.4zm28.8 0h3.4v11.3h-3.4zm-14.3 0h3.4v11.3h-3.3z"/>
      <path d="M412.7 160.2v3.4h-15.1v-3.4zm1-8.7v3.3H404v-3.3z"/>
    </g>
    <g fill="#fff" stroke-width="1pt">
      <path d="M462.2 143.4h49v3.4h-49zm7.3 17h3.4v3.2h-3.4zm41.9-.2v3.4h-9.8v-3.4zm5.2-16.8h3.4v20.2h-3.4z"/>
      <path d="M536.2 160.2v3.4h-18.6v-3.4zm-34.7-7.9h3.4v11.3h-3.4z"/>
      <path d="M533.4 143.4h3.4v20.2h-3.4zm-8.4 0h3.3v20.2H525zm-44.8 8v3.4h-18v-3.3zm39.3 0v3.4h-18v-3.3z"/>
      <path d="M501.6 152.3h3.3v11.3h-3.3z"/>
      <path d="M501.6 152.3h3.3v11.3h-3.3z"/>
      <path d="M501.6 152.3h3.3v11.3h-3.3zm-39.4 0h3.4v11.3h-3.4zm28.9 0h3.3v11.3h-3.3zm-14.3 0h3.4v11.3h-3.4z"/>
      <path d="M493.4 160.2v3.4h-15.1v-3.4zm1-8.7v3.3h-9.6v-3.3z"/>
    </g>
    <g fill="#fff" stroke-width="1pt">
      <path d="M543.4 143.4h49v3.4h-49zm7.3 17h3.4v3.2h-3.4zm41.9-.2v3.4h-9.8v-3.4zm5.2-16.8h3.4v20.2h-3.4z"/>
      <path d="M617.4 160.2v3.4h-18.6v-3.4zm-34.6-7.9h3.3v11.3h-3.3z"/>
      <path d="M614.6 143.4h3.4v20.2h-3.4zm-8.4 0h3.3v20.2h-3.3zm-44.8 8v3.4h-18v-3.3zm39.3 0v3.4h-18v-3.3z"/>
      <path d="M582.8 152.3h3.3v11.3h-3.3z"/>
      <path d="M582.8 152.3h3.3v11.3h-3.3z"/>
      <path d="M582.8 152.3h3.3v11.3h-3.3zm-39.3 0h3.3v11.3h-3.3zm28.8 0h3.4v11.3h-3.4zm-14.3 0h3.4v11.3H558z"/>
      <path d="M574.6 160.2v3.4h-15.1v-3.4zm1-8.7v3.3H566v-3.3z"/>
    </g>
    <g fill="#fff" stroke-width="1pt">
      <path d="M-183.8 143.4h49v3.4h-49zm7.3 17h3.4v3.2h-3.4zm42-.2v3.4h-9.9v-3.4zm5.2-16.8h3.4v20.2h-3.4z"/>
      <path d="M-109.8 160.2v3.4h-18.6v-3.4zm-34.6-7.9h3.4v11.3h-3.4z"/>
      <path d="M-112.5 143.4h3.3v20.2h-3.3zm-8.5 0h3.4v20.2h-3.4zm-44.8 8v3.4h-17.9v-3.3zm39.3 0v3.4h-17.9v-3.3z"/>
      <path d="M-144.4 152.3h3.4v11.3h-3.4z"/>
      <path d="M-144.4 152.3h3.4v11.3h-3.4z"/>
      <path d="M-144.4 152.3h3.4v11.3h-3.4zm-39.3 0h3.4v11.3h-3.4zm28.8 0h3.4v11.3h-3.4zm-14.3 0h3.4v11.3h-3.4z"/>
      <path d="M-152.5 160.2v3.4h-15.2v-3.4zm1-8.7v3.3h-9.6v-3.3z"/>
    </g>
    <path fill="#d90000" d="M-68.8 339.5h6V350h-6zm160.5 0h6V350h-6zm-283.7 0h6V350h-6zm81.5 0h6V350h-6zm80.9 0h6V350h-6zm40 0h6V350h-6zm40.9 0h6V350h-6zm80.4 0h6V350h-6zm203 0h6.1V350h-6zm-162.1 0h6V350h-6zm40 0h6V350h-6zm40.5 0h6V350h-6zm40.4 0h6V350h-6zm323.2 0h6V350h-6zm-242.7 0h6V350h-6zm40.8 0h6V350h-6zm41.3 0h6V350h-6zm38.8 0h6V350h-6zm41.3 0h6V350h-6zm40.4 0h6V350h-6zm119.7 0h6V350h-6zm-38.8 0h6V350h-6zm-808.9 0h6V350h-6z"/>
    <path fill="#239e3f" d="M-68.8 162.6h6v10.5h-6zm160.5 0h6v10.5h-6zm-283.7 0h6v10.5h-6zm81.5 0h6v10.5h-6zm80.9 0h6v10.5h-6zm40 0h6v10.5h-6zm40.9 0h6v10.5h-6zm80.4 0h6v10.5h-6zm203 0h6.1v10.5h-6zm-162.1 0h6v10.5h-6zm40 0h6v10.5h-6zm40.5 0h6v10.5h-6zm40.4 0h6v10.5h-6zm323.2 0h6v10.5h-6zm-242.7 0h6v10.5h-6zm40.8 0h6v10.5h-6zm41.3 0h6v10.5h-6zm38.8 0h6v10.5h-6zm41.3 0h6v10.5h-6zm40.4 0h6v10.5h-6zm119.7 0h6v10.5h-6zm-38.8 0h6v10.5h-6zm-808.9 0h6v10.5h-6z"/>
    <g fill="#da0000">
      <path d="M279.8 197.5c8.4 10.4 34.5 67.6-15.7 105.2-23.7 17.8-9 18.6-8.3 21.6 38-20.1 50.3-47.5 50-72-.2-24.4-13.2-46-26-54.8z"/>
      <path d="M284.8 194.8a73.3 73.3 0 0 1 15.7 112.4c27.2-6 62-86.4-15.7-112.4zm-57.6 0a73.3 73.3 0 0 0-15.6 112.4c-27.3-6-62-86.4 15.6-112.4z"/>
      <path d="M232.2 197.5c-8.4 10.4-34.5 67.6 15.7 105.2 23.6 17.8 9 18.6 8.3 21.6-38-20.1-50.3-47.5-50-72 .2-24.4 13.2-46 26-54.8z"/>
      <path d="M304.2 319.1c-14.9.2-33.6-2-47.5-9.3 2.3 4.5 4.2 7.3 6.5 11.7 13.2 1.3 31.5 2.8 41-2.4zm-95 0c14.9.2 33.6-2 47.5-9.3-2.3 4.5-4.2 7.3-6.5 11.7-13.2 1.3-31.5 2.8-41-2.4zm27.3-138.7c3 8 10.9 9.2 19.3 4.5 6.2 3.6 15.7 3.9 19-4.1 2.5 19.8-18.3 15-19 11.2-7.8 7.5-22.2 3.2-19.3-11.6z"/>
      <path d="m256.4 331.6 7.8-9 1.1-120.1-9.3-8.2-9.3 7.8 1.9 121 7.8 8.5z"/>
    </g>
  </g>
</svg>
                    ';
                } elseif (($row1["flag"] == '🇩🇪')) {
                    echo '
                        <svg class="object-cover w-full" style="border-radius: 5px" xmlns="http://www.w3.org/2000/svg" id="flag-icons-de" viewBox="0 0 640 480">
  <path fill="#ffce00" d="M0 320h640v160H0z"/>
  <path d="M0 0h640v160H0z"/>
  <path fill="#d00" d="M0 160h640v160H0z"/>
</svg>
                        ';
                } elseif (($row1["flag"] == '🇫🇮')) {
                    echo '
                        <svg class="object-cover w-full" style="border-radius: 5px" xmlns="http://www.w3.org/2000/svg" id="flag-icons-fi" viewBox="0 0 640 480">
  <path fill="#fff" d="M0 0h640v480H0z"/>
  <path fill="#002f6c" d="M0 174.5h640v131H0z"/>
  <path fill="#002f6c" d="M175.5 0h130.9v480h-131z"/>
</svg>

                        ';
                } elseif (($row1["flag"] == '🇺🇸')) {
                    echo '
                        <svg class="object-cover w-full" style="border-radius: 5px" xmlns="http://www.w3.org/2000/svg" id="flag-icons-us" viewBox="0 0 640 480">
  <path fill="#bd3d44" d="M0 0h640v480H0"/>
  <path stroke="#fff" stroke-width="37" d="M0 55.3h640M0 129h640M0 203h640M0 277h640M0 351h640M0 425h640"/>
  <path fill="#192f5d" d="M0 0h364.8v258.5H0"/>
  <marker id="a" markerHeight="30" markerWidth="30">
    <path fill="#fff" d="m14 0 9 27L0 10h28L5 27z"/>
  </marker>
  <path fill="none" marker-mid="url(#a)" d="m0 0 16 11h61 61 61 61 60L47 37h61 61 60 61L16 63h61 61 61 61 60L47 89h61 61 60 61L16 115h61 61 61 61 60L47 141h61 61 60 61L16 166h61 61 61 61 60L47 192h61 61 60 61L16 218h61 61 61 61 60L0 0"/>
</svg>
                        ';
                } elseif (($row1["flag"] == '🇳🇱')) {
                    echo '
                        <svg class="object-cover w-full" style="border-radius: 5px" xmlns="http://www.w3.org/2000/svg" id="flag-icons-nl" viewBox="0 0 640 480">
  <path fill="#21468b" d="M0 0h640v480H0z"/>
  <path fill="#fff" d="M0 0h640v320H0z"/>
  <path fill="#ae1c28" d="M0 0h640v160H0z"/>
</svg>

                        ';
                } elseif (($row1["flag"] == '🇦🇪')) {
                    echo '
                        <svg class="object-cover" style="border-radius: 5px;" xmlns="http://www.w3.org/2000/svg" id="flag-icons-ae" viewBox="0 0 640 480">
  <path fill="#00732f" d="M0 0h640v160H0z"/>
  <path fill="#fff" d="M0 160h640v160H0z"/>
  <path d="M0 320h640v160H0z"/>
  <path fill="red" d="M0 0h220v480H0z"/>
</svg>

                        ';
                } else {
                    echo '<img class="object-cover w-full h-full rounded-full" src="icons/server.png" alt="" loading="lazy">';
                }
//                    echo '<img class="object-cover w-full h-full rounded-full" src="server.png" alt="" loading="lazy">';
                echo '<div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>';
                echo '</div>';
                echo '<div>';
                echo '<p class="text-xs text-gray-600 dark:text-gray-400">' . $row1["title"] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</td>';
                echo '<td class="px-4 py-3 text-sm">' . $row1["remark"] . '</td>';
                echo '<td class="px-4 py-3 text-sm">' . $row1["ucount"] . '</td>';

                echo '<td class="px-4 py-3">';
                echo '<div class="flex items-center space-x-4 text-sm justify-center">';
                if($row1["type"] == "sanaei" || $row1["type"] == "alireza"){
                    if ($row1["reality"] == 'true') {
                        echo '<a href="servers.php?false=' . $row1["id"] . '" ><svg width="20px" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 512"><path fill="#3AAF3C" d="M256 0c141.39 0 256 114.61 256 256S397.39 512 256 512 0 397.39 0 256 114.61 0 256 0z"/><path fill="#0DA10D" fill-rule="nonzero" d="M391.27 143.23h19.23c-81.87 90.92-145.34 165.89-202.18 275.52-29.59-63.26-55.96-106.93-114.96-147.42l22.03-4.98c44.09 36.07 67.31 76.16 92.93 130.95 52.31-100.9 110.24-172.44 182.95-254.07z"/><path fill="#fff" fill-rule="nonzero" d="M158.04 235.26c19.67 11.33 32.46 20.75 47.71 37.55 39.53-63.63 82.44-98.89 138.24-148.93l5.45-2.11h61.06c-81.87 90.93-145.34 165.9-202.18 275.53-29.59-63.26-55.96-106.93-114.96-147.43l64.68-14.61z"/></svg></a>';
                    } else {
                        echo '<a href="servers.php?true=' . $row1["id"] . '" ><svg width="20px" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 512"> <path fill="red" d="M256 0c141.39 0 256 114.61 256 256S397.39 512 256 512 0 397.39 0 256 114.61 0 256 0z"/><path fill="red" fill-rule="nonzero" d="M391.27 143.23h19.23c-81.87 90.92-145.34 165.89-202.18 275.52-29.59-63.26-55.96-106.93-114.96-147.42l22.03-4.98c44.09 36.07 67.31 76.16 92.93 130.95 52.31-100.9 110.24-172.44 182.95-254.07z"/><path fill="#fff" fill-rule="nonzero" d="M158.04 235.26c19.67 11.33 32.46 20.75 47.71 37.55 39.53-63.63 82.44-98.89 138.24-148.93l5.45-2.11h61.06c-81.87 90.93-145.34 165.9-202.18 275.53-29.59-63.26-55.96-106.93-114.96-147.43l64.68-14.61z"/></svg></a>';
                    }
                }else{
                    echo '<a>' . $_LANG["none"] . '</a>';
                }
                echo '</div>';
                echo '</td>';


                echo '<td class="px-4 py-3">';
                echo '<div class="flex items-center space-x-4 text-sm justify-center">';
                if ($row1["state"] == '1') {
                    echo '<a href="servers.php?off=' . $row1["id"] . '" ><svg width="20px" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 512"><path fill="#3AAF3C" d="M256 0c141.39 0 256 114.61 256 256S397.39 512 256 512 0 397.39 0 256 114.61 0 256 0z"/><path fill="#0DA10D" fill-rule="nonzero" d="M391.27 143.23h19.23c-81.87 90.92-145.34 165.89-202.18 275.52-29.59-63.26-55.96-106.93-114.96-147.42l22.03-4.98c44.09 36.07 67.31 76.16 92.93 130.95 52.31-100.9 110.24-172.44 182.95-254.07z"/><path fill="#fff" fill-rule="nonzero" d="M158.04 235.26c19.67 11.33 32.46 20.75 47.71 37.55 39.53-63.63 82.44-98.89 138.24-148.93l5.45-2.11h61.06c-81.87 90.93-145.34 165.9-202.18 275.53-29.59-63.26-55.96-106.93-114.96-147.43l64.68-14.61z"/></svg></a>';
                } else {
                    echo '<a href="servers.php?on=' . $row1["id"] . '" ><svg width="20px" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 512"> <path fill="red" d="M256 0c141.39 0 256 114.61 256 256S397.39 512 256 512 0 397.39 0 256 114.61 0 256 0z"/><path fill="red" fill-rule="nonzero" d="M391.27 143.23h19.23c-81.87 90.92-145.34 165.89-202.18 275.52-29.59-63.26-55.96-106.93-114.96-147.42l22.03-4.98c44.09 36.07 67.31 76.16 92.93 130.95 52.31-100.9 110.24-172.44 182.95-254.07z"/><path fill="#fff" fill-rule="nonzero" d="M158.04 235.26c19.67 11.33 32.46 20.75 47.71 37.55 39.53-63.63 82.44-98.89 138.24-148.93l5.45-2.11h61.06c-81.87 90.93-145.34 165.9-202.18 275.53-29.59-63.26-55.96-106.93-114.96-147.43l64.68-14.61z"/></svg></a>';
                }
                echo '</div>';
                echo '</td>';


                if ($row1["port_type"] == "random") {
                    echo '<td class="px-4 py-3 text-xs">';
                    echo '<a href="servers.php?port_type_random=' . $row1["id"] . '"><span class="px-3 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-100 dark:text-green-800 opacity-75">' . $_LANG["random"] . '</span></a>';
                    echo '</td>';
                } else {
                    echo '<td class="px-4 py-3 text-xs">';
                    echo '<a href="servers.php?port_type_auto=' . $row1["id"] . '" ><span class="px-3 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-100 dark:text-red-800 opacity-75">' . $_LANG["auto"] . '</span></a>';
                    echo '</td>';
                }


                if ($row1["type"] == "normal") {
                    echo '<td class="px-4 py-3 text-xs">';
                    echo '<a href="servers.php?type_normal=' . $row1["id"] . '" ><span class="px-3 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-100 dark:text-green-800 opacity-75">' . $_LANG["normal"] . '</span></a>';
                    echo '</td>';
                } else if($row1["type"] == "sanaei") {
                    echo '<td class="px-4 py-3 text-xs">';
                    echo '<a href="servers.php?type_sanaei=' . $row1["id"] . '" ><span class="px-3 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-100 dark:text-red-800 opacity-75">' . $_LANG["sanaei"] . '</span></a>';
                    echo '</td>';
                } else if($row1["type"] == "marzban") {
                    echo '<td class="px-4 py-3 text-xs">';
                    echo '<a href="servers.php?type_marzban=' . $row1["id"] . '" ><span class="px-3 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-100 dark:text-green-800 opacity-75">' . $_LANG["marzban"] . '</span></a>';
                    echo '</td>';
                } else {
                    echo '<td class="px-4 py-3 text-xs">';
                    echo '<a href="servers.php?type_alireza=' . $row1["id"] . '" ><span class="px-3 py-1 font-semibold leading-tight text-blue-700 bg-blue-100 rounded-full dark:bg-blue-100 dark:text-blue-800 opacity-75">' . $_LANG["alireza"] . '</span></a>';
                    echo '</td>';
                }

                echo '</div>';
                echo '</td>';

                echo '<td class="px-4 py-3">';
                echo '<div class="flex items-center space-x-4 text-sm justify-center">';
                echo '<a href="servers.php?delete=' . $row1["id"] . '" ><svg fill="gray" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="20" height="20"><path d="M21,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H3A1,1,0,0,0,3,6H4V19a5.006,5.006,0,0,0,5,5h6a5.006,5.006,0,0,0,5-5V6h1a1,1,0,0,0,0-2ZM11,2h2a3.006,3.006,0,0,1,2.829,2H8.171A3.006,3.006,0,0,1,11,2Zm7,17a3,3,0,0,1-3,3H9a3,3,0,0,1-3-3V6H18Z"/><path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18Z"/><path d="M14,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z"/></svg></a>';
//                    echo '</div>';
//                    echo '</td>';


//                    echo '<td class="px-4 py-3">';
//                    echo '<div class="flex items-center space-x-4 text-sm justify-center">';
                echo '<a href="servers.php?edit=' . $row1["id"] . '" ><svg fill="gray" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="20" height="20"><path d="M1,4.75H3.736a3.728,3.728,0,0,0,7.195,0H23a1,1,0,0,0,0-2H10.931a3.728,3.728,0,0,0-7.195,0H1a1,1,0,0,0,0,2ZM7.333,2a1.75,1.75,0,1,1-1.75,1.75A1.752,1.752,0,0,1,7.333,2Z"/><path d="M23,11H20.264a3.727,3.727,0,0,0-7.194,0H1a1,1,0,0,0,0,2H13.07a3.727,3.727,0,0,0,7.194,0H23a1,1,0,0,0,0-2Zm-6.333,2.75A1.75,1.75,0,1,1,18.417,12,1.752,1.752,0,0,1,16.667,13.75Z"/><path d="M23,19.25H10.931a3.728,3.728,0,0,0-7.195,0H1a1,1,0,0,0,0,2H3.736a3.728,3.728,0,0,0,7.195,0H23a1,1,0,0,0,0-2ZM7.333,22a1.75,1.75,0,1,1,1.75-1.75A1.753,1.753,0,0,1,7.333,22Z"/></svg></a>';
                echo '</div>';
                echo '</td>';

                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
            echo '</div>';

            // Close connection
            //                $conn->close();
            ?>

            <br>
            <br>
            <?php
            $server_edit = server_edit($conn);
            if (is_array($server_edit) || is_object($server_edit)) {
                foreach ($server_edit
                         as $value):
                    echo '
                <div style="width: 80%" class=" mx-auto shadow-xl min-w-0 p-4 bg-white rounded-lg dark:bg-gray-800 text-xs font-semibold tracking-wide text-left text-gray-500 border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
        
        
                            <a style="font-size: 20px"
                            class="m-5 text-xs font-semibold tracking-wide text-left text-gray-500 0 dark:text-gray-400 inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                    >
<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 32 32" width="32px" height="32px" fill="gray"><path d="M 23.90625 3.96875 C 22.859375 3.96875 21.8125 4.375 21 5.1875 L 5.1875 21 L 5.125 21.3125 L 4.03125 26.8125 L 3.71875 28.28125 L 5.1875 27.96875 L 10.6875 26.875 L 11 26.8125 L 26.8125 11 C 28.4375 9.375 28.4375 6.8125 26.8125 5.1875 C 26 4.375 24.953125 3.96875 23.90625 3.96875 Z M 23.90625 5.875 C 24.410156 5.875 24.917969 6.105469 25.40625 6.59375 C 26.378906 7.566406 26.378906 8.621094 25.40625 9.59375 L 24.6875 10.3.125 L 21.71875 7.3125 L 22.40625 6.59375 C 22.894531 6.105469 23.402344 5.875 23.90625 5.875 Z M 20.3125 8.71875 L 23.28125 11.6875 L 11.1875 23.78125 C 10.53125 22.5 9.5 21.46875 8.21875 20.8125 Z M 6.9375 22.4375 C 8.136719 22.921875 9.078125 23.863281 9.5625 25.0625 L 6.28125 25.71875 Z"/></svg>
                        <span class="ml-4"> ' . $_LANG["edit"] . '  [ ' . $value["title"] . ' ]</span>
                    </a>
        <div>
           
        </div>
        
        
        <br>
        
        
        <div>
<form method="post">
<div class="flex relative m-2">
    <span class="dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
        ' . $_LANG["Servername"] . '
    </span>
    <input required name="title_server" style="font-size: 14px;" value="' . $value["title"] . '" type="text" id="with-email" class="dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-blue-400 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-transparent" name="url" placeholder=""/>
    </div>


    <div class="flex relative m-2">
    <span class="dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
        ' . $_LANG["Remark"] . '
    </span>
    <input required name="remark_server" style="font-size: 14px;" value="' . $value["remark"] . '" type="text" id="with-email" class="dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-blue-400 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-transparent" name="url" placeholder=""/>
    </div>
    
    
    <div class="flex relative m-2">
    <span class="dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
        ' . $_LANG["Count"] . '
    </span>
    <input required name="ucount_server" style="font-size: 14px;" value="' . $value["ucount"] . '" type="text" id="with-email" class="dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-blue-400 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-transparent" name="url" placeholder=""/>
    </div>

   
    

    <br>
    
    
        

<div class="flex relative m-2">
    <span class="dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
        Sni
    </span>
    <input name="sni_server" style="font-size: 14px;" value="' . $value["sni"] . '" type="text" id="with-email" class="dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-blue-400 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-transparent" name="url" placeholder=""/>
    </div>


<div class="flex relative m-2">
    <span class="dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
        ' . $_LANG["Headertype"] . '
    </span>
    <input name="header_type_server" style="font-size: 14px;" value="' . $value["header_type"] . '" type="text" id="with-email" class="dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-blue-400 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-transparent" name="url" placeholder="http"/>
    </div>
    <div class="flex relative m-2">
    <span class="dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
        Request header
    </span>
    <input name="request_header_server" style="font-size: 14px;" value="' . $value["request_header"] . '" type="text" id="with-email" class="dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-blue-400 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-transparent" name="url" placeholder="Host:domain.ir"/>
    </div>
    
    <div class="flex relative m-2">
    <span class="dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
        Response header
    </span>
    <input name="response_header_server" style="font-size: 14px;" value="' . $value["response_header"] . '" type="text" id="with-email" class="dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-blue-400 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-transparent" name="url" placeholder=""/>
    </div>


    
    
    
    
        <br>
    
    
        

<div class="flex relative m-2">
    <span class="dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
        ' . $_LANG["Panelurl"] . '
    </span>
    <input required name="panel_url_server" style="font-size: 14px;" value="' . $value["panel_url"] . '" type="text" id="with-email" class="dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-blue-400 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-transparent" name="url" placeholder=""/>
    </div>

<br>


<div class="m-1">
        <label class="text-gray-600 ml-1" for="name" style="font-size: 14px">ip:  
    <textarea name="ip_server" style="font-size: 14px" class="mt-2 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray flex-1 w-full px-4 py-2 text-base text-blue-400 placeholder-gray-400 bg-white border border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-transparent" id="comment" name="comment" rows="3" cols="30">' . $value["ip"] . '</textarea>
    </label>
</div>
    
    
    <div class="flex relative m-2">
    <span class="dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
        ' . $_LANG["Security"] . '
    </span>
    <input name="security_server" style="font-size: 14px;" value="' . $value["security"] . '" type="text" id="with-email" class="dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-blue-400 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-transparent" name="url" placeholder="none"/>
    </div>



   <br>
   
   
   
   
   <div class="flex relative m-2">
    <span class="dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
        ' . $_LANG["Flag"] . '
    </span>
    <input required name="flag_server" style="font-size: 14px;" value="' . $value["flag"] . '" type="text" id="with-email" class="dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-blue-400 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-transparent" name="url" placeholder=""/>
    </div>



<br>



<div class="flex relative m-2">
    <span class="dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
        ' . $_LANG["Username"] . '
    </span>
    <input required name="username_server" style="font-size: 14px;" value="' . $value["username"] . '" type="text" id="with-email" class="dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-red-400 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-transparent" name="url" placeholder=""/>
    </div>
    
    
    <div class="flex relative m-2">
    <span class="dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
        ' . $_LANG["Password"] . '
    </span>
    <input required name="password_server" style="font-size: 14px;" value="' . $value["password"] . '" type="text" id="with-email" class="dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-red-400 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-transparent" name="url" placeholder=""/>
    </div>
    
    
    
    
        <br>
    <div class="m-1">
        <label class="text-gray-600" for="name" style="font-size: 14px"> ' . $_LANG["Tlssettings"] . ':  
        <p style="font-size: 10px;" class="mt-3">Tls: {"serverName": "","certificates": [{"certificateFile": "","keyFile": ""}]} </p> 
        <p style="font-size: 10px;" class="mt-3">Xtls: {"serverName": "","certificates": [{"certificateFile": "","keyFile": ""}],"alpn": []} </p> 
        
    <textarea name="tlsSettings_server" style="font-size: 14px" class="mt-2 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray flex-1 w-full px-4 py-2 text-base text-blue-400 placeholder-gray-400 bg-white border border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-transparent" id="comment" name="comment" rows="2" cols="30">' . $value["tlsSettings"] . '</textarea>
    </label>
</div>


<br>
                  <button name="btn_edit" type="submit" style="background-color: #ccf1db;color:#006e2c !important;"
                  class="justify-end flex px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                  <span>' . $_LANG["save"] . '</span>
                </button>
                </form>

                     </div>
                </div>
                            
                            
                            ';
                endforeach;
            }
            ?>


            <?php
            if (isset($_POST['btn_edit'])) {
                $ip_server_0 = $_POST["ip_server"];
                $panel_url_server_0 = $_POST["panel_url_server"];
                $sni_server_0 = $_POST["sni_server"];
                $header_type_server_0 = $_POST["header_type_server"];
                $request_header_server_0 = $_POST["request_header_server"];
                $response_header_server_0 = $_POST["response_header_server"];
                $security_server_0 = $_POST["security_server"];
                $tlsSettings_server_0 = $_POST["tlsSettings_server"];
                $username_server_0 = $_POST["username_server"];
                $password_server_0 = $_POST["password_server"];
                $title_server_0 = $_POST["title_server"];
                $ucount_server_0 = $_POST["ucount_server"];
                $remark_server_0 = $_POST["remark_server"];
                $flag_server_0 = $_POST["flag_server"];

                $sqlserver_config = "UPDATE server_config SET ip=?,panel_url=?,
                         sni=?,header_type=?,request_header=?,
                         response_header=?,security=?,tlsSettings=?,
                         username=?,password=? WHERE id = ?";
						 
				$stmt = $conn->prepare($sqlserver_config);
				$stmt->bind_param('ssssssssssi', $ip_server_0, $panel_url_server_0, $sni_server_0, $header_type_server_0, $request_header_server_0, $response_header_server_0, $security_server_0, $tlsSettings_server_0, $username_server_0, $password_server_0, $value['id']);
				$stmt->execute();
				$stmt->close();

                $sqlserver_info = "UPDATE server_info SET title=?,ucount=?,remark=?,
                       flag=? WHERE id = ?";
				$stmt = $conn->prepare($sqlserver_info);
				$stmt->bind_param('sissi', $title_server_0, $ucount_server_0, $remark_server_0, $flag_server_0, $value['id']);
				$stmt->execute();
                if (!$stmt) {
					$error = $stmt->error;
					$stmt->close();
                    echo "Error updating tables: " . $error;

                } else {
					$stmt->close();
                    editwizwiz();
                    header("location: servers.php");
                }

            }
            ?>
        </div>
        <br>
        <br>
        <br>
    </main>

</div>
</div>
<?php
include 'includ/footer.php';
?>