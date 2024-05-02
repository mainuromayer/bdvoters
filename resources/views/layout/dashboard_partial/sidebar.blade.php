<!-- SIDEBAR START ======================= -->
<aside class="main-sidebar text-white sidebar-light-dark elevation-1">
    <!-- brand logo start -->
    <a href="{{ url('/dashboard') }}" class="brand-link">
        <span class="pl-2">
            <i style="background-image: linear-gradient(to top right, rgb(12, 9, 88), rgb(0, 34, 141), rgb(37, 93, 157));color: #ffff;" class="fa-solid fa-home p-2 rounded-circle"></i>
        </span>
        <span style="color: #514CA1;font-weight: 700;font-size: 22px;" class="pl-2 brand-text font-wight-bold">Logo</span>
    </a>
    <!-- brand logo end -->

    <!-- sidebar start -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <!-- <li class="nav-header">Menu</li> -->

                <!-- nav-item-1 | dashboard start -->
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link mb-2">
                        <i class="fa-solid fa-chart-line nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <!-- nav-item-1 | dashboard end -->

{{--                <!-- nav-item-2 | customer start -->--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{ url('/customerPage') }}" class="nav-link mb-2">--}}
{{--                        <i class="fa-solid fa-user-friends nav-icon"></i>--}}
{{--                        <p>Customer</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <!-- nav-item-2 | customer end -->--}}

{{--                <!-- nav-item-3 | category start -->--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{ url('/categoryPage') }}" class="nav-link mb-2">--}}
{{--                        <i class="fa-solid fa-bars-staggered nav-icon"></i>--}}
{{--                        <p>Category</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <!-- nav-item-3 | category end -->--}}

{{--                <!-- nav-item-4 | product start -->--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{ url('/productPage') }}" class="nav-link mb-2">--}}
{{--                        <i class="fa-solid fa-bag-shopping nav-icon"></i>--}}
{{--                        <p>Product</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <!-- nav-item-4 | product end -->--}}

{{--                <!-- nav-item-5 | sale start -->--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{ url('/salePage') }}" class="nav-link mb-2">--}}
{{--                        <i class="fa-solid fa-bangladeshi-taka-sign nav-icon"></i>--}}
{{--                        <p>Create Sale</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <!-- nav-item-5 | sale end -->--}}

{{--                <!-- nav-item-6 | invoice start -->--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{ url('/invoicePage') }}" class="nav-link mb-2">--}}
{{--                        <i class="fa-solid fa-file-lines nav-icon"></i>--}}
{{--                        <p>Invoice</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <!-- nav-item-6 | invoice end -->--}}

{{--                <!-- nav-item-7 | report start -->--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{ url('/reportPage') }}" class="nav-link mb-2">--}}
{{--                        <i class="fa-solid fa-chart-column nav-icon"></i>--}}
{{--                        <p>Report</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <!-- nav-item-7 | report end -->--}}

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- sidebar end -->
</aside>
<!-- SIDEBAR END ========================= -->






<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Function to handle navigation link click
        function handleNavLinkClick(event) {
            // Remove the 'active' class from all nav-links
            const navLinks = document.querySelectorAll('.sidebar .nav-link');
            navLinks.forEach((navLink) => {
                navLink.classList.remove('active');
            });

            // Add the 'active' class to the clicked nav-link
            const clickedNavLink = event.currentTarget;
            clickedNavLink.classList.add('active');

            // Save the active nav-link to local storage
            localStorage.setItem('activeNavLink', clickedNavLink.getAttribute('href'));

            // Call the function to set the background and text color
            setActiveNavLinksStyles();
        }

        // Attach click event listeners to all nav-links
        const navLinks = document.querySelectorAll('.sidebar .nav-link');
        navLinks.forEach((navLink) => {
            navLink.addEventListener('click', handleNavLinkClick);
        });

        // Function to set background and text color for active nav-links
        function setActiveNavLinksStyles() {
            // Select all nav-links
            const navLinks = document.querySelectorAll('.sidebar .nav-link');

            // Define the linear gradient background style for the active nav-link
            const activeLinearGradient = 'linear-gradient(to right, #0c0958, #00228d, #255d9d)';
            // Define the text color for active links
            const activeColor = '#ffffff';

            // Iterate through all nav-links
            navLinks.forEach((navLink) => {
                // Check if the nav-link is active
                const isActive = navLink.classList.contains('active');

                // Set background and text color based on whether the nav-link is active or not
                if (isActive) {
                    navLink.style.backgroundImage = activeLinearGradient;
                    navLink.style.color = activeColor;
                } else {
                    // Reset background and text color for inactive links
                    navLink.style.backgroundImage = 'none';
                    navLink.style.color = '';
                }
            });
        }

        // Call the function to set the initial background and text color
        setActiveNavLinksStyles();

        // Check if there's a saved active nav-link in local storage
        const savedActiveNavLink = localStorage.getItem('activeNavLink');
        if (savedActiveNavLink) {
            // Find the corresponding nav-link and add the 'active' class
            const activeNavLink = document.querySelector(`.sidebar .nav-link[href="${savedActiveNavLink}"]`);
            if (activeNavLink) {
                activeNavLink.classList.add('active');

                // Call the function to set the background and text color for the saved active nav-link
                setActiveNavLinksStyles();
            }
        }
    });
</script>

