<style>
    .bg {
        width: 100%;
        height: 100%;
        background-image: url("{{ asset('assets/images/bg-certificate.png') }}");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }

    .wrapper {
        width: 100%;
        height: 100%;
        text-align: center;
    }

    .mt-10 {
        padding-top: 26%;
    }

    .mb-3 {
        margin-bottom: 10px;
    }

    .font-basic {
        font-family: 'mplus', sans-serif;
        font-weight: normal;
        font-size: 18px;
        line-height: 23px;
        letter-spacing: 0.1em;
        margin-bottom: 0;
        padding-bottom: 0;

        color: rgba(182, 179, 255, 0.45);
    }

    .font-fullname {
        font-family: 'mplus', sans-serif;
        font-weight: bold;
        font-size: 68px;
        line-height: 70px;
        /* identical to box height */
        letter-spacing: 0.065em;
        margin-top: 32px;
        margin-bottom: 32px;
        padding-top: 0;

        color: #474554;
    }

    .logo {
        margin-top: 10%;
    }
</style>

<div class="bg">
    <div class="wrapper">
        <div class="mt-10">
            <div class="font-basic">
                This is to certify that
            </div>
            <h1 class="font-fullname">
                {{ $full_name }}
            </h1>
            <div class="font-basic mb-3">
                Successfully completed the online course
            </div>
            <div class="font-basic mb-3">
                {{ $course }}
            </div>
            <div class="font-basic mb-3">
                on {{ $issue_date }}
            </div>

            <div class="logo">
                <img src="{{ asset('assets/images/logo-certificate.png') }}" width="400" />
            </div>
        </div>
    </div>
</div>
