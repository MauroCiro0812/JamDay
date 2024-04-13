<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bienvenido a JamDAY</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        .z-10 {
            z-index: 10
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">

                @auth
                    <a href="{{ url('/home') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                @else
                    <a href="{{ url('/welcome') }}"
                        class=" ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Bienvenido</a>

                    <a href="{{ route('login') }}"
                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Iniciar</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrarse</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <svg version="1.1" id="Layer_2_00000114066432309402985710000003976910378939295898_"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1000"
                    height="500" viewBox="-100 -50 1000 500" style="enable-background:new 0 0 500 500;"
                    xml:space="preserve">
                    <style type="text/css">
                        .st0 {
                            enable-background: new;
                        }

                        .st1 {
                            fill: #FFFFFF;
                        }
                    </style>
                    <g id="Layer_3">
                        <g>
                            <g class="st0">
                                <path class="st1" d="M468.9,290.5c-3.9-2.1-6.9-5-9-8.8c-2.1-3.8-3.2-8.1-3.2-13s1.1-9.2,3.2-13c2.1-3.8,5.1-6.7,9-8.8
                                        c3.8-2.1,8.2-3.1,13.2-3.1c7,0,13,2.5,18.1,7.4l-6.9,6.9c-3-2.9-6.7-4.3-10.9-4.3c-2.9,0-5.4,0.6-7.6,1.9c-2.2,1.2-3.9,3-5.1,5.3
                                        s-1.8,4.9-1.8,7.8c0,2.9,0.6,5.5,1.8,7.8s2.9,4,5.1,5.3c2.2,1.2,4.7,1.9,7.6,1.9c2.3,0,4.4-0.4,6.5-1.2s3.9-2,5.4-3.5l6.5,7.3
                                        c-5.1,4.9-11.3,7.4-18.5,7.4C477.2,293.7,472.7,292.6,468.9,290.5z" />
                                <path class="st1" d="M506.1,245h10.7v47.5h-10.7V245z" />
                            </g>
                            <g class="st0">
                                <path class="st1" d="M531.5,291.1c-2.8-1.5-4.9-3.5-6.4-6.1s-2.2-5.7-2.2-9.2c0-3.5,0.7-6.5,2.2-9.2c1.5-2.6,3.6-4.7,6.4-6.1
                                        s6-2.2,9.7-2.2c3.7,0,7,0.7,9.8,2.2s5,3.5,6.5,6.1c1.5,2.6,2.2,5.7,2.2,9.2c0,3.5-0.7,6.5-2.2,9.2s-3.6,4.7-6.5,6.1
                                        s-6.1,2.2-9.8,2.2C537.6,293.3,534.3,292.6,531.5,291.1z M547,281.9c1.4-1.6,2.2-3.6,2.2-6.1c0-2.5-0.7-4.5-2.2-6.1
                                        c-1.4-1.6-3.4-2.4-5.7-2.4c-2.3,0-4.2,0.8-5.6,2.4c-1.4,1.6-2.2,3.6-2.2,6.1c0,2.5,0.7,4.5,2.2,6.1c1.4,1.6,3.3,2.4,5.6,2.4
                                        C543.6,284.3,545.5,283.5,547,281.9z" />
                            </g>
                            <g class="st0">
                                <path class="st1"
                                    d="M589.6,291.3c-2.6,1.3-5.6,2-8.9,2c-3.7,0-6.6-1-8.7-3.1c-2.1-2.1-3.2-5.4-3.2-9.9v-12.7h-5.7V259h5.7v-8.4
                                        l10.6-1.2v9.5h8.4v8.5h-8.4v12.7c0,1.4,0.3,2.4,1,3c0.7,0.7,1.6,1,2.8,1c1.3,0,2.6-0.3,3.9-1L589.6,291.3z" />
                                <path class="st1" d="M625,262.4c2.4,2.8,3.6,6.5,3.6,11.2v18.9H618v-18.3c0-2.2-0.5-3.9-1.6-5.1c-1.1-1.2-2.5-1.8-4.4-1.8
                                        c-2.1,0-3.8,0.7-5.1,2.1c-1.3,1.4-1.9,3.2-1.9,5.5v17.7h-10.7V245H605v17.7c2.6-2.9,6-4.4,10.3-4.4
                                        C619.3,258.3,622.6,259.7,625,262.4z" />
                                <path class="st1" d="M637.1,254.1c-1.2-1.1-1.7-2.5-1.7-4.1c0-1.7,0.6-3.1,1.8-4.2c1.2-1.1,2.7-1.6,4.5-1.6
                                        c1.8,0,3.3,0.5,4.5,1.6c1.2,1.1,1.8,2.5,1.8,4.2c0,1.7-0.6,3.1-1.7,4.1c-1.2,1.1-2.7,1.6-4.5,1.6
                                        C639.8,255.7,638.3,255.2,637.1,254.1z M636.3,259h10.7v33.5h-10.7V259z" />
                                <path class="st1" d="M685.6,262.4c2.5,2.7,3.7,6.5,3.7,11.3v18.9h-10.7v-18.3c0-2.2-0.5-3.9-1.6-5.1c-1.1-1.2-2.6-1.8-4.5-1.8
                                        c-2.1,0-3.8,0.7-5,2.1c-1.3,1.4-1.9,3.2-1.9,5.5v17.7h-10.7V259h9.2l0.7,3.9c1.3-1.5,2.9-2.6,4.7-3.5c1.8-0.8,3.9-1.2,6.1-1.2
                                        C679.8,258.3,683.1,259.6,685.6,262.4z" />
                                <path class="st1" d="M730.1,291.4c1.2,1.8,1.9,3.9,1.9,6.3c0,2.8-0.8,5.3-2.3,7.4s-3.7,3.8-6.5,5s-6.1,1.7-9.8,1.7
                                        c-3.6,0-6.8-0.6-9.5-1.8c-2.7-1.2-4.8-2.9-6.3-5c-1.5-2.2-2.2-4.7-2.2-7.5c0-0.7,0-1.3,0.1-1.6h10.3c-0.1,2.2,0.5,3.9,1.9,5.2
                                        s3.3,1.8,5.8,1.8c2.3,0,4.1-0.5,5.5-1.5c1.4-1,2.1-2.4,2.1-4c0-1.7-0.6-3-1.9-4s-3.1-1.4-5.5-1.4c-3.7,0-7-0.7-9.7-2.1
                                        c-2.8-1.4-4.9-3.4-6.5-5.9s-2.3-5.5-2.3-8.9c0-3.3,0.8-6.2,2.3-8.7c1.6-2.6,3.7-4.5,6.5-6c2.8-1.4,6-2.1,9.5-2.1
                                        c2.8,0,5.3,0.5,7.6,1.6l3.9-4.9l7.8,5.6l-4.5,5.2c2.3,2.6,3.4,5.7,3.4,9.2c0,2.5-0.6,4.8-1.8,6.9c-1.2,2.1-2.9,3.8-5.1,5.2
                                        C727.1,288.1,728.8,289.5,730.1,291.4z M719.1,280.8c1.4-1.4,2.2-3.4,2.2-5.8c0-2.4-0.7-4.3-2.1-5.7c-1.4-1.4-3.3-2.1-5.7-2.1
                                        c-2.4,0-4.3,0.7-5.7,2.1c-1.4,1.4-2.2,3.3-2.2,5.7c0,2.4,0.7,4.3,2.2,5.7c1.4,1.5,3.3,2.2,5.7,2.2
                                        C715.8,282.9,717.7,282.2,719.1,280.8z" />
                            </g>
                            <g class="st0">
                                <path class="st1" d="M768.6,259h9.1v8.6h-9.1v25h-10.8v-25h-5.9V259h5.9v-1.8c0-3,0.6-5.5,1.9-7.5c1.3-2,3-3.5,5.1-4.4
                                        c2.1-1,4.3-1.4,6.7-1.4c3.8,0,7,1,9.6,3.1l-3.6,6.7c-0.8-0.5-1.6-0.9-2.2-1.1c-0.7-0.2-1.4-0.3-2.2-0.3c-1.4,0-2.5,0.4-3.3,1.2
                                        c-0.8,0.8-1.2,2-1.2,3.7V259z" />
                            </g>
                            <g class="st0">
                                <path class="st1" d="M789.3,291.1c-2.8-1.5-4.9-3.5-6.4-6.1s-2.2-5.7-2.2-9.2c0-3.5,0.7-6.5,2.2-9.2c1.5-2.6,3.6-4.7,6.4-6.1
                                        c2.8-1.5,6-2.2,9.7-2.2c3.7,0,7,0.7,9.8,2.2s5,3.5,6.5,6.1c1.5,2.6,2.2,5.7,2.2,9.2c0,3.5-0.7,6.5-2.2,9.2
                                        c-1.5,2.6-3.6,4.7-6.5,6.1s-6.1,2.2-9.8,2.2C795.3,293.3,792.1,292.6,789.3,291.1z M804.7,281.9c1.4-1.6,2.2-3.6,2.2-6.1
                                        c0-2.5-0.7-4.5-2.2-6.1c-1.4-1.6-3.4-2.4-5.7-2.4c-2.3,0-4.2,0.8-5.6,2.4c-1.4,1.6-2.2,3.6-2.2,6.1c0,2.5,0.7,4.5,2.2,6.1
                                        c1.4,1.6,3.3,2.4,5.6,2.4C801.4,284.3,803.3,283.5,804.7,281.9z" />
                            </g>
                            <g class="st0">
                                <path class="st1"
                                    d="M847.3,259.1c1.5,0.6,2.9,1.4,4,2.5l-4.5,7.8c-1-0.6-1.8-1-2.6-1.3s-1.7-0.4-2.6-0.4c-2.3,0-4.1,0.7-5.4,2.2
                                        c-1.3,1.4-2,3.6-2,6.4v16.3h-10.7V259h9.3l0.8,4.2c2.2-3.3,5.2-5,9-5C844.2,258.3,845.8,258.6,847.3,259.1z" />
                            </g>
                            <g class="st0">
                            </g>
                            <g class="st0">
                                <path class="st1"
                                    d="M457.6,333l-12,11.7l12,11.6l-7.7,7.5l-17.1-17.1v-4.1l17.1-17.1L457.6,333z" />
                            </g>
                            <g class="st0">
                                <path class="st1"
                                    d="M475.3,358.1h29.9v10.7H463v-54.3h41.4v10.6h-29.1v11h27.5v10.2h-27.5V358.1z" />
                            </g>
                            <g class="st0">
                                <path class="st1"
                                    d="M539.9,330.5h12.9l-16.2,38.3h-12.4l-16.3-38.3h13.3l4.6,11.6l4.7,13.9l4.7-13.9L539.9,330.5z" />
                            </g>
                            <g class="st0">
                                <path class="st1" d="M585.4,332c3,1.6,5.4,3.8,7,6.7c1.6,2.9,2.4,6.2,2.4,10c0,1.2-0.1,2.8-0.4,4.6h-28.1c0.4,2,1.4,3.6,3.2,4.8
                                        c1.8,1.2,4,1.8,6.7,1.8c1.9,0,3.8-0.3,5.6-0.9c1.8-0.6,3.4-1.4,4.7-2.4l6.4,6.8c-2.2,2-4.7,3.6-7.7,4.7c-3,1.1-6.1,1.6-9.5,1.6
                                        c-4.4,0-8.3-0.8-11.6-2.4s-5.8-3.9-7.5-6.9s-2.6-6.5-2.6-10.6c0-3.9,0.9-7.4,2.6-10.5c1.7-3,4.1-5.4,7.2-7.1
                                        c3.1-1.7,6.7-2.5,10.8-2.5C578.7,329.6,582.3,330.4,585.4,332z M569,341.1c-1.5,1.2-2.4,3-2.6,5.2h16.9c-0.2-2.2-1-4-2.4-5.2
                                        s-3.5-1.9-5.9-1.9C572.5,339.2,570.5,339.8,569,341.1z" />
                                <path class="st1" d="M628.6,330.6c1.8,0.6,3.3,1.6,4.6,2.8l-5.1,8.9c-1.1-0.7-2.1-1.2-3-1.5c-0.9-0.3-1.9-0.5-2.9-0.5
                                        c-2.6,0-4.6,0.8-6.1,2.5c-1.5,1.7-2.2,4.1-2.2,7.3v18.6h-12.2v-38.3h10.6l0.9,4.8c2.5-3.8,5.9-5.7,10.2-5.7
                                        C625.1,329.6,626.9,329.9,628.6,330.6z" />
                            </g>
                            <g class="st0">
                                <path class="st1"
                                    d="M664,330.5h13.2l-23.9,54.9h-12.9l7.4-17.1l-14.9-37.8H646l4.4,12.1l4.2,12.5l4.5-12.5L664,330.5z" />
                            </g>
                            <g class="st0">
                            </g>
                            <g class="st0">
                                <path class="st1" d="M736.3,317.8c4.2,2.2,7.5,5.4,9.8,9.5c2.3,4.1,3.4,8.9,3.4,14.3c0,5.4-1.2,10.2-3.4,14.3
                                        c-2.3,4.1-5.6,7.3-9.8,9.5c-4.2,2.2-9.1,3.3-14.7,3.3h-22.2v-54.3h22.2C727.2,314.5,732.1,315.6,736.3,317.8z M732.6,353.3
                                        c2.8-2.9,4.2-6.8,4.2-11.7c0-3.3-0.6-6.1-1.9-8.5c-1.3-2.4-3-4.3-5.3-5.6c-2.3-1.3-4.9-2-7.9-2h-9.5v32.1h9.5
                                        C726.2,357.7,729.9,356.2,732.6,353.3z" />
                            </g>
                            <g class="st0">
                                <path class="st1" d="M796.6,330.5v38.3h-10.5l-0.8-4.6c-3.3,3.6-7.5,5.3-12.7,5.3c-3.6,0-6.7-0.8-9.5-2.5c-2.8-1.7-4.9-4-6.5-7.1
                                        c-1.5-3-2.3-6.5-2.3-10.3s0.8-7.3,2.3-10.3c1.6-3,3.7-5.4,6.5-7.1c2.8-1.7,5.9-2.5,9.5-2.5c2.6,0,5,0.5,7.1,1.4
                                        c2.2,0.9,4,2.2,5.6,3.9l0.8-4.5H796.6z M782,356.6c1.7-1.8,2.6-4.1,2.6-7c0-2.9-0.9-5.2-2.6-7c-1.7-1.8-3.9-2.7-6.6-2.7
                                        c-2.7,0-4.9,0.9-6.6,2.7c-1.7,1.8-2.5,4.1-2.5,7c0,2.8,0.8,5.2,2.5,7c1.7,1.8,3.9,2.7,6.6,2.7C778.1,359.3,780.3,358.4,782,356.6
                                        z" />
                                <path class="st1"
                                    d="M832.4,330.5h13.2l-23.9,54.9h-12.9l7.4-17.1l-14.9-37.8h13.1l4.4,12.1L823,355l4.5-12.5L832.4,330.5z" />
                                <path class="st1"
                                    d="M857.6,325.5l17.1,17.1v4.1l-17.1,17.1l-7.7-7.5l12-11.6l-12-11.7L857.6,325.5z" />
                            </g>
                            <g class="st0">
                                <path class="st1" d="M132.8,31v83.2c0,13.1-2.7,24.4-7.9,34.1c-5.3,9.6-12.8,17.1-22.6,22.3c-9.8,5.2-21.1,7.8-34.1,7.8
                                        c-20.1,0-35.8-5.6-47-16.7c-11.2-11.2-16.9-26.9-17-47.3h33c0.1,10.9,2.9,19.2,8.3,25.1c5.4,5.9,12.9,8.8,22.7,8.8
                                        c9.6,0,17.2-3,22.6-9c5.4-6,8.2-14.5,8.2-25.5V60.3H56.8V31H132.8z" />
                            </g>
                            <g class="st0">
                                <path class="st1"
                                    d="M262.4,73.5v102h-28.1l-2.1-12.2c-8.7,9.5-20,14.2-33.9,14.2c-9.5,0-17.9-2.2-25.3-6.7
                                        c-7.4-4.5-13.1-10.7-17.2-18.8c-4.1-8.1-6.2-17.2-6.2-27.6s2.1-19.5,6.2-27.6c4.1-8.1,9.9-14.3,17.2-18.8
                                        c7.4-4.5,15.8-6.7,25.3-6.7c6.9,0,13.2,1.2,19,3.6c5.8,2.4,10.7,5.9,14.9,10.4l2.1-12H262.4z M223.6,143.2
                                        c4.5-4.8,6.8-11,6.8-18.7c0-7.7-2.3-13.9-6.8-18.7c-4.5-4.7-10.4-7.1-17.6-7.1c-7.2,0-13,2.4-17.4,7.2c-4.5,4.8-6.7,11-6.7,18.6
                                        c0,7.6,2.2,13.8,6.7,18.6c4.5,4.8,10.3,7.2,17.4,7.2C213.2,150.3,219.1,147.9,223.6,143.2z" />
                                <path class="st1" d="M441.7,82.6c7.4,7.6,11.2,18,11.2,31.2v61.7h-32.4v-57.6c0-6.1-1.4-10.8-4.2-14.1c-2.8-3.4-6.8-5.1-11.9-5.1
                                        c-5.6,0-10.1,1.9-13.4,5.8c-3.3,3.9-5,9-5,15.3v55.8h-32.2v-57.6c0-6.1-1.4-10.8-4.1-14.1c-2.8-3.4-6.7-5.1-11.8-5.1
                                        c-5.6,0-10.2,1.9-13.5,5.8c-3.4,3.9-5.1,9-5.1,15.3v55.8h-32.4v-102h28.1l1.9,11.4c3.6-4.4,7.9-7.8,12.9-10.1
                                        c5-2.3,10.4-3.5,16.2-3.5c6.6,0,12.5,1.4,17.8,4.2c5.2,2.8,9.4,6.7,12.4,11.7c8.3-10.6,20-15.9,35.1-15.9
                                        C424.1,71.2,434.2,75,441.7,82.6z" />
                            </g>
                            <g>
                                <g>
                                    <path class="st1" d="M142,246.6c-6.8-12.2-16.4-21.6-28.8-28.2c-12.4-6.6-26.9-9.9-43.3-9.9H41.7v32.9h28.1
                                            c8.8,0,16.7,2,23.4,5.9c6.8,3.9,12,9.4,15.8,16.6c3.7,7.1,5.6,15.5,5.6,25.2c0,14.6-4.1,26.1-12.3,34.7
                                            c-8.2,8.6-19.1,12.9-32.5,12.9H41.7v-95.2H4.2v128.1h65.6c16.5,0,30.9-3.3,43.3-9.9c12.4-6.6,22-16,28.8-28.2
                                            c6.8-12.2,10.2-26.3,10.2-42.4S148.8,258.8,142,246.6L142,246.6z" />
                                </g>
                                <g>
                                    <path class="st1" d="M262.2,208.6h-40l-71.8,161h40l12-29l33.2-76.5c2.5-5.7,10.5-5.6,12.9,0.1l44.6,105.4h40.5L262.2,208.6
                                            L262.2,208.6z" />
                                </g>
                                <g>
                                    <path class="st1" d="M412.9,208.6l-32.1,51.6c-3.1,5-10.5,5-13.5-0.1l-31.3-51.5h-43.9l42.2,65.8l1,1.6l35.5,55.3
                                            c1.1,1.7,3.6,1.8,4.8,0l43-64.3l38.8-58.4L412.9,208.6L412.9,208.6z M375.7,348.9c-1.1,1.7-3.7,1.7-4.8,0l-3.4-5.3L355,324.1
                                            v45.4h37.3V324L379,343.9L375.7,348.9L375.7,348.9z" />
                                </g>
                            </g>
                            <g>
                                <path class="st1"
                                    d="M485,54c-11.7,0-21.2,9.5-21.2,21.2s9.5,21.2,21.2,21.2s21.2-9.5,21.2-21.2S496.7,54,485,54 M485,92.2
                                        c-9.4,0-17-7.6-17-17s7.6-17,17-17s17,7.6,17,17S494.4,92.2,485,92.2 M485.5,77.9h-3.1v6.9h-3.8V66.1h6.9c2.2,0,3.9,0.5,5.1,1.5
                                        c1.2,1,1.8,2.3,1.8,4.2c0,1.3-0.3,2.3-0.8,3.2c-0.5,0.8-1.4,1.5-2.5,2l4,7.6v0.2H489L485.5,77.9 M482.5,74.8h3.1
                                        c1,0,1.7-0.2,2.2-0.7s0.8-1.2,0.8-2s-0.2-1.6-0.7-2.1c-0.5-0.5-1.2-0.7-2.3-0.7h-3.1L482.5,74.8L482.5,74.8z" />
                            </g>
                            <g>
                                <rect x="4.1" y="31" class="st1" width="29.3" height="29.3" />
                            </g>
                        </g>
                    </g>
                </svg>
            </div>

            <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                    <div class="flex items-center gap-4">
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
