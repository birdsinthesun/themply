O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:43:"C:\xampp\htdocs\rats\assets\styles\app.scss";s:10:"publicPath";s:55:"/assets/styles/app-700d8cc518612d81581452e1cf735da4.css";s:23:"publicPathWithoutDigest";s:22:"/assets/styles/app.css";s:15:"publicExtension";s:3:"css";s:7:"content";s:317426:"@charset "UTF-8";
/*Lux Theme https://bootswatch.com/lux/ */
/*!
 * Bootstrap  v5.3.3 (https://getbootstrap.com/)
 * Copyright 2011-2024 The Bootstrap Authors
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
@import url("https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;500;600;700&display=swap");
:root,
[data-bs-theme=light] {
  --bs-blue: #007bff;
  --bs-indigo: #6610f2;
  --bs-purple: #6f42c1;
  --bs-pink: #e83e8c;
  --bs-red: #d9534f;
  --bs-orange: #fd7e14;
  --bs-yellow: #f0ad4e;
  --bs-green: #4bbf73;
  --bs-teal: #20c997;
  --bs-cyan: #1f9bcf;
  --bs-black: #000;
  --bs-white: #fff;
  --bs-gray: #919aa1;
  --bs-gray-dark: #343a40;
  --bs-gray-100: #f8f9fa;
  --bs-gray-200: #f7f7f9;
  --bs-gray-300: #eceeef;
  --bs-gray-400: #ced4da;
  --bs-gray-500: #adb5bd;
  --bs-gray-600: #919aa1;
  --bs-gray-700: #55595c;
  --bs-gray-800: #343a40;
  --bs-gray-900: #1a1a1a;
  --bs-primary: #1a1a1a;
  --bs-secondary: #fff;
  --bs-success: #4bbf73;
  --bs-info: #1f9bcf;
  --bs-warning: #f0ad4e;
  --bs-danger: #d9534f;
  --bs-light: #fff;
  --bs-dark: #343a40;
  --bs-primary-rgb: 26, 26, 26;
  --bs-secondary-rgb: 255, 255, 255;
  --bs-success-rgb: 75, 191, 115;
  --bs-info-rgb: 31, 155, 207;
  --bs-warning-rgb: 240, 173, 78;
  --bs-danger-rgb: 217, 83, 79;
  --bs-light-rgb: 255, 255, 255;
  --bs-dark-rgb: 52, 58, 64;
  --bs-primary-text-emphasis: #0a0a0a;
  --bs-secondary-text-emphasis: #666666;
  --bs-success-text-emphasis: #1e4c2e;
  --bs-info-text-emphasis: #0c3e53;
  --bs-warning-text-emphasis: #60451f;
  --bs-danger-text-emphasis: #572120;
  --bs-light-text-emphasis: #55595c;
  --bs-dark-text-emphasis: #55595c;
  --bs-primary-bg-subtle: #d1d1d1;
  --bs-secondary-bg-subtle: white;
  --bs-success-bg-subtle: #dbf2e3;
  --bs-info-bg-subtle: #d2ebf5;
  --bs-warning-bg-subtle: #fcefdc;
  --bs-danger-bg-subtle: #f7dddc;
  --bs-light-bg-subtle: #fcfcfd;
  --bs-dark-bg-subtle: #ced4da;
  --bs-primary-border-subtle: #a3a3a3;
  --bs-secondary-border-subtle: white;
  --bs-success-border-subtle: #b7e5c7;
  --bs-info-border-subtle: #a5d7ec;
  --bs-warning-border-subtle: #f9deb8;
  --bs-danger-border-subtle: #f0bab9;
  --bs-light-border-subtle: #f7f7f9;
  --bs-dark-border-subtle: #adb5bd;
  --bs-white-rgb: 255, 255, 255;
  --bs-black-rgb: 0, 0, 0;
  --bs-font-sans-serif: "Nunito Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
  --bs-body-font-family: var(--bs-font-sans-serif);
  --bs-body-font-size: 1rem;
  --bs-body-font-weight: 300;
  --bs-body-line-height: 1.5;
  --bs-body-color: #55595c;
  --bs-body-color-rgb: 85, 89, 92;
  --bs-body-bg: #fff;
  --bs-body-bg-rgb: 255, 255, 255;
  --bs-emphasis-color: #000;
  --bs-emphasis-color-rgb: 0, 0, 0;
  --bs-secondary-color: rgba(85, 89, 92, 0.75);
  --bs-secondary-color-rgb: 85, 89, 92;
  --bs-secondary-bg: #f7f7f9;
  --bs-secondary-bg-rgb: 247, 247, 249;
  --bs-tertiary-color: rgba(85, 89, 92, 0.5);
  --bs-tertiary-color-rgb: 85, 89, 92;
  --bs-tertiary-bg: #f8f9fa;
  --bs-tertiary-bg-rgb: 248, 249, 250;
  --bs-heading-color: #1a1a1a;
  --bs-link-color: #1a1a1a;
  --bs-link-color-rgb: 26, 26, 26;
  --bs-link-decoration: underline;
  --bs-link-hover-color: #151515;
  --bs-link-hover-color-rgb: 21, 21, 21;
  --bs-code-color: #e83e8c;
  --bs-highlight-color: #55595c;
  --bs-highlight-bg: #fcefdc;
  --bs-border-width: 1px;
  --bs-border-style: solid;
  --bs-border-color: #eceeef;
  --bs-border-color-translucent: rgba(0, 0, 0, 0.175);
  --bs-border-radius: 0.375rem;
  --bs-border-radius-sm: 0.25rem;
  --bs-border-radius-lg: 0.5rem;
  --bs-border-radius-xl: 1rem;
  --bs-border-radius-xxl: 2rem;
  --bs-border-radius-2xl: var(--bs-border-radius-xxl);
  --bs-border-radius-pill: 50rem;
  --bs-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  --bs-box-shadow-sm: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
  --bs-box-shadow-lg: 0 1rem 3rem rgba(0, 0, 0, 0.175);
  --bs-box-shadow-inset: inset 0 1px 2px rgba(0, 0, 0, 0.075);
  --bs-focus-ring-width: 0.25rem;
  --bs-focus-ring-opacity: 0.25;
  --bs-focus-ring-color: rgba(26, 26, 26, 0.25);
  --bs-form-valid-color: #4bbf73;
  --bs-form-valid-border-color: #4bbf73;
  --bs-form-invalid-color: #d9534f;
  --bs-form-invalid-border-color: #d9534f;
}

[data-bs-theme=dark] {
  color-scheme: dark;
  --bs-body-color: #eceeef;
  --bs-body-color-rgb: 236, 238, 239;
  --bs-body-bg: #1a1a1a;
  --bs-body-bg-rgb: 26, 26, 26;
  --bs-emphasis-color: #fff;
  --bs-emphasis-color-rgb: 255, 255, 255;
  --bs-secondary-color: rgba(236, 238, 239, 0.75);
  --bs-secondary-color-rgb: 236, 238, 239;
  --bs-secondary-bg: #343a40;
  --bs-secondary-bg-rgb: 52, 58, 64;
  --bs-tertiary-color: rgba(236, 238, 239, 0.5);
  --bs-tertiary-color-rgb: 236, 238, 239;
  --bs-tertiary-bg: #272a2d;
  --bs-tertiary-bg-rgb: 39, 42, 45;
  --bs-primary-text-emphasis: #767676;
  --bs-secondary-text-emphasis: white;
  --bs-success-text-emphasis: #93d9ab;
  --bs-info-text-emphasis: #79c3e2;
  --bs-warning-text-emphasis: #f6ce95;
  --bs-danger-text-emphasis: #e89895;
  --bs-light-text-emphasis: #f8f9fa;
  --bs-dark-text-emphasis: #eceeef;
  --bs-primary-bg-subtle: #050505;
  --bs-secondary-bg-subtle: #333333;
  --bs-success-bg-subtle: #0f2617;
  --bs-info-bg-subtle: #061f29;
  --bs-warning-bg-subtle: #302310;
  --bs-danger-bg-subtle: #2b1110;
  --bs-light-bg-subtle: #343a40;
  --bs-dark-bg-subtle: #1a1d20;
  --bs-primary-border-subtle: #101010;
  --bs-secondary-border-subtle: #999999;
  --bs-success-border-subtle: #2d7345;
  --bs-info-border-subtle: #135d7c;
  --bs-warning-border-subtle: #90682f;
  --bs-danger-border-subtle: #82322f;
  --bs-light-border-subtle: #55595c;
  --bs-dark-border-subtle: #343a40;
  --bs-heading-color: inherit;
  --bs-link-color: #767676;
  --bs-link-hover-color: #919191;
  --bs-link-color-rgb: 118, 118, 118;
  --bs-link-hover-color-rgb: 145, 145, 145;
  --bs-code-color: #f18bba;
  --bs-highlight-color: #eceeef;
  --bs-highlight-bg: #60451f;
  --bs-border-color: #55595c;
  --bs-border-color-translucent: rgba(255, 255, 255, 0.15);
  --bs-form-valid-color: #93d9ab;
  --bs-form-valid-border-color: #93d9ab;
  --bs-form-invalid-color: #e89895;
  --bs-form-invalid-border-color: #e89895;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

@media (prefers-reduced-motion: no-preference) {
  :root {
    scroll-behavior: smooth;
  }
}

body {
  margin: 0;
  font-family: var(--bs-body-font-family);
  font-size: var(--bs-body-font-size);
  font-weight: var(--bs-body-font-weight);
  line-height: var(--bs-body-line-height);
  color: var(--bs-body-color);
  text-align: var(--bs-body-text-align);
  background-color: var(--bs-body-bg);
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

hr {
  margin: 1rem 0;
  color: inherit;
  border: 0;
  border-top: var(--bs-border-width) solid;
  opacity: 0.25;
}

h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
  margin-top: 0;
  margin-bottom: 0.5rem;
  font-weight: 600;
  line-height: 1.2;
  color: var(--bs-heading-color);
}

h1, .h1 {
  font-size: calc(1.325rem + 0.9vw);
}
@media (min-width: 1200px) {
  h1, .h1 {
    font-size: 2rem;
  }
}

h2, .h2 {
  font-size: calc(1.3rem + 0.6vw);
}
@media (min-width: 1200px) {
  h2, .h2 {
    font-size: 1.75rem;
  }
}

h3, .h3 {
  font-size: calc(1.275rem + 0.3vw);
}
@media (min-width: 1200px) {
  h3, .h3 {
    font-size: 1.5rem;
  }
}

h4, .h4 {
  font-size: 1.25rem;
}

h5, .h5 {
  font-size: 1rem;
}

h6, .h6 {
  font-size: 0.75rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title] {
  text-decoration: underline dotted;
  cursor: help;
  text-decoration-skip-ink: none;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul {
  padding-left: 2rem;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 600;
}

dd {
  margin-bottom: 0.5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

b,
strong {
  font-weight: bolder;
}

small, .small {
  font-size: 0.875em;
}

mark, .mark {
  padding: 0.1875em;
  color: var(--bs-highlight-color);
  background-color: var(--bs-highlight-bg);
}

sub,
sup {
  position: relative;
  font-size: 0.75em;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

a {
  color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));
  text-decoration: underline;
}
a:hover {
  --bs-link-color-rgb: var(--bs-link-hover-color-rgb);
}

a:not([href]):not([class]), a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none;
}

pre,
code,
kbd,
samp {
  font-family: var(--bs-font-monospace);
  font-size: 1em;
}

pre {
  display: block;
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  font-size: 0.875em;
}
pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}

code {
  font-size: 0.875em;
  color: var(--bs-code-color);
  word-wrap: break-word;
}
a > code {
  color: inherit;
}

kbd {
  padding: 0.1875rem 0.375rem;
  font-size: 0.875em;
  color: var(--bs-body-bg);
  background-color: var(--bs-body-color);
}
kbd kbd {
  padding: 0;
  font-size: 1em;
}

figure {
  margin: 0 0 1rem;
}

img,
svg {
  vertical-align: middle;
}

table {
  caption-side: bottom;
  border-collapse: collapse;
}

caption {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  color: var(--bs-secondary-color);
  text-align: left;
}

th {
  text-align: inherit;
  text-align: -webkit-match-parent;
}

thead,
tbody,
tfoot,
tr,
td,
th {
  border-color: inherit;
  border-style: solid;
  border-width: 0;
}

label {
  display: inline-block;
}

button {
  border-radius: 0;
}

button:focus:not(:focus-visible) {
  outline: 0;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
select {
  text-transform: none;
}

[role=button] {
  cursor: pointer;
}

select {
  word-wrap: normal;
}
select:disabled {
  opacity: 1;
}

[list]:not([type=date]):not([type=datetime-local]):not([type=month]):not([type=week]):not([type=time])::-webkit-calendar-picker-indicator {
  display: none !important;
}

button,
[type=button],
[type=reset],
[type=submit] {
  -webkit-appearance: button;
}
button:not(:disabled),
[type=button]:not(:disabled),
[type=reset]:not(:disabled),
[type=submit]:not(:disabled) {
  cursor: pointer;
}

::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

textarea {
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  float: left;
  width: 100%;
  padding: 0;
  margin-bottom: 0.5rem;
  font-size: calc(1.275rem + 0.3vw);
  line-height: inherit;
}
@media (min-width: 1200px) {
  legend {
    font-size: 1.5rem;
  }
}
legend + * {
  clear: left;
}

::-webkit-datetime-edit-fields-wrapper,
::-webkit-datetime-edit-text,
::-webkit-datetime-edit-minute,
::-webkit-datetime-edit-hour-field,
::-webkit-datetime-edit-day-field,
::-webkit-datetime-edit-month-field,
::-webkit-datetime-edit-year-field {
  padding: 0;
}

::-webkit-inner-spin-button {
  height: auto;
}

[type=search] {
  -webkit-appearance: textfield;
  outline-offset: -2px;
}

/* rtl:raw:
[type="tel"],
[type="url"],
[type="email"],
[type="number"] {
  direction: ltr;
}
*/
::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-color-swatch-wrapper {
  padding: 0;
}

::file-selector-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

iframe {
  border: 0;
}

summary {
  display: list-item;
  cursor: pointer;
}

progress {
  vertical-align: baseline;
}

[hidden] {
  display: none !important;
}

.lead {
  font-size: 1.25rem;
  font-weight: 300;
}

.display-1 {
  font-size: calc(1.625rem + 4.5vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-1 {
    font-size: 5rem;
  }
}

.display-2 {
  font-size: calc(1.575rem + 3.9vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-2 {
    font-size: 4.5rem;
  }
}

.display-3 {
  font-size: calc(1.525rem + 3.3vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-3 {
    font-size: 4rem;
  }
}

.display-4 {
  font-size: calc(1.475rem + 2.7vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-4 {
    font-size: 3.5rem;
  }
}

.display-5 {
  font-size: calc(1.425rem + 2.1vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-5 {
    font-size: 3rem;
  }
}

.display-6 {
  font-size: calc(1.375rem + 1.5vw);
  font-weight: 300;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-6 {
    font-size: 2.5rem;
  }
}

.list-unstyled {
  padding-left: 0;
  list-style: none;
}

.list-inline {
  padding-left: 0;
  list-style: none;
}

.list-inline-item {
  display: inline-block;
}
.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}

.initialism {
  font-size: 0.875em;
  text-transform: uppercase;
}

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem;
}
.blockquote > :last-child {
  margin-bottom: 0;
}

.blockquote-footer {
  margin-top: -1rem;
  margin-bottom: 1rem;
  font-size: 0.875em;
  color: #919aa1;
}
.blockquote-footer::before {
  content: "— ";
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.img-thumbnail {
  padding: 0.25rem;
  background-color: var(--bs-body-bg);
  border: var(--bs-border-width) solid var(--bs-border-color);
  max-width: 100%;
  height: auto;
}

.figure {
  display: inline-block;
}

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}

.figure-caption {
  font-size: 0.875em;
  color: var(--bs-secondary-color);
}

.container,
.container-fluid,
.container-xxl,
.container-xl,
.container-lg,
.container-md,
.container-sm {
  --bs-gutter-x: 1.5rem;
  --bs-gutter-y: 0;
  width: 100%;
  padding-right: calc(var(--bs-gutter-x) * 0.5);
  padding-left: calc(var(--bs-gutter-x) * 0.5);
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container-sm, .container {
    max-width: 540px;
  }
}
@media (min-width: 768px) {
  .container-md, .container-sm, .container {
    max-width: 720px;
  }
}
@media (min-width: 992px) {
  .container-lg, .container-md, .container-sm, .container {
    max-width: 960px;
  }
}
@media (min-width: 1200px) {
  .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1140px;
  }
}
@media (min-width: 1400px) {
  .container-xxl, .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1320px;
  }
}
:root {
  --bs-breakpoint-xs: 0;
  --bs-breakpoint-sm: 576px;
  --bs-breakpoint-md: 768px;
  --bs-breakpoint-lg: 992px;
  --bs-breakpoint-xl: 1200px;
  --bs-breakpoint-xxl: 1400px;
}

.row {
  --bs-gutter-x: 1.5rem;
  --bs-gutter-y: 0;
  display: flex;
  flex-wrap: wrap;
  margin-top: calc(-1 * var(--bs-gutter-y));
  margin-right: calc(-0.5 * var(--bs-gutter-x));
  margin-left: calc(-0.5 * var(--bs-gutter-x));
}
.row > * {
  flex-shrink: 0;
  width: 100%;
  max-width: 100%;
  padding-right: calc(var(--bs-gutter-x) * 0.5);
  padding-left: calc(var(--bs-gutter-x) * 0.5);
  margin-top: var(--bs-gutter-y);
}

.col {
  flex: 1 0 0%;
}

.row-cols-auto > * {
  flex: 0 0 auto;
  width: auto;
}

.row-cols-1 > * {
  flex: 0 0 auto;
  width: 100%;
}

.row-cols-2 > * {
  flex: 0 0 auto;
  width: 50%;
}

.row-cols-3 > * {
  flex: 0 0 auto;
  width: 33.33333333%;
}

.row-cols-4 > * {
  flex: 0 0 auto;
  width: 25%;
}

.row-cols-5 > * {
  flex: 0 0 auto;
  width: 20%;
}

.row-cols-6 > * {
  flex: 0 0 auto;
  width: 16.66666667%;
}

.col-auto {
  flex: 0 0 auto;
  width: auto;
}

.col-1 {
  flex: 0 0 auto;
  width: 8.33333333%;
}

.col-2 {
  flex: 0 0 auto;
  width: 16.66666667%;
}

.col-3 {
  flex: 0 0 auto;
  width: 25%;
}

.col-4 {
  flex: 0 0 auto;
  width: 33.33333333%;
}

.col-5 {
  flex: 0 0 auto;
  width: 41.66666667%;
}

.col-6 {
  flex: 0 0 auto;
  width: 50%;
}

.col-7 {
  flex: 0 0 auto;
  width: 58.33333333%;
}

.col-8 {
  flex: 0 0 auto;
  width: 66.66666667%;
}

.col-9 {
  flex: 0 0 auto;
  width: 75%;
}

.col-10 {
  flex: 0 0 auto;
  width: 83.33333333%;
}

.col-11 {
  flex: 0 0 auto;
  width: 91.66666667%;
}

.col-12 {
  flex: 0 0 auto;
  width: 100%;
}

.offset-1 {
  margin-left: 8.33333333%;
}

.offset-2 {
  margin-left: 16.66666667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.33333333%;
}

.offset-5 {
  margin-left: 41.66666667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.33333333%;
}

.offset-8 {
  margin-left: 66.66666667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.33333333%;
}

.offset-11 {
  margin-left: 91.66666667%;
}

.g-0,
.gx-0 {
  --bs-gutter-x: 0;
}

.g-0,
.gy-0 {
  --bs-gutter-y: 0;
}

.g-1,
.gx-1 {
  --bs-gutter-x: 0.25rem;
}

.g-1,
.gy-1 {
  --bs-gutter-y: 0.25rem;
}

.g-2,
.gx-2 {
  --bs-gutter-x: 0.5rem;
}

.g-2,
.gy-2 {
  --bs-gutter-y: 0.5rem;
}

.g-3,
.gx-3 {
  --bs-gutter-x: 1rem;
}

.g-3,
.gy-3 {
  --bs-gutter-y: 1rem;
}

.g-4,
.gx-4 {
  --bs-gutter-x: 1.5rem;
}

.g-4,
.gy-4 {
  --bs-gutter-y: 1.5rem;
}

.g-5,
.gx-5 {
  --bs-gutter-x: 3rem;
}

.g-5,
.gy-5 {
  --bs-gutter-y: 3rem;
}

@media (min-width: 576px) {
  .col-sm {
    flex: 1 0 0%;
  }
  .row-cols-sm-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-sm-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-sm-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-sm-3 > * {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .row-cols-sm-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-sm-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-sm-6 > * {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-sm-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-sm-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-sm-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-sm-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-sm-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-sm-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-sm-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-sm-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-sm-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-sm-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-sm-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-sm-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-sm-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.33333333%;
  }
  .offset-sm-2 {
    margin-left: 16.66666667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.33333333%;
  }
  .offset-sm-5 {
    margin-left: 41.66666667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.33333333%;
  }
  .offset-sm-8 {
    margin-left: 66.66666667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.33333333%;
  }
  .offset-sm-11 {
    margin-left: 91.66666667%;
  }
  .g-sm-0,
  .gx-sm-0 {
    --bs-gutter-x: 0;
  }
  .g-sm-0,
  .gy-sm-0 {
    --bs-gutter-y: 0;
  }
  .g-sm-1,
  .gx-sm-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-sm-1,
  .gy-sm-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-sm-2,
  .gx-sm-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-sm-2,
  .gy-sm-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-sm-3,
  .gx-sm-3 {
    --bs-gutter-x: 1rem;
  }
  .g-sm-3,
  .gy-sm-3 {
    --bs-gutter-y: 1rem;
  }
  .g-sm-4,
  .gx-sm-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-sm-4,
  .gy-sm-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-sm-5,
  .gx-sm-5 {
    --bs-gutter-x: 3rem;
  }
  .g-sm-5,
  .gy-sm-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 768px) {
  .col-md {
    flex: 1 0 0%;
  }
  .row-cols-md-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-md-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-md-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-md-3 > * {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .row-cols-md-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-md-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-md-6 > * {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-md-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-md-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-md-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-md-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-md-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-md-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-md-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-md-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-md-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-md-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-md-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-md-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-md-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.33333333%;
  }
  .offset-md-2 {
    margin-left: 16.66666667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.33333333%;
  }
  .offset-md-5 {
    margin-left: 41.66666667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.33333333%;
  }
  .offset-md-8 {
    margin-left: 66.66666667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.33333333%;
  }
  .offset-md-11 {
    margin-left: 91.66666667%;
  }
  .g-md-0,
  .gx-md-0 {
    --bs-gutter-x: 0;
  }
  .g-md-0,
  .gy-md-0 {
    --bs-gutter-y: 0;
  }
  .g-md-1,
  .gx-md-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-md-1,
  .gy-md-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-md-2,
  .gx-md-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-md-2,
  .gy-md-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-md-3,
  .gx-md-3 {
    --bs-gutter-x: 1rem;
  }
  .g-md-3,
  .gy-md-3 {
    --bs-gutter-y: 1rem;
  }
  .g-md-4,
  .gx-md-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-md-4,
  .gy-md-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-md-5,
  .gx-md-5 {
    --bs-gutter-x: 3rem;
  }
  .g-md-5,
  .gy-md-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 992px) {
  .col-lg {
    flex: 1 0 0%;
  }
  .row-cols-lg-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-lg-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-lg-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-lg-3 > * {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .row-cols-lg-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-lg-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-lg-6 > * {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-lg-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-lg-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-lg-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-lg-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-lg-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-lg-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-lg-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-lg-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-lg-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-lg-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-lg-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-lg-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-lg-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.33333333%;
  }
  .offset-lg-2 {
    margin-left: 16.66666667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.33333333%;
  }
  .offset-lg-5 {
    margin-left: 41.66666667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.33333333%;
  }
  .offset-lg-8 {
    margin-left: 66.66666667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.33333333%;
  }
  .offset-lg-11 {
    margin-left: 91.66666667%;
  }
  .g-lg-0,
  .gx-lg-0 {
    --bs-gutter-x: 0;
  }
  .g-lg-0,
  .gy-lg-0 {
    --bs-gutter-y: 0;
  }
  .g-lg-1,
  .gx-lg-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-lg-1,
  .gy-lg-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-lg-2,
  .gx-lg-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-lg-2,
  .gy-lg-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-lg-3,
  .gx-lg-3 {
    --bs-gutter-x: 1rem;
  }
  .g-lg-3,
  .gy-lg-3 {
    --bs-gutter-y: 1rem;
  }
  .g-lg-4,
  .gx-lg-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-lg-4,
  .gy-lg-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-lg-5,
  .gx-lg-5 {
    --bs-gutter-x: 3rem;
  }
  .g-lg-5,
  .gy-lg-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 1200px) {
  .col-xl {
    flex: 1 0 0%;
  }
  .row-cols-xl-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-xl-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-xl-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-xl-3 > * {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .row-cols-xl-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-xl-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-xl-6 > * {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-xl-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-xl-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-xl-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-xl-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-xl-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-xl-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-xl-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-xl-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-xl-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-xl-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-xl-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-xl-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-xl-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.33333333%;
  }
  .offset-xl-2 {
    margin-left: 16.66666667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.33333333%;
  }
  .offset-xl-5 {
    margin-left: 41.66666667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.33333333%;
  }
  .offset-xl-8 {
    margin-left: 66.66666667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.33333333%;
  }
  .offset-xl-11 {
    margin-left: 91.66666667%;
  }
  .g-xl-0,
  .gx-xl-0 {
    --bs-gutter-x: 0;
  }
  .g-xl-0,
  .gy-xl-0 {
    --bs-gutter-y: 0;
  }
  .g-xl-1,
  .gx-xl-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-xl-1,
  .gy-xl-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-xl-2,
  .gx-xl-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-xl-2,
  .gy-xl-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-xl-3,
  .gx-xl-3 {
    --bs-gutter-x: 1rem;
  }
  .g-xl-3,
  .gy-xl-3 {
    --bs-gutter-y: 1rem;
  }
  .g-xl-4,
  .gx-xl-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-xl-4,
  .gy-xl-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-xl-5,
  .gx-xl-5 {
    --bs-gutter-x: 3rem;
  }
  .g-xl-5,
  .gy-xl-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 1400px) {
  .col-xxl {
    flex: 1 0 0%;
  }
  .row-cols-xxl-auto > * {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-xxl-1 > * {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-xxl-2 > * {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-xxl-3 > * {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .row-cols-xxl-4 > * {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-xxl-5 > * {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-xxl-6 > * {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-xxl-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-xxl-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-xxl-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-xxl-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-xxl-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-xxl-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-xxl-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-xxl-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-xxl-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-xxl-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-xxl-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-xxl-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-xxl-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-xxl-0 {
    margin-left: 0;
  }
  .offset-xxl-1 {
    margin-left: 8.33333333%;
  }
  .offset-xxl-2 {
    margin-left: 16.66666667%;
  }
  .offset-xxl-3 {
    margin-left: 25%;
  }
  .offset-xxl-4 {
    margin-left: 33.33333333%;
  }
  .offset-xxl-5 {
    margin-left: 41.66666667%;
  }
  .offset-xxl-6 {
    margin-left: 50%;
  }
  .offset-xxl-7 {
    margin-left: 58.33333333%;
  }
  .offset-xxl-8 {
    margin-left: 66.66666667%;
  }
  .offset-xxl-9 {
    margin-left: 75%;
  }
  .offset-xxl-10 {
    margin-left: 83.33333333%;
  }
  .offset-xxl-11 {
    margin-left: 91.66666667%;
  }
  .g-xxl-0,
  .gx-xxl-0 {
    --bs-gutter-x: 0;
  }
  .g-xxl-0,
  .gy-xxl-0 {
    --bs-gutter-y: 0;
  }
  .g-xxl-1,
  .gx-xxl-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-xxl-1,
  .gy-xxl-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-xxl-2,
  .gx-xxl-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-xxl-2,
  .gy-xxl-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-xxl-3,
  .gx-xxl-3 {
    --bs-gutter-x: 1rem;
  }
  .g-xxl-3,
  .gy-xxl-3 {
    --bs-gutter-y: 1rem;
  }
  .g-xxl-4,
  .gx-xxl-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-xxl-4,
  .gy-xxl-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-xxl-5,
  .gx-xxl-5 {
    --bs-gutter-x: 3rem;
  }
  .g-xxl-5,
  .gy-xxl-5 {
    --bs-gutter-y: 3rem;
  }
}
.table {
  --bs-table-color-type: initial;
  --bs-table-bg-type: initial;
  --bs-table-color-state: initial;
  --bs-table-bg-state: initial;
  --bs-table-color: var(--bs-emphasis-color);
  --bs-table-bg: var(--bs-body-bg);
  --bs-table-border-color: rgba(0, 0, 0, 0.05);
  --bs-table-accent-bg: transparent;
  --bs-table-striped-color: var(--bs-emphasis-color);
  --bs-table-striped-bg: rgba(var(--bs-emphasis-color-rgb), 0.05);
  --bs-table-active-color: var(--bs-emphasis-color);
  --bs-table-active-bg: rgba(var(--bs-emphasis-color-rgb), 0.1);
  --bs-table-hover-color: var(--bs-emphasis-color);
  --bs-table-hover-bg: rgba(var(--bs-emphasis-color-rgb), 0.075);
  width: 100%;
  margin-bottom: 1rem;
  vertical-align: top;
  border-color: var(--bs-table-border-color);
}
.table > :not(caption) > * > * {
  padding: 0.5rem 0.5rem;
  color: var(--bs-table-color-state, var(--bs-table-color-type, var(--bs-table-color)));
  background-color: var(--bs-table-bg);
  border-bottom-width: var(--bs-border-width);
  box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state, var(--bs-table-bg-type, var(--bs-table-accent-bg)));
}
.table > tbody {
  vertical-align: inherit;
}
.table > thead {
  vertical-align: bottom;
}

.table-group-divider {
  border-top: calc(var(--bs-border-width) * 2) solid currentcolor;
}

.caption-top {
  caption-side: top;
}

.table-sm > :not(caption) > * > * {
  padding: 0.25rem 0.25rem;
}

.table-bordered > :not(caption) > * {
  border-width: var(--bs-border-width) 0;
}
.table-bordered > :not(caption) > * > * {
  border-width: 0 var(--bs-border-width);
}

.table-borderless > :not(caption) > * > * {
  border-bottom-width: 0;
}
.table-borderless > :not(:first-child) {
  border-top-width: 0;
}

.table-striped > tbody > tr:nth-of-type(odd) > * {
  --bs-table-color-type: var(--bs-table-striped-color);
  --bs-table-bg-type: var(--bs-table-striped-bg);
}

.table-striped-columns > :not(caption) > tr > :nth-child(even) {
  --bs-table-color-type: var(--bs-table-striped-color);
  --bs-table-bg-type: var(--bs-table-striped-bg);
}

.table-active {
  --bs-table-color-state: var(--bs-table-active-color);
  --bs-table-bg-state: var(--bs-table-active-bg);
}

.table-hover > tbody > tr:hover > * {
  --bs-table-color-state: var(--bs-table-hover-color);
  --bs-table-bg-state: var(--bs-table-hover-bg);
}

.table-primary {
  --bs-table-color: #000;
  --bs-table-bg: #d1d1d1;
  --bs-table-border-color: #a7a7a7;
  --bs-table-striped-bg: #c7c7c7;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #bcbcbc;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #c1c1c1;
  --bs-table-hover-color: #000;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-secondary {
  --bs-table-color: #000;
  --bs-table-bg: white;
  --bs-table-border-color: #cccccc;
  --bs-table-striped-bg: #f2f2f2;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #e6e6e6;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #ececec;
  --bs-table-hover-color: #000;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-success {
  --bs-table-color: #000;
  --bs-table-bg: #dbf2e3;
  --bs-table-border-color: #afc2b6;
  --bs-table-striped-bg: #d0e6d8;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #c5dacc;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #cbe0d2;
  --bs-table-hover-color: #000;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-info {
  --bs-table-color: #000;
  --bs-table-bg: #d2ebf5;
  --bs-table-border-color: #a8bcc4;
  --bs-table-striped-bg: #c8dfe9;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #bdd4dd;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #c2d9e3;
  --bs-table-hover-color: #000;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-warning {
  --bs-table-color: #000;
  --bs-table-bg: #fcefdc;
  --bs-table-border-color: #cabfb0;
  --bs-table-striped-bg: #efe3d1;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #e3d7c6;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #e9ddcc;
  --bs-table-hover-color: #000;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-danger {
  --bs-table-color: #000;
  --bs-table-bg: #f7dddc;
  --bs-table-border-color: #c6b1b0;
  --bs-table-striped-bg: #ebd2d1;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #dec7c6;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #e4cccc;
  --bs-table-hover-color: #000;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-light {
  --bs-table-color: #000;
  --bs-table-bg: #fff;
  --bs-table-border-color: #cccccc;
  --bs-table-striped-bg: #f2f2f2;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #e6e6e6;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #ececec;
  --bs-table-hover-color: #000;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-dark {
  --bs-table-color: #fff;
  --bs-table-bg: #343a40;
  --bs-table-border-color: #5d6166;
  --bs-table-striped-bg: #3e444a;
  --bs-table-striped-color: #fff;
  --bs-table-active-bg: #484e53;
  --bs-table-active-color: #fff;
  --bs-table-hover-bg: #43494e;
  --bs-table-hover-color: #fff;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 767.98px) {
  .table-responsive-md {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 991.98px) {
  .table-responsive-lg {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 1199.98px) {
  .table-responsive-xl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 1399.98px) {
  .table-responsive-xxl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
.form-label {
  margin-bottom: 0.5rem;
}

.col-form-label {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5;
}

.col-form-label-lg {
  padding-top: 2rem;
  padding-bottom: 2rem;
  font-size: 1.25rem;
}

.col-form-label-sm {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  font-size: 0.875rem;
}

.form-text {
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: var(--bs-secondary-color);
}

.form-control {
  display: block;
  width: 100%;
  padding: 0.75rem 1.5rem;
  font-size: 1rem;
  font-weight: 300;
  line-height: 1.5;
  color: var(--bs-body-color);
  appearance: none;
  background-color: #f7f7f9;
  background-clip: padding-box;
  border: 0 solid var(--bs-border-color);
  border-radius: 0;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-control {
    transition: none;
  }
}
.form-control[type=file] {
  overflow: hidden;
}
.form-control[type=file]:not(:disabled):not([readonly]) {
  cursor: pointer;
}
.form-control:focus {
  color: var(--bs-body-color);
  background-color: #f7f7f9;
  border-color: #8d8d8d;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(26, 26, 26, 0.25);
}
.form-control::-webkit-date-and-time-value {
  min-width: 85px;
  height: 1.5em;
  margin: 0;
}
.form-control::-webkit-datetime-edit {
  display: block;
  padding: 0;
}
.form-control::placeholder {
  color: var(--bs-secondary-color);
  opacity: 1;
}
.form-control:disabled {
  background-color: #eceeef;
  opacity: 1;
}
.form-control::file-selector-button {
  padding: 0.75rem 1.5rem;
  margin: -0.75rem -1.5rem;
  margin-inline-end: 1.5rem;
  color: var(--bs-body-color);
  background-color: var(--bs-tertiary-bg);
  pointer-events: none;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  border-inline-end-width: 0;
  border-radius: 0;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-control::file-selector-button {
    transition: none;
  }
}
.form-control:hover:not(:disabled):not([readonly])::file-selector-button {
  background-color: var(--bs-secondary-bg);
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 0.75rem 0;
  margin-bottom: 0;
  line-height: 1.5;
  color: var(--bs-body-color);
  background-color: transparent;
  border: solid transparent;
  border-width: 0 0;
}
.form-control-plaintext:focus {
  outline: 0;
}
.form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm {
  min-height: calc(1.5em + 1rem + calc(0 * 2));
  padding: 0.5rem 1rem;
  font-size: 0.875rem;
}
.form-control-sm::file-selector-button {
  padding: 0.5rem 1rem;
  margin: -0.5rem -1rem;
  margin-inline-end: 1rem;
}

.form-control-lg {
  min-height: calc(1.5em + 4rem + calc(0 * 2));
  padding: 2rem 2rem;
  font-size: 1.25rem;
}
.form-control-lg::file-selector-button {
  padding: 2rem 2rem;
  margin: -2rem -2rem;
  margin-inline-end: 2rem;
}

textarea.form-control {
  min-height: calc(1.5em + 1.5rem + calc(0 * 2));
}
textarea.form-control-sm {
  min-height: calc(1.5em + 1rem + calc(0 * 2));
}
textarea.form-control-lg {
  min-height: calc(1.5em + 4rem + calc(0 * 2));
}

.form-control-color {
  width: 3rem;
  height: calc(1.5em + 1.5rem + calc(0 * 2));
  padding: 0.75rem;
}
.form-control-color:not(:disabled):not([readonly]) {
  cursor: pointer;
}
.form-control-color::-moz-color-swatch {
  border: 0 !important;
}
.form-control-color::-webkit-color-swatch {
  border: 0 !important;
}
.form-control-color.form-control-sm {
  height: calc(1.5em + 1rem + calc(0 * 2));
}
.form-control-color.form-control-lg {
  height: calc(1.5em + 4rem + calc(0 * 2));
}

.form-select {
  --bs-form-select-bg-img: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
  display: block;
  width: 100%;
  padding: 0.75rem 4.5rem 0.75rem 1.5rem;
  font-size: 1rem;
  font-weight: 300;
  line-height: 1.5;
  color: var(--bs-body-color);
  appearance: none;
  background-color: #f7f7f9;
  background-image: var(--bs-form-select-bg-img), var(--bs-form-select-bg-icon, none);
  background-repeat: no-repeat;
  background-position: right 1.5rem center;
  background-size: 16px 12px;
  border: 0 solid var(--bs-border-color);
  border-radius: 0;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-select {
    transition: none;
  }
}
.form-select:focus {
  border-color: #8d8d8d;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(26, 26, 26, 0.25);
}
.form-select[multiple], .form-select[size]:not([size="1"]) {
  padding-right: 1.5rem;
  background-image: none;
}
.form-select:disabled {
  color: #919aa1;
  background-color: #eceeef;
}
.form-select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 var(--bs-body-color);
}

.form-select-sm {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1rem;
  font-size: 0.875rem;
}

.form-select-lg {
  padding-top: 2rem;
  padding-bottom: 2rem;
  padding-left: 2rem;
  font-size: 1.25rem;
}

[data-bs-theme=dark] .form-select {
  --bs-form-select-bg-img: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23eceeef' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
}

.form-check {
  display: block;
  min-height: 1.5rem;
  padding-left: 1.5em;
  margin-bottom: 0.125rem;
}
.form-check .form-check-input {
  float: left;
  margin-left: -1.5em;
}

.form-check-reverse {
  padding-right: 1.5em;
  padding-left: 0;
  text-align: right;
}
.form-check-reverse .form-check-input {
  float: right;
  margin-right: -1.5em;
  margin-left: 0;
}

.form-check-input {
  --bs-form-check-bg: #f7f7f9;
  flex-shrink: 0;
  width: 1em;
  height: 1em;
  margin-top: 0.25em;
  vertical-align: top;
  appearance: none;
  background-color: var(--bs-form-check-bg);
  background-image: var(--bs-form-check-bg-image);
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
  border: var(--bs-border-width) solid var(--bs-border-color);
  print-color-adjust: exact;
}
.form-check-input[type=radio] {
  border-radius: 50%;
}
.form-check-input:active {
  filter: brightness(90%);
}
.form-check-input:focus {
  border-color: #8d8d8d;
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(26, 26, 26, 0.25);
}
.form-check-input:checked {
  background-color: #1a1a1a;
  border-color: #1a1a1a;
}
.form-check-input:checked[type=checkbox] {
  --bs-form-check-bg-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='m6 10 3 3 6-6'/%3e%3c/svg%3e");
}
.form-check-input:checked[type=radio] {
  --bs-form-check-bg-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e");
}
.form-check-input[type=checkbox]:indeterminate {
  background-color: #1a1a1a;
  border-color: #1a1a1a;
  --bs-form-check-bg-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e");
}
.form-check-input:disabled {
  pointer-events: none;
  filter: none;
  opacity: 0.5;
}
.form-check-input[disabled] ~ .form-check-label, .form-check-input:disabled ~ .form-check-label {
  cursor: default;
  opacity: 0.5;
}

.form-switch {
  padding-left: 2.5em;
}
.form-switch .form-check-input {
  --bs-form-switch-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
  width: 2em;
  margin-left: -2.5em;
  background-image: var(--bs-form-switch-bg);
  background-position: left center;
  border-radius: 0;
  transition: background-position 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-switch .form-check-input {
    transition: none;
  }
}
.form-switch .form-check-input:focus {
  --bs-form-switch-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%238d8d8d'/%3e%3c/svg%3e");
}
.form-switch .form-check-input:checked {
  background-position: right center;
  --bs-form-switch-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}
.form-switch.form-check-reverse {
  padding-right: 2.5em;
  padding-left: 0;
}
.form-switch.form-check-reverse .form-check-input {
  margin-right: -2.5em;
  margin-left: 0;
}

.form-check-inline {
  display: inline-block;
  margin-right: 1rem;
}

.btn-check {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.btn-check[disabled] + .btn, .btn-check:disabled + .btn {
  pointer-events: none;
  filter: none;
  opacity: 0.65;
}

[data-bs-theme=dark] .form-switch .form-check-input:not(:checked):not(:focus) {
  --bs-form-switch-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%28255, 255, 255, 0.25%29'/%3e%3c/svg%3e");
}

.form-range {
  width: 100%;
  height: 1.5rem;
  padding: 0;
  appearance: none;
  background-color: transparent;
}
.form-range:focus {
  outline: 0;
}
.form-range:focus::-webkit-slider-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(26, 26, 26, 0.25);
}
.form-range:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(26, 26, 26, 0.25);
}
.form-range::-moz-focus-outer {
  border: 0;
}
.form-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -0.25rem;
  appearance: none;
  background-color: #1a1a1a;
  border: 0;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-range::-webkit-slider-thumb {
    transition: none;
  }
}
.form-range::-webkit-slider-thumb:active {
  background-color: #bababa;
}
.form-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: var(--bs-secondary-bg);
  border-color: transparent;
}
.form-range::-moz-range-thumb {
  width: 1rem;
  height: 1rem;
  appearance: none;
  background-color: #1a1a1a;
  border: 0;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-range::-moz-range-thumb {
    transition: none;
  }
}
.form-range::-moz-range-thumb:active {
  background-color: #bababa;
}
.form-range::-moz-range-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: var(--bs-secondary-bg);
  border-color: transparent;
}
.form-range:disabled {
  pointer-events: none;
}
.form-range:disabled::-webkit-slider-thumb {
  background-color: var(--bs-secondary-color);
}
.form-range:disabled::-moz-range-thumb {
  background-color: var(--bs-secondary-color);
}

.form-floating {
  position: relative;
}
.form-floating > .form-control,
.form-floating > .form-control-plaintext,
.form-floating > .form-select {
  height: calc(3.5rem + calc(0 * 2));
  min-height: calc(3.5rem + calc(0 * 2));
  line-height: 1.25;
}
.form-floating > label {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 2;
  height: 100%;
  padding: 1rem 1.5rem;
  overflow: hidden;
  text-align: start;
  text-overflow: ellipsis;
  white-space: nowrap;
  pointer-events: none;
  border: 0 solid transparent;
  transform-origin: 0 0;
  transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-floating > label {
    transition: none;
  }
}
.form-floating > .form-control,
.form-floating > .form-control-plaintext {
  padding: 1rem 1.5rem;
}
.form-floating > .form-control::placeholder,
.form-floating > .form-control-plaintext::placeholder {
  color: transparent;
}
.form-floating > .form-control:focus, .form-floating > .form-control:not(:placeholder-shown),
.form-floating > .form-control-plaintext:focus,
.form-floating > .form-control-plaintext:not(:placeholder-shown) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:-webkit-autofill,
.form-floating > .form-control-plaintext:-webkit-autofill {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-select {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-control-plaintext ~ label,
.form-floating > .form-select ~ label {
  color: rgba(var(--bs-body-color-rgb), 0.65);
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control:focus ~ label::after,
.form-floating > .form-control:not(:placeholder-shown) ~ label::after,
.form-floating > .form-control-plaintext ~ label::after,
.form-floating > .form-select ~ label::after {
  position: absolute;
  inset: 1rem 0.75rem;
  z-index: -1;
  height: 1.5em;
  content: "";
  background-color: #f7f7f9;
}
.form-floating > .form-control:-webkit-autofill ~ label {
  color: rgba(var(--bs-body-color-rgb), 0.65);
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control-plaintext ~ label {
  border-width: 0 0;
}
.form-floating > :disabled ~ label,
.form-floating > .form-control:disabled ~ label {
  color: #919aa1;
}
.form-floating > :disabled ~ label::after,
.form-floating > .form-control:disabled ~ label::after {
  background-color: #eceeef;
}

.input-group {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  width: 100%;
}
.input-group > .form-control,
.input-group > .form-select,
.input-group > .form-floating {
  position: relative;
  flex: 1 1 auto;
  width: 1%;
  min-width: 0;
}
.input-group > .form-control:focus,
.input-group > .form-select:focus,
.input-group > .form-floating:focus-within {
  z-index: 5;
}
.input-group .btn {
  position: relative;
  z-index: 2;
}
.input-group .btn:focus {
  z-index: 5;
}

.input-group-text {
  display: flex;
  align-items: center;
  padding: 0.75rem 1.5rem;
  font-size: 1rem;
  font-weight: 300;
  line-height: 1.5;
  color: var(--bs-body-color);
  text-align: center;
  white-space: nowrap;
  background-color: #eceeef;
  border: 0 solid var(--bs-border-color);
}

.input-group-lg > .form-control,
.input-group-lg > .form-select,
.input-group-lg > .input-group-text,
.input-group-lg > .btn {
  padding: 2rem 2rem;
  font-size: 1.25rem;
}

.input-group-sm > .form-control,
.input-group-sm > .form-select,
.input-group-sm > .input-group-text,
.input-group-sm > .btn {
  padding: 0.5rem 1rem;
  font-size: 0.875rem;
}

.input-group-lg > .form-select,
.input-group-sm > .form-select {
  padding-right: 6rem;
}

.input-group > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
  margin-left: calc(0 * -1);
}
.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: var(--bs-form-valid-color);
}

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: 0.1rem;
  font-size: 0.875rem;
  color: #fff;
  background-color: var(--bs-success);
}

.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip,
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .form-control:valid, .form-control.is-valid {
  border-color: var(--bs-form-valid-border-color);
  padding-right: calc(1.5em + 1.5rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%234bbf73' d='M2.3 6.73.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.375rem) center;
  background-size: calc(0.75em + 0.75rem) calc(0.75em + 0.75rem);
}
.was-validated .form-control:valid:focus, .form-control.is-valid:focus {
  border-color: var(--bs-form-valid-border-color);
  box-shadow: 0 0 0 0.25rem rgba(var(--bs-success-rgb), 0.25);
}

.was-validated textarea.form-control:valid, textarea.form-control.is-valid {
  padding-right: calc(1.5em + 1.5rem);
  background-position: top calc(0.375em + 0.375rem) right calc(0.375em + 0.375rem);
}

.was-validated .form-select:valid, .form-select.is-valid {
  border-color: var(--bs-form-valid-border-color);
}
.was-validated .form-select:valid:not([multiple]):not([size]), .was-validated .form-select:valid:not([multiple])[size="1"], .form-select.is-valid:not([multiple]):not([size]), .form-select.is-valid:not([multiple])[size="1"] {
  --bs-form-select-bg-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%234bbf73' d='M2.3 6.73.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  padding-right: 8.25rem;
  background-position: right 1.5rem center, center right 4.5rem;
  background-size: 16px 12px, calc(0.75em + 0.75rem) calc(0.75em + 0.75rem);
}
.was-validated .form-select:valid:focus, .form-select.is-valid:focus {
  border-color: var(--bs-form-valid-border-color);
  box-shadow: 0 0 0 0.25rem rgba(var(--bs-success-rgb), 0.25);
}

.was-validated .form-control-color:valid, .form-control-color.is-valid {
  width: calc(3rem + calc(1.5em + 1.5rem));
}

.was-validated .form-check-input:valid, .form-check-input.is-valid {
  border-color: var(--bs-form-valid-border-color);
}
.was-validated .form-check-input:valid:checked, .form-check-input.is-valid:checked {
  background-color: var(--bs-form-valid-color);
}
.was-validated .form-check-input:valid:focus, .form-check-input.is-valid:focus {
  box-shadow: 0 0 0 0.25rem rgba(var(--bs-success-rgb), 0.25);
}
.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: var(--bs-form-valid-color);
}

.form-check-inline .form-check-input ~ .valid-feedback {
  margin-left: 0.5em;
}

.was-validated .input-group > .form-control:not(:focus):valid, .input-group > .form-control:not(:focus).is-valid,
.was-validated .input-group > .form-select:not(:focus):valid,
.input-group > .form-select:not(:focus).is-valid,
.was-validated .input-group > .form-floating:not(:focus-within):valid,
.input-group > .form-floating:not(:focus-within).is-valid {
  z-index: 3;
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: var(--bs-form-invalid-color);
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: 0.1rem;
  font-size: 0.875rem;
  color: #fff;
  background-color: var(--bs-danger);
}

.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-control:invalid, .form-control.is-invalid {
  border-color: var(--bs-form-invalid-border-color);
  padding-right: calc(1.5em + 1.5rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23d9534f'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23d9534f' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.375rem) center;
  background-size: calc(0.75em + 0.75rem) calc(0.75em + 0.75rem);
}
.was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
  border-color: var(--bs-form-invalid-border-color);
  box-shadow: 0 0 0 0.25rem rgba(var(--bs-danger-rgb), 0.25);
}

.was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
  padding-right: calc(1.5em + 1.5rem);
  background-position: top calc(0.375em + 0.375rem) right calc(0.375em + 0.375rem);
}

.was-validated .form-select:invalid, .form-select.is-invalid {
  border-color: var(--bs-form-invalid-border-color);
}
.was-validated .form-select:invalid:not([multiple]):not([size]), .was-validated .form-select:invalid:not([multiple])[size="1"], .form-select.is-invalid:not([multiple]):not([size]), .form-select.is-invalid:not([multiple])[size="1"] {
  --bs-form-select-bg-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23d9534f'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23d9534f' stroke='none'/%3e%3c/svg%3e");
  padding-right: 8.25rem;
  background-position: right 1.5rem center, center right 4.5rem;
  background-size: 16px 12px, calc(0.75em + 0.75rem) calc(0.75em + 0.75rem);
}
.was-validated .form-select:invalid:focus, .form-select.is-invalid:focus {
  border-color: var(--bs-form-invalid-border-color);
  box-shadow: 0 0 0 0.25rem rgba(var(--bs-danger-rgb), 0.25);
}

.was-validated .form-control-color:invalid, .form-control-color.is-invalid {
  width: calc(3rem + calc(1.5em + 1.5rem));
}

.was-validated .form-check-input:invalid, .form-check-input.is-invalid {
  border-color: var(--bs-form-invalid-border-color);
}
.was-validated .form-check-input:invalid:checked, .form-check-input.is-invalid:checked {
  background-color: var(--bs-form-invalid-color);
}
.was-validated .form-check-input:invalid:focus, .form-check-input.is-invalid:focus {
  box-shadow: 0 0 0 0.25rem rgba(var(--bs-danger-rgb), 0.25);
}
.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: var(--bs-form-invalid-color);
}

.form-check-inline .form-check-input ~ .invalid-feedback {
  margin-left: 0.5em;
}

.was-validated .input-group > .form-control:not(:focus):invalid, .input-group > .form-control:not(:focus).is-invalid,
.was-validated .input-group > .form-select:not(:focus):invalid,
.input-group > .form-select:not(:focus).is-invalid,
.was-validated .input-group > .form-floating:not(:focus-within):invalid,
.input-group > .form-floating:not(:focus-within).is-invalid {
  z-index: 4;
}

.btn {
  --bs-btn-padding-x: 1.5rem;
  --bs-btn-padding-y: 0.75rem;
  --bs-btn-font-family: ;
  --bs-btn-font-size: 1rem;
  --bs-btn-font-weight: 600;
  --bs-btn-line-height: 1.5rem;
  --bs-btn-color: var(--bs-body-color);
  --bs-btn-bg: transparent;
  --bs-btn-border-width: 0;
  --bs-btn-border-color: transparent;
  --bs-btn-border-radius: var(--bs-border-radius);
  --bs-btn-hover-border-color: transparent;
  --bs-btn-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);
  --bs-btn-disabled-opacity: 0.65;
  --bs-btn-focus-box-shadow: 0 0 0 0.25rem rgba(var(--bs-btn-focus-shadow-rgb), .5);
  display: inline-block;
  padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);
  font-family: var(--bs-btn-font-family);
  font-size: var(--bs-btn-font-size);
  font-weight: var(--bs-btn-font-weight);
  line-height: var(--bs-btn-line-height);
  color: var(--bs-btn-color);
  text-align: center;
  text-decoration: none;
  vertical-align: middle;
  cursor: pointer;
  user-select: none;
  border: var(--bs-btn-border-width) solid var(--bs-btn-border-color);
  background-color: var(--bs-btn-bg);
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .btn {
    transition: none;
  }
}
.btn:hover {
  color: var(--bs-btn-hover-color);
  background-color: var(--bs-btn-hover-bg);
  border-color: var(--bs-btn-hover-border-color);
}
.btn-check + .btn:hover {
  color: var(--bs-btn-color);
  background-color: var(--bs-btn-bg);
  border-color: var(--bs-btn-border-color);
}
.btn:focus-visible {
  color: var(--bs-btn-hover-color);
  background-color: var(--bs-btn-hover-bg);
  border-color: var(--bs-btn-hover-border-color);
  outline: 0;
  box-shadow: var(--bs-btn-focus-box-shadow);
}
.btn-check:focus-visible + .btn {
  border-color: var(--bs-btn-hover-border-color);
  outline: 0;
  box-shadow: var(--bs-btn-focus-box-shadow);
}
.btn-check:checked + .btn, :not(.btn-check) + .btn:active, .btn:first-child:active, .btn.active, .btn.show {
  color: var(--bs-btn-active-color);
  background-color: var(--bs-btn-active-bg);
  border-color: var(--bs-btn-active-border-color);
}
.btn-check:checked + .btn:focus-visible, :not(.btn-check) + .btn:active:focus-visible, .btn:first-child:active:focus-visible, .btn.active:focus-visible, .btn.show:focus-visible {
  box-shadow: var(--bs-btn-focus-box-shadow);
}
.btn-check:checked:focus-visible + .btn {
  box-shadow: var(--bs-btn-focus-box-shadow);
}
.btn:disabled, .btn.disabled, fieldset:disabled .btn {
  color: var(--bs-btn-disabled-color);
  pointer-events: none;
  background-color: var(--bs-btn-disabled-bg);
  border-color: var(--bs-btn-disabled-border-color);
  opacity: var(--bs-btn-disabled-opacity);
}

.btn-primary {
  --bs-btn-color: #fff;
  --bs-btn-bg: #1a1a1a;
  --bs-btn-border-color: #1a1a1a;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #161616;
  --bs-btn-hover-border-color: #151515;
  --bs-btn-focus-shadow-rgb: 60, 60, 60;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #151515;
  --bs-btn-active-border-color: #141414;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: #1a1a1a;
  --bs-btn-disabled-border-color: #1a1a1a;
}

.btn-secondary {
  --bs-btn-color: #000;
  --bs-btn-bg: #fff;
  --bs-btn-border-color: #fff;
  --bs-btn-hover-color: #000;
  --bs-btn-hover-bg: white;
  --bs-btn-hover-border-color: white;
  --bs-btn-focus-shadow-rgb: 217, 217, 217;
  --bs-btn-active-color: #000;
  --bs-btn-active-bg: white;
  --bs-btn-active-border-color: white;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #000;
  --bs-btn-disabled-bg: #fff;
  --bs-btn-disabled-border-color: #fff;
}

.btn-success {
  --bs-btn-color: #fff;
  --bs-btn-bg: #4bbf73;
  --bs-btn-border-color: #4bbf73;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #40a262;
  --bs-btn-hover-border-color: #3c995c;
  --bs-btn-focus-shadow-rgb: 102, 201, 136;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #3c995c;
  --bs-btn-active-border-color: #388f56;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: #4bbf73;
  --bs-btn-disabled-border-color: #4bbf73;
}

.btn-info {
  --bs-btn-color: #fff;
  --bs-btn-bg: #1f9bcf;
  --bs-btn-border-color: #1f9bcf;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #1a84b0;
  --bs-btn-hover-border-color: #197ca6;
  --bs-btn-focus-shadow-rgb: 65, 170, 214;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #197ca6;
  --bs-btn-active-border-color: #17749b;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: #1f9bcf;
  --bs-btn-disabled-border-color: #1f9bcf;
}

.btn-warning {
  --bs-btn-color: #000;
  --bs-btn-bg: #f0ad4e;
  --bs-btn-border-color: #f0ad4e;
  --bs-btn-hover-color: #000;
  --bs-btn-hover-bg: #f2b969;
  --bs-btn-hover-border-color: #f2b560;
  --bs-btn-focus-shadow-rgb: 204, 147, 66;
  --bs-btn-active-color: #000;
  --bs-btn-active-bg: #f3bd71;
  --bs-btn-active-border-color: #f2b560;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #000;
  --bs-btn-disabled-bg: #f0ad4e;
  --bs-btn-disabled-border-color: #f0ad4e;
}

.btn-danger {
  --bs-btn-color: #fff;
  --bs-btn-bg: #d9534f;
  --bs-btn-border-color: #d9534f;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #b84743;
  --bs-btn-hover-border-color: #ae423f;
  --bs-btn-focus-shadow-rgb: 223, 109, 105;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #ae423f;
  --bs-btn-active-border-color: #a33e3b;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: #d9534f;
  --bs-btn-disabled-border-color: #d9534f;
}

.btn-light {
  --bs-btn-color: #000;
  --bs-btn-bg: #fff;
  --bs-btn-border-color: #fff;
  --bs-btn-hover-color: #000;
  --bs-btn-hover-bg: #d9d9d9;
  --bs-btn-hover-border-color: #cccccc;
  --bs-btn-focus-shadow-rgb: 217, 217, 217;
  --bs-btn-active-color: #000;
  --bs-btn-active-bg: #cccccc;
  --bs-btn-active-border-color: #bfbfbf;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #000;
  --bs-btn-disabled-bg: #fff;
  --bs-btn-disabled-border-color: #fff;
}

.btn-dark {
  --bs-btn-color: #fff;
  --bs-btn-bg: #343a40;
  --bs-btn-border-color: #343a40;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #52585d;
  --bs-btn-hover-border-color: #484e53;
  --bs-btn-focus-shadow-rgb: 82, 88, 93;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #5d6166;
  --bs-btn-active-border-color: #484e53;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: #343a40;
  --bs-btn-disabled-border-color: #343a40;
}

.btn-outline-primary {
  --bs-btn-color: #1a1a1a;
  --bs-btn-border-color: #1a1a1a;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #1a1a1a;
  --bs-btn-hover-border-color: #1a1a1a;
  --bs-btn-focus-shadow-rgb: 26, 26, 26;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #1a1a1a;
  --bs-btn-active-border-color: #1a1a1a;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #1a1a1a;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #1a1a1a;
  --bs-gradient: none;
}

.btn-outline-secondary {
  --bs-btn-color: #fff;
  --bs-btn-border-color: #fff;
  --bs-btn-hover-color: #000;
  --bs-btn-hover-bg: #fff;
  --bs-btn-hover-border-color: #fff;
  --bs-btn-focus-shadow-rgb: 255, 255, 255;
  --bs-btn-active-color: #000;
  --bs-btn-active-bg: #fff;
  --bs-btn-active-border-color: #fff;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #fff;
  --bs-gradient: none;
}

.btn-outline-success {
  --bs-btn-color: #4bbf73;
  --bs-btn-border-color: #4bbf73;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #4bbf73;
  --bs-btn-hover-border-color: #4bbf73;
  --bs-btn-focus-shadow-rgb: 75, 191, 115;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #4bbf73;
  --bs-btn-active-border-color: #4bbf73;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #4bbf73;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #4bbf73;
  --bs-gradient: none;
}

.btn-outline-info {
  --bs-btn-color: #1f9bcf;
  --bs-btn-border-color: #1f9bcf;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #1f9bcf;
  --bs-btn-hover-border-color: #1f9bcf;
  --bs-btn-focus-shadow-rgb: 31, 155, 207;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #1f9bcf;
  --bs-btn-active-border-color: #1f9bcf;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #1f9bcf;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #1f9bcf;
  --bs-gradient: none;
}

.btn-outline-warning {
  --bs-btn-color: #f0ad4e;
  --bs-btn-border-color: #f0ad4e;
  --bs-btn-hover-color: #000;
  --bs-btn-hover-bg: #f0ad4e;
  --bs-btn-hover-border-color: #f0ad4e;
  --bs-btn-focus-shadow-rgb: 240, 173, 78;
  --bs-btn-active-color: #000;
  --bs-btn-active-bg: #f0ad4e;
  --bs-btn-active-border-color: #f0ad4e;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #f0ad4e;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #f0ad4e;
  --bs-gradient: none;
}

.btn-outline-danger {
  --bs-btn-color: #d9534f;
  --bs-btn-border-color: #d9534f;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #d9534f;
  --bs-btn-hover-border-color: #d9534f;
  --bs-btn-focus-shadow-rgb: 217, 83, 79;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #d9534f;
  --bs-btn-active-border-color: #d9534f;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #d9534f;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #d9534f;
  --bs-gradient: none;
}

.btn-outline-light {
  --bs-btn-color: #fff;
  --bs-btn-border-color: #fff;
  --bs-btn-hover-color: #000;
  --bs-btn-hover-bg: #fff;
  --bs-btn-hover-border-color: #fff;
  --bs-btn-focus-shadow-rgb: 255, 255, 255;
  --bs-btn-active-color: #000;
  --bs-btn-active-bg: #fff;
  --bs-btn-active-border-color: #fff;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #fff;
  --bs-gradient: none;
}

.btn-outline-dark {
  --bs-btn-color: #343a40;
  --bs-btn-border-color: #343a40;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #343a40;
  --bs-btn-hover-border-color: #343a40;
  --bs-btn-focus-shadow-rgb: 52, 58, 64;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #343a40;
  --bs-btn-active-border-color: #343a40;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #343a40;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #343a40;
  --bs-gradient: none;
}

.btn-link {
  --bs-btn-font-weight: 300;
  --bs-btn-color: var(--bs-link-color);
  --bs-btn-bg: transparent;
  --bs-btn-border-color: transparent;
  --bs-btn-hover-color: var(--bs-link-hover-color);
  --bs-btn-hover-border-color: transparent;
  --bs-btn-active-color: var(--bs-link-hover-color);
  --bs-btn-active-border-color: transparent;
  --bs-btn-disabled-color: #919aa1;
  --bs-btn-disabled-border-color: transparent;
  --bs-btn-box-shadow: 0 0 0 #000;
  --bs-btn-focus-shadow-rgb: 60, 60, 60;
  text-decoration: underline;
}
.btn-link:focus-visible {
  color: var(--bs-btn-color);
}
.btn-link:hover {
  color: var(--bs-btn-hover-color);
}

.btn-lg, .btn-group-lg > .btn {
  --bs-btn-padding-y: 2rem;
  --bs-btn-padding-x: 2rem;
  --bs-btn-font-size: 1.25rem;
  --bs-btn-border-radius: var(--bs-border-radius-lg);
}

.btn-sm, .btn-group-sm > .btn {
  --bs-btn-padding-y: 0.5rem;
  --bs-btn-padding-x: 1rem;
  --bs-btn-font-size: 0.875rem;
  --bs-btn-border-radius: var(--bs-border-radius-sm);
}

.fade {
  transition: opacity 0.15s linear;
}
@media (prefers-reduced-motion: reduce) {
  .fade {
    transition: none;
  }
}
.fade:not(.show) {
  opacity: 0;
}

.collapse:not(.show) {
  display: none;
}

.collapsing {
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing {
    transition: none;
  }
}
.collapsing.collapse-horizontal {
  width: 0;
  height: auto;
  transition: width 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing.collapse-horizontal {
    transition: none;
  }
}

.dropup,
.dropend,
.dropdown,
.dropstart,
.dropup-center,
.dropdown-center {
  position: relative;
}

.dropdown-toggle {
  white-space: nowrap;
}
.dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}
.dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropdown-menu {
  --bs-dropdown-zindex: 1000;
  --bs-dropdown-min-width: 10rem;
  --bs-dropdown-padding-x: 0;
  --bs-dropdown-padding-y: 0.5rem;
  --bs-dropdown-spacer: 0.125rem;
  --bs-dropdown-font-size: 1rem;
  --bs-dropdown-color: var(--bs-body-color);
  --bs-dropdown-bg: var(--bs-body-bg);
  --bs-dropdown-border-color: var(--bs-border-color-translucent);
  --bs-dropdown-border-radius: var(--bs-border-radius);
  --bs-dropdown-border-width: var(--bs-border-width);
  --bs-dropdown-inner-border-radius: calc(var(--bs-border-radius) - var(--bs-border-width));
  --bs-dropdown-divider-bg: var(--bs-border-color-translucent);
  --bs-dropdown-divider-margin-y: 0.5rem;
  --bs-dropdown-box-shadow: var(--bs-box-shadow);
  --bs-dropdown-link-color: var(--bs-body-color);
  --bs-dropdown-link-hover-color: var(--bs-body-color);
  --bs-dropdown-link-hover-bg: var(--bs-tertiary-bg);
  --bs-dropdown-link-active-color: #fff;
  --bs-dropdown-link-active-bg: #1a1a1a;
  --bs-dropdown-link-disabled-color: var(--bs-tertiary-color);
  --bs-dropdown-item-padding-x: 1rem;
  --bs-dropdown-item-padding-y: 0.25rem;
  --bs-dropdown-header-color: #919aa1;
  --bs-dropdown-header-padding-x: 1rem;
  --bs-dropdown-header-padding-y: 0.5rem;
  position: absolute;
  z-index: var(--bs-dropdown-zindex);
  display: none;
  min-width: var(--bs-dropdown-min-width);
  padding: var(--bs-dropdown-padding-y) var(--bs-dropdown-padding-x);
  margin: 0;
  font-size: var(--bs-dropdown-font-size);
  color: var(--bs-dropdown-color);
  text-align: left;
  list-style: none;
  background-color: var(--bs-dropdown-bg);
  background-clip: padding-box;
  border: var(--bs-dropdown-border-width) solid var(--bs-dropdown-border-color);
}
.dropdown-menu[data-bs-popper] {
  top: 100%;
  left: 0;
  margin-top: var(--bs-dropdown-spacer);
}

.dropdown-menu-start {
  --bs-position: start;
}
.dropdown-menu-start[data-bs-popper] {
  right: auto;
  left: 0;
}

.dropdown-menu-end {
  --bs-position: end;
}
.dropdown-menu-end[data-bs-popper] {
  right: 0;
  left: auto;
}

@media (min-width: 576px) {
  .dropdown-menu-sm-start {
    --bs-position: start;
  }
  .dropdown-menu-sm-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-sm-end {
    --bs-position: end;
  }
  .dropdown-menu-sm-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 768px) {
  .dropdown-menu-md-start {
    --bs-position: start;
  }
  .dropdown-menu-md-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-md-end {
    --bs-position: end;
  }
  .dropdown-menu-md-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 992px) {
  .dropdown-menu-lg-start {
    --bs-position: start;
  }
  .dropdown-menu-lg-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-lg-end {
    --bs-position: end;
  }
  .dropdown-menu-lg-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 1200px) {
  .dropdown-menu-xl-start {
    --bs-position: start;
  }
  .dropdown-menu-xl-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xl-end {
    --bs-position: end;
  }
  .dropdown-menu-xl-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 1400px) {
  .dropdown-menu-xxl-start {
    --bs-position: start;
  }
  .dropdown-menu-xxl-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xxl-end {
    --bs-position: end;
  }
  .dropdown-menu-xxl-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
.dropup .dropdown-menu[data-bs-popper] {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: var(--bs-dropdown-spacer);
}
.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}
.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropend .dropdown-menu[data-bs-popper] {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: var(--bs-dropdown-spacer);
}
.dropend .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}
.dropend .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropend .dropdown-toggle::after {
  vertical-align: 0;
}

.dropstart .dropdown-menu[data-bs-popper] {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: var(--bs-dropdown-spacer);
}
.dropstart .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
}
.dropstart .dropdown-toggle::after {
  display: none;
}
.dropstart .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}
.dropstart .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropstart .dropdown-toggle::before {
  vertical-align: 0;
}

.dropdown-divider {
  height: 0;
  margin: var(--bs-dropdown-divider-margin-y) 0;
  overflow: hidden;
  border-top: 1px solid var(--bs-dropdown-divider-bg);
  opacity: 1;
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
  clear: both;
  font-weight: 300;
  color: var(--bs-dropdown-link-color);
  text-align: inherit;
  text-decoration: none;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}
.dropdown-item:hover, .dropdown-item:focus {
  color: var(--bs-dropdown-link-hover-color);
  background-color: var(--bs-dropdown-link-hover-bg);
}
.dropdown-item.active, .dropdown-item:active {
  color: var(--bs-dropdown-link-active-color);
  text-decoration: none;
  background-color: var(--bs-dropdown-link-active-bg);
}
.dropdown-item.disabled, .dropdown-item:disabled {
  color: var(--bs-dropdown-link-disabled-color);
  pointer-events: none;
  background-color: transparent;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-header {
  display: block;
  padding: var(--bs-dropdown-header-padding-y) var(--bs-dropdown-header-padding-x);
  margin-bottom: 0;
  font-size: 0.875rem;
  color: var(--bs-dropdown-header-color);
  white-space: nowrap;
}

.dropdown-item-text {
  display: block;
  padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
  color: var(--bs-dropdown-link-color);
}

.dropdown-menu-dark {
  --bs-dropdown-color: #eceeef;
  --bs-dropdown-bg: #343a40;
  --bs-dropdown-border-color: var(--bs-border-color-translucent);
  --bs-dropdown-box-shadow: ;
  --bs-dropdown-link-color: #eceeef;
  --bs-dropdown-link-hover-color: #fff;
  --bs-dropdown-divider-bg: var(--bs-border-color-translucent);
  --bs-dropdown-link-hover-bg: rgba(255, 255, 255, 0.15);
  --bs-dropdown-link-active-color: #fff;
  --bs-dropdown-link-active-bg: #1a1a1a;
  --bs-dropdown-link-disabled-color: #adb5bd;
  --bs-dropdown-header-color: #adb5bd;
}

.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-flex;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  flex: 1 1 auto;
}
.btn-group > .btn-check:checked + .btn,
.btn-group > .btn-check:focus + .btn,
.btn-group > .btn:hover,
.btn-group > .btn:focus,
.btn-group > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn-check:checked + .btn,
.btn-group-vertical > .btn-check:focus + .btn,
.btn-group-vertical > .btn:hover,
.btn-group-vertical > .btn:focus,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn.active {
  z-index: 1;
}

.btn-toolbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
}
.btn-toolbar .input-group {
  width: auto;
}

.btn-group > :not(.btn-check:first-child) + .btn,
.btn-group > .btn-group:not(:first-child) {
  margin-left: calc(0 * -1);
}
.dropdown-toggle-split {
  padding-right: 1.125rem;
  padding-left: 1.125rem;
}
.dropdown-toggle-split::after, .dropup .dropdown-toggle-split::after, .dropend .dropdown-toggle-split::after {
  margin-left: 0;
}
.dropstart .dropdown-toggle-split::before {
  margin-right: 0;
}

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem;
}

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 1.5rem;
  padding-left: 1.5rem;
}

.btn-group-vertical {
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group {
  width: 100%;
}
.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) {
  margin-top: calc(0 * -1);
}
.nav {
  --bs-nav-link-padding-x: 1rem;
  --bs-nav-link-padding-y: 0.5rem;
  --bs-nav-link-font-weight: ;
  --bs-nav-link-color: var(--bs-link-color);
  --bs-nav-link-hover-color: var(--bs-link-hover-color);
  --bs-nav-link-disabled-color: var(--bs-secondary-color);
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
  font-size: var(--bs-nav-link-font-size);
  font-weight: var(--bs-nav-link-font-weight);
  color: var(--bs-nav-link-color);
  text-decoration: none;
  background: none;
  border: 0;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .nav-link {
    transition: none;
  }
}
.nav-link:hover, .nav-link:focus {
  color: var(--bs-nav-link-hover-color);
}
.nav-link:focus-visible {
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(26, 26, 26, 0.25);
}
.nav-link.disabled, .nav-link:disabled {
  color: var(--bs-nav-link-disabled-color);
  pointer-events: none;
  cursor: default;
}

.nav-tabs {
  --bs-nav-tabs-border-width: var(--bs-border-width);
  --bs-nav-tabs-border-color: var(--bs-border-color);
  --bs-nav-tabs-border-radius: var(--bs-border-radius);
  --bs-nav-tabs-link-hover-border-color: var(--bs-secondary-bg) var(--bs-secondary-bg) var(--bs-border-color);
  --bs-nav-tabs-link-active-color: var(--bs-emphasis-color);
  --bs-nav-tabs-link-active-bg: var(--bs-body-bg);
  --bs-nav-tabs-link-active-border-color: var(--bs-border-color) var(--bs-border-color) var(--bs-body-bg);
  border-bottom: var(--bs-nav-tabs-border-width) solid var(--bs-nav-tabs-border-color);
}
.nav-tabs .nav-link {
  margin-bottom: calc(-1 * var(--bs-nav-tabs-border-width));
  border: var(--bs-nav-tabs-border-width) solid transparent;
}
.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
  isolation: isolate;
  border-color: var(--bs-nav-tabs-link-hover-border-color);
}
.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: var(--bs-nav-tabs-link-active-color);
  background-color: var(--bs-nav-tabs-link-active-bg);
  border-color: var(--bs-nav-tabs-link-active-border-color);
}
.nav-tabs .dropdown-menu {
  margin-top: calc(-1 * var(--bs-nav-tabs-border-width));
}

.nav-pills {
  --bs-nav-pills-border-radius: var(--bs-border-radius);
  --bs-nav-pills-link-active-color: #fff;
  --bs-nav-pills-link-active-bg: #1a1a1a;
}
.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: var(--bs-nav-pills-link-active-color);
  background-color: var(--bs-nav-pills-link-active-bg);
}

.nav-underline {
  --bs-nav-underline-gap: 1rem;
  --bs-nav-underline-border-width: 0.125rem;
  --bs-nav-underline-link-active-color: var(--bs-emphasis-color);
  gap: var(--bs-nav-underline-gap);
}
.nav-underline .nav-link {
  padding-right: 0;
  padding-left: 0;
  border-bottom: var(--bs-nav-underline-border-width) solid transparent;
}
.nav-underline .nav-link:hover, .nav-underline .nav-link:focus {
  border-bottom-color: currentcolor;
}
.nav-underline .nav-link.active,
.nav-underline .show > .nav-link {
  font-weight: 600;
  color: var(--bs-nav-underline-link-active-color);
  border-bottom-color: currentcolor;
}

.nav-fill > .nav-link,
.nav-fill .nav-item {
  flex: 1 1 auto;
  text-align: center;
}

.nav-justified > .nav-link,
.nav-justified .nav-item {
  flex-basis: 0;
  flex-grow: 1;
  text-align: center;
}

.nav-fill .nav-item .nav-link,
.nav-justified .nav-item .nav-link {
  width: 100%;
}

.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}

.navbar {
  --bs-navbar-padding-x: 0;
  --bs-navbar-padding-y: 1.5rem;
  --bs-navbar-color: rgba(0, 0, 0, 0.3);
  --bs-navbar-hover-color: #1a1a1a;
  --bs-navbar-disabled-color: rgba(var(--bs-emphasis-color-rgb), 0.3);
  --bs-navbar-active-color: #1a1a1a;
  --bs-navbar-brand-padding-y: 0.3125rem;
  --bs-navbar-brand-margin-end: 1rem;
  --bs-navbar-brand-font-size: 1.25rem;
  --bs-navbar-brand-color: #1a1a1a;
  --bs-navbar-brand-hover-color: #1a1a1a;
  --bs-navbar-nav-link-padding-x: 0.5rem;
  --bs-navbar-toggler-padding-y: 0.25rem;
  --bs-navbar-toggler-padding-x: 0.75rem;
  --bs-navbar-toggler-font-size: 1.25rem;
  --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2885, 89, 92, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
  --bs-navbar-toggler-border-color: rgba(var(--bs-emphasis-color-rgb), 0.15);
  --bs-navbar-toggler-border-radius: var(--bs-border-radius);
  --bs-navbar-toggler-focus-width: 0.25rem;
  --bs-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding: var(--bs-navbar-padding-y) var(--bs-navbar-padding-x);
}
.navbar > .container,
.navbar > .container-fluid,
.navbar > .container-sm,
.navbar > .container-md,
.navbar > .container-lg,
.navbar > .container-xl,
.navbar > .container-xxl {
  display: flex;
  flex-wrap: inherit;
  align-items: center;
  justify-content: space-between;
}
.navbar-brand {
  padding-top: var(--bs-navbar-brand-padding-y);
  padding-bottom: var(--bs-navbar-brand-padding-y);
  margin-right: var(--bs-navbar-brand-margin-end);
  font-size: var(--bs-navbar-brand-font-size);
  color: var(--bs-navbar-brand-color);
  text-decoration: none;
  white-space: nowrap;
}
.navbar-brand:hover, .navbar-brand:focus {
  color: var(--bs-navbar-brand-hover-color);
}

.navbar-nav {
  --bs-nav-link-padding-x: 0;
  --bs-nav-link-padding-y: 0.5rem;
  --bs-nav-link-font-weight: ;
  --bs-nav-link-color: var(--bs-navbar-color);
  --bs-nav-link-hover-color: var(--bs-navbar-hover-color);
  --bs-nav-link-disabled-color: var(--bs-navbar-disabled-color);
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.navbar-nav .nav-link.active, .navbar-nav .nav-link.show {
  color: var(--bs-navbar-active-color);
}
.navbar-nav .dropdown-menu {
  position: static;
}

.navbar-text {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  color: var(--bs-navbar-color);
}
.navbar-text a,
.navbar-text a:hover,
.navbar-text a:focus {
  color: var(--bs-navbar-active-color);
}

.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  align-items: center;
}

.navbar-toggler {
  padding: var(--bs-navbar-toggler-padding-y) var(--bs-navbar-toggler-padding-x);
  font-size: var(--bs-navbar-toggler-font-size);
  line-height: 1;
  color: var(--bs-navbar-color);
  background-color: transparent;
  border: var(--bs-border-width) solid var(--bs-navbar-toggler-border-color);
  transition: var(--bs-navbar-toggler-transition);
}
@media (prefers-reduced-motion: reduce) {
  .navbar-toggler {
    transition: none;
  }
}
.navbar-toggler:hover {
  text-decoration: none;
}
.navbar-toggler:focus {
  text-decoration: none;
  outline: 0;
  box-shadow: 0 0 0 var(--bs-navbar-toggler-focus-width);
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  background-image: var(--bs-navbar-toggler-icon-bg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: 100%;
}

.navbar-nav-scroll {
  max-height: var(--bs-scroll-height, 75vh);
  overflow-y: auto;
}

@media (min-width: 576px) {
  .navbar-expand-sm {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-sm .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-sm .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
  .navbar-expand-sm .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    transition: none;
  }
  .navbar-expand-sm .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-sm .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 768px) {
  .navbar-expand-md {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-md .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-md .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
  .navbar-expand-md .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    transition: none;
  }
  .navbar-expand-md .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-md .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 992px) {
  .navbar-expand-lg {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-lg .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-lg .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
  .navbar-expand-lg .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    transition: none;
  }
  .navbar-expand-lg .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-lg .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 1200px) {
  .navbar-expand-xl {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-xl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
  .navbar-expand-xl .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    transition: none;
  }
  .navbar-expand-xl .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-xl .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 1400px) {
  .navbar-expand-xxl {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xxl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xxl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xxl .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-xxl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xxl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xxl .navbar-toggler {
    display: none;
  }
  .navbar-expand-xxl .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    transition: none;
  }
  .navbar-expand-xxl .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-xxl .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
.navbar-expand {
  flex-wrap: nowrap;
  justify-content: flex-start;
}
.navbar-expand .navbar-nav {
  flex-direction: row;
}
.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}
.navbar-expand .navbar-nav .nav-link {
  padding-right: var(--bs-navbar-nav-link-padding-x);
  padding-left: var(--bs-navbar-nav-link-padding-x);
}
.navbar-expand .navbar-nav-scroll {
  overflow: visible;
}
.navbar-expand .navbar-collapse {
  display: flex !important;
  flex-basis: auto;
}
.navbar-expand .navbar-toggler {
  display: none;
}
.navbar-expand .offcanvas {
  position: static;
  z-index: auto;
  flex-grow: 1;
  width: auto !important;
  height: auto !important;
  visibility: visible !important;
  background-color: transparent !important;
  border: 0 !important;
  transform: none !important;
  transition: none;
}
.navbar-expand .offcanvas .offcanvas-header {
  display: none;
}
.navbar-expand .offcanvas .offcanvas-body {
  display: flex;
  flex-grow: 0;
  padding: 0;
  overflow-y: visible;
}

.navbar-dark,
.navbar[data-bs-theme=dark] {
  --bs-navbar-color: rgba(255, 255, 255, 0.55);
  --bs-navbar-hover-color: #fff;
  --bs-navbar-disabled-color: rgba(255, 255, 255, 0.25);
  --bs-navbar-active-color: #fff;
  --bs-navbar-brand-color: #fff;
  --bs-navbar-brand-hover-color: #fff;
  --bs-navbar-toggler-border-color: rgba(255, 255, 255, 0.1);
  --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

[data-bs-theme=dark] .navbar-toggler-icon {
  --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.card {
  --bs-card-spacer-y: 1rem;
  --bs-card-spacer-x: 1rem;
  --bs-card-title-spacer-y: 0.5rem;
  --bs-card-title-color: ;
  --bs-card-subtitle-color: ;
  --bs-card-border-width: var(--bs-border-width);
  --bs-card-border-color: var(--bs-border-color-translucent);
  --bs-card-border-radius: var(--bs-border-radius);
  --bs-card-box-shadow: ;
  --bs-card-inner-border-radius: calc(var(--bs-border-radius) - (var(--bs-border-width)));
  --bs-card-cap-padding-y: 0.5rem;
  --bs-card-cap-padding-x: 1rem;
  --bs-card-cap-bg: rgba(var(--bs-body-color-rgb), 0.03);
  --bs-card-cap-color: ;
  --bs-card-height: ;
  --bs-card-color: ;
  --bs-card-bg: var(--bs-body-bg);
  --bs-card-img-overlay-padding: 1rem;
  --bs-card-group-margin: 0.75rem;
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  height: var(--bs-card-height);
  color: var(--bs-body-color);
  word-wrap: break-word;
  background-color: var(--bs-card-bg);
  background-clip: border-box;
  border: var(--bs-card-border-width) solid var(--bs-card-border-color);
}
.card > hr {
  margin-right: 0;
  margin-left: 0;
}
.card > .list-group {
  border-top: inherit;
  border-bottom: inherit;
}
.card > .list-group:first-child {
  border-top-width: 0;
}
.card > .list-group:last-child {
  border-bottom-width: 0;
}
.card > .card-header + .list-group,
.card > .list-group + .card-footer {
  border-top: 0;
}

.card-body {
  flex: 1 1 auto;
  padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
  color: var(--bs-card-color);
}

.card-title {
  margin-bottom: var(--bs-card-title-spacer-y);
  color: var(--bs-card-title-color);
}

.card-subtitle {
  margin-top: calc(-0.5 * var(--bs-card-title-spacer-y));
  margin-bottom: 0;
  color: var(--bs-card-subtitle-color);
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link + .card-link {
  margin-left: var(--bs-card-spacer-x);
}

.card-header {
  padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
  margin-bottom: 0;
  color: var(--bs-card-cap-color);
  background-color: var(--bs-card-cap-bg);
  border-bottom: var(--bs-card-border-width) solid var(--bs-card-border-color);
}
.card-footer {
  padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
  color: var(--bs-card-cap-color);
  background-color: var(--bs-card-cap-bg);
  border-top: var(--bs-card-border-width) solid var(--bs-card-border-color);
}
.card-header-tabs {
  margin-right: calc(-0.5 * var(--bs-card-cap-padding-x));
  margin-bottom: calc(-1 * var(--bs-card-cap-padding-y));
  margin-left: calc(-0.5 * var(--bs-card-cap-padding-x));
  border-bottom: 0;
}
.card-header-tabs .nav-link.active {
  background-color: var(--bs-card-bg);
  border-bottom-color: var(--bs-card-bg);
}

.card-header-pills {
  margin-right: calc(-0.5 * var(--bs-card-cap-padding-x));
  margin-left: calc(-0.5 * var(--bs-card-cap-padding-x));
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: var(--bs-card-img-overlay-padding);
}

.card-img,
.card-img-top,
.card-img-bottom {
  width: 100%;
}

.card-group > .card {
  margin-bottom: var(--bs-card-group-margin);
}
@media (min-width: 576px) {
  .card-group {
    display: flex;
    flex-flow: row wrap;
  }
  .card-group > .card {
    flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
}

.accordion {
  --bs-accordion-color: var(--bs-body-color);
  --bs-accordion-bg: var(--bs-body-bg);
  --bs-accordion-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
  --bs-accordion-border-color: var(--bs-border-color);
  --bs-accordion-border-width: var(--bs-border-width);
  --bs-accordion-border-radius: var(--bs-border-radius);
  --bs-accordion-inner-border-radius: calc(var(--bs-border-radius) - (var(--bs-border-width)));
  --bs-accordion-btn-padding-x: 1.25rem;
  --bs-accordion-btn-padding-y: 1rem;
  --bs-accordion-btn-color: var(--bs-body-color);
  --bs-accordion-btn-bg: var(--bs-accordion-bg);
  --bs-accordion-btn-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='none' stroke='%2355595c' stroke-linecap='round' stroke-linejoin='round'%3e%3cpath d='M2 5L8 11L14 5'/%3e%3c/svg%3e");
  --bs-accordion-btn-icon-width: 1.25rem;
  --bs-accordion-btn-icon-transform: rotate(-180deg);
  --bs-accordion-btn-icon-transition: transform 0.2s ease-in-out;
  --bs-accordion-btn-active-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='none' stroke='%230a0a0a' stroke-linecap='round' stroke-linejoin='round'%3e%3cpath d='M2 5L8 11L14 5'/%3e%3c/svg%3e");
  --bs-accordion-btn-focus-box-shadow: 0 0 0 0.25rem rgba(26, 26, 26, 0.25);
  --bs-accordion-body-padding-x: 1.25rem;
  --bs-accordion-body-padding-y: 1rem;
  --bs-accordion-active-color: var(--bs-primary-text-emphasis);
  --bs-accordion-active-bg: var(--bs-primary-bg-subtle);
}

.accordion-button {
  position: relative;
  display: flex;
  align-items: center;
  width: 100%;
  padding: var(--bs-accordion-btn-padding-y) var(--bs-accordion-btn-padding-x);
  font-size: 1rem;
  color: var(--bs-accordion-btn-color);
  text-align: left;
  background-color: var(--bs-accordion-btn-bg);
  border: 0;
  overflow-anchor: none;
  transition: var(--bs-accordion-transition);
}
@media (prefers-reduced-motion: reduce) {
  .accordion-button {
    transition: none;
  }
}
.accordion-button:not(.collapsed) {
  color: var(--bs-accordion-active-color);
  background-color: var(--bs-accordion-active-bg);
  box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
}
.accordion-button:not(.collapsed)::after {
  background-image: var(--bs-accordion-btn-active-icon);
  transform: var(--bs-accordion-btn-icon-transform);
}
.accordion-button::after {
  flex-shrink: 0;
  width: var(--bs-accordion-btn-icon-width);
  height: var(--bs-accordion-btn-icon-width);
  margin-left: auto;
  content: "";
  background-image: var(--bs-accordion-btn-icon);
  background-repeat: no-repeat;
  background-size: var(--bs-accordion-btn-icon-width);
  transition: var(--bs-accordion-btn-icon-transition);
}
@media (prefers-reduced-motion: reduce) {
  .accordion-button::after {
    transition: none;
  }
}
.accordion-button:hover {
  z-index: 2;
}
.accordion-button:focus {
  z-index: 3;
  outline: 0;
  box-shadow: var(--bs-accordion-btn-focus-box-shadow);
}

.accordion-header {
  margin-bottom: 0;
}

.accordion-item {
  color: var(--bs-accordion-color);
  background-color: var(--bs-accordion-bg);
  border: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color);
}
.accordion-item:not(:first-of-type) {
  border-top: 0;
}
.accordion-body {
  padding: var(--bs-accordion-body-padding-y) var(--bs-accordion-body-padding-x);
}

.accordion-flush > .accordion-item {
  border-right: 0;
  border-left: 0;
}
.accordion-flush > .accordion-item:first-child {
  border-top: 0;
}
.accordion-flush > .accordion-item:last-child {
  border-bottom: 0;
}
[data-bs-theme=dark] .accordion-button::after {
  --bs-accordion-btn-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23767676'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
  --bs-accordion-btn-active-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23767676'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

.breadcrumb {
  --bs-breadcrumb-padding-x: 0;
  --bs-breadcrumb-padding-y: 0;
  --bs-breadcrumb-margin-bottom: 1rem;
  --bs-breadcrumb-bg: ;
  --bs-breadcrumb-border-radius: ;
  --bs-breadcrumb-divider-color: var(--bs-secondary-color);
  --bs-breadcrumb-item-padding-x: 0.5rem;
  --bs-breadcrumb-item-active-color: var(--bs-secondary-color);
  display: flex;
  flex-wrap: wrap;
  padding: var(--bs-breadcrumb-padding-y) var(--bs-breadcrumb-padding-x);
  margin-bottom: var(--bs-breadcrumb-margin-bottom);
  font-size: var(--bs-breadcrumb-font-size);
  list-style: none;
  background-color: var(--bs-breadcrumb-bg);
}

.breadcrumb-item + .breadcrumb-item {
  padding-left: var(--bs-breadcrumb-item-padding-x);
}
.breadcrumb-item + .breadcrumb-item::before {
  float: left;
  padding-right: var(--bs-breadcrumb-item-padding-x);
  color: var(--bs-breadcrumb-divider-color);
  content: var(--bs-breadcrumb-divider, "/") /* rtl: var(--bs-breadcrumb-divider, "/") */;
}
.breadcrumb-item.active {
  color: var(--bs-breadcrumb-item-active-color);
}

.pagination {
  --bs-pagination-padding-x: 0.75rem;
  --bs-pagination-padding-y: 0.375rem;
  --bs-pagination-font-size: 1rem;
  --bs-pagination-color: var(--bs-link-color);
  --bs-pagination-bg: var(--bs-body-bg);
  --bs-pagination-border-width: var(--bs-border-width);
  --bs-pagination-border-color: transparent;
  --bs-pagination-border-radius: var(--bs-border-radius);
  --bs-pagination-hover-color: var(--bs-link-hover-color);
  --bs-pagination-hover-bg: var(--bs-tertiary-bg);
  --bs-pagination-hover-border-color: transparent;
  --bs-pagination-focus-color: var(--bs-link-hover-color);
  --bs-pagination-focus-bg: var(--bs-secondary-bg);
  --bs-pagination-focus-box-shadow: 0 0 0 0.25rem rgba(26, 26, 26, 0.25);
  --bs-pagination-active-color: #fff;
  --bs-pagination-active-bg: #1a1a1a;
  --bs-pagination-active-border-color: #1a1a1a;
  --bs-pagination-disabled-color: var(--bs-secondary-color);
  --bs-pagination-disabled-bg: var(--bs-secondary-bg);
  --bs-pagination-disabled-border-color: transparent;
  display: flex;
  padding-left: 0;
  list-style: none;
}

.page-link {
  position: relative;
  display: block;
  padding: var(--bs-pagination-padding-y) var(--bs-pagination-padding-x);
  font-size: var(--bs-pagination-font-size);
  color: var(--bs-pagination-color);
  text-decoration: none;
  background-color: var(--bs-pagination-bg);
  border: var(--bs-pagination-border-width) solid var(--bs-pagination-border-color);
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .page-link {
    transition: none;
  }
}
.page-link:hover {
  z-index: 2;
  color: var(--bs-pagination-hover-color);
  background-color: var(--bs-pagination-hover-bg);
  border-color: var(--bs-pagination-hover-border-color);
}
.page-link:focus {
  z-index: 3;
  color: var(--bs-pagination-focus-color);
  background-color: var(--bs-pagination-focus-bg);
  outline: 0;
  box-shadow: var(--bs-pagination-focus-box-shadow);
}
.page-link.active, .active > .page-link {
  z-index: 3;
  color: var(--bs-pagination-active-color);
  background-color: var(--bs-pagination-active-bg);
  border-color: var(--bs-pagination-active-border-color);
}
.page-link.disabled, .disabled > .page-link {
  color: var(--bs-pagination-disabled-color);
  pointer-events: none;
  background-color: var(--bs-pagination-disabled-bg);
  border-color: var(--bs-pagination-disabled-border-color);
}

.page-item:not(:first-child) .page-link {
  margin-left: calc(var(--bs-border-width) * -1);
}
.pagination-lg {
  --bs-pagination-padding-x: 1.5rem;
  --bs-pagination-padding-y: 0.75rem;
  --bs-pagination-font-size: 1.25rem;
  --bs-pagination-border-radius: var(--bs-border-radius-lg);
}

.pagination-sm {
  --bs-pagination-padding-x: 0.5rem;
  --bs-pagination-padding-y: 0.25rem;
  --bs-pagination-font-size: 0.875rem;
  --bs-pagination-border-radius: var(--bs-border-radius-sm);
}

.badge {
  --bs-badge-padding-x: 0.65em;
  --bs-badge-padding-y: 0.35em;
  --bs-badge-font-size: 0.75em;
  --bs-badge-font-weight: 600;
  --bs-badge-color: #fff;
  --bs-badge-border-radius: var(--bs-border-radius);
  display: inline-block;
  padding: var(--bs-badge-padding-y) var(--bs-badge-padding-x);
  font-size: var(--bs-badge-font-size);
  font-weight: var(--bs-badge-font-weight);
  line-height: 1;
  color: var(--bs-badge-color);
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
}
.badge:empty {
  display: none;
}

.btn .badge {
  position: relative;
  top: -1px;
}

.alert {
  --bs-alert-bg: transparent;
  --bs-alert-padding-x: 1rem;
  --bs-alert-padding-y: 1rem;
  --bs-alert-margin-bottom: 1rem;
  --bs-alert-color: inherit;
  --bs-alert-border-color: transparent;
  --bs-alert-border: var(--bs-border-width) solid var(--bs-alert-border-color);
  --bs-alert-border-radius: var(--bs-border-radius);
  --bs-alert-link-color: inherit;
  position: relative;
  padding: var(--bs-alert-padding-y) var(--bs-alert-padding-x);
  margin-bottom: var(--bs-alert-margin-bottom);
  color: var(--bs-alert-color);
  background-color: var(--bs-alert-bg);
  border: var(--bs-alert-border);
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 600;
  color: var(--bs-alert-link-color);
}

.alert-dismissible {
  padding-right: 3rem;
}
.alert-dismissible .btn-close {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  padding: 1.25rem 1rem;
}

.alert-primary {
  --bs-alert-color: var(--bs-primary-text-emphasis);
  --bs-alert-bg: var(--bs-primary-bg-subtle);
  --bs-alert-border-color: var(--bs-primary-border-subtle);
  --bs-alert-link-color: var(--bs-primary-text-emphasis);
}

.alert-secondary {
  --bs-alert-color: var(--bs-secondary-text-emphasis);
  --bs-alert-bg: var(--bs-secondary-bg-subtle);
  --bs-alert-border-color: var(--bs-secondary-border-subtle);
  --bs-alert-link-color: var(--bs-secondary-text-emphasis);
}

.alert-success {
  --bs-alert-color: var(--bs-success-text-emphasis);
  --bs-alert-bg: var(--bs-success-bg-subtle);
  --bs-alert-border-color: var(--bs-success-border-subtle);
  --bs-alert-link-color: var(--bs-success-text-emphasis);
}

.alert-info {
  --bs-alert-color: var(--bs-info-text-emphasis);
  --bs-alert-bg: var(--bs-info-bg-subtle);
  --bs-alert-border-color: var(--bs-info-border-subtle);
  --bs-alert-link-color: var(--bs-info-text-emphasis);
}

.alert-warning {
  --bs-alert-color: var(--bs-warning-text-emphasis);
  --bs-alert-bg: var(--bs-warning-bg-subtle);
  --bs-alert-border-color: var(--bs-warning-border-subtle);
  --bs-alert-link-color: var(--bs-warning-text-emphasis);
}

.alert-danger {
  --bs-alert-color: var(--bs-danger-text-emphasis);
  --bs-alert-bg: var(--bs-danger-bg-subtle);
  --bs-alert-border-color: var(--bs-danger-border-subtle);
  --bs-alert-link-color: var(--bs-danger-text-emphasis);
}

.alert-light {
  --bs-alert-color: var(--bs-light-text-emphasis);
  --bs-alert-bg: var(--bs-light-bg-subtle);
  --bs-alert-border-color: var(--bs-light-border-subtle);
  --bs-alert-link-color: var(--bs-light-text-emphasis);
}

.alert-dark {
  --bs-alert-color: var(--bs-dark-text-emphasis);
  --bs-alert-bg: var(--bs-dark-bg-subtle);
  --bs-alert-border-color: var(--bs-dark-border-subtle);
  --bs-alert-link-color: var(--bs-dark-text-emphasis);
}

@keyframes progress-bar-stripes {
  0% {
    background-position-x: 1rem;
  }
}
.progress,
.progress-stacked {
  --bs-progress-height: 1rem;
  --bs-progress-font-size: 0.75rem;
  --bs-progress-bg: var(--bs-secondary-bg);
  --bs-progress-border-radius: var(--bs-border-radius);
  --bs-progress-box-shadow: var(--bs-box-shadow-inset);
  --bs-progress-bar-color: #fff;
  --bs-progress-bar-bg: #1a1a1a;
  --bs-progress-bar-transition: width 0.6s ease;
  display: flex;
  height: var(--bs-progress-height);
  overflow: hidden;
  font-size: var(--bs-progress-font-size);
  background-color: var(--bs-progress-bg);
}

.progress-bar {
  display: flex;
  flex-direction: column;
  justify-content: center;
  overflow: hidden;
  color: var(--bs-progress-bar-color);
  text-align: center;
  white-space: nowrap;
  background-color: var(--bs-progress-bar-bg);
  transition: var(--bs-progress-bar-transition);
}
@media (prefers-reduced-motion: reduce) {
  .progress-bar {
    transition: none;
  }
}

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: var(--bs-progress-height) var(--bs-progress-height);
}

.progress-stacked > .progress {
  overflow: visible;
}

.progress-stacked > .progress > .progress-bar {
  width: 100%;
}

.progress-bar-animated {
  animation: 1s linear infinite progress-bar-stripes;
}
@media (prefers-reduced-motion: reduce) {
  .progress-bar-animated {
    animation: none;
  }
}

.list-group {
  --bs-list-group-color: var(--bs-body-color);
  --bs-list-group-bg: var(--bs-body-bg);
  --bs-list-group-border-color: var(--bs-border-color);
  --bs-list-group-border-width: var(--bs-border-width);
  --bs-list-group-border-radius: var(--bs-border-radius);
  --bs-list-group-item-padding-x: 1rem;
  --bs-list-group-item-padding-y: 0.5rem;
  --bs-list-group-action-color: var(--bs-secondary-color);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-tertiary-bg);
  --bs-list-group-action-active-color: var(--bs-body-color);
  --bs-list-group-action-active-bg: var(--bs-secondary-bg);
  --bs-list-group-disabled-color: var(--bs-secondary-color);
  --bs-list-group-disabled-bg: var(--bs-body-bg);
  --bs-list-group-active-color: #fff;
  --bs-list-group-active-bg: #1a1a1a;
  --bs-list-group-active-border-color: #1a1a1a;
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
}

.list-group-numbered {
  list-style-type: none;
  counter-reset: section;
}
.list-group-numbered > .list-group-item::before {
  content: counters(section, ".") ". ";
  counter-increment: section;
}

.list-group-item-action {
  width: 100%;
  color: var(--bs-list-group-action-color);
  text-align: inherit;
}
.list-group-item-action:hover, .list-group-item-action:focus {
  z-index: 1;
  color: var(--bs-list-group-action-hover-color);
  text-decoration: none;
  background-color: var(--bs-list-group-action-hover-bg);
}
.list-group-item-action:active {
  color: var(--bs-list-group-action-active-color);
  background-color: var(--bs-list-group-action-active-bg);
}

.list-group-item {
  position: relative;
  display: block;
  padding: var(--bs-list-group-item-padding-y) var(--bs-list-group-item-padding-x);
  color: var(--bs-list-group-color);
  text-decoration: none;
  background-color: var(--bs-list-group-bg);
  border: var(--bs-list-group-border-width) solid var(--bs-list-group-border-color);
}
.list-group-item.disabled, .list-group-item:disabled {
  color: var(--bs-list-group-disabled-color);
  pointer-events: none;
  background-color: var(--bs-list-group-disabled-bg);
}
.list-group-item.active {
  z-index: 2;
  color: var(--bs-list-group-active-color);
  background-color: var(--bs-list-group-active-bg);
  border-color: var(--bs-list-group-active-border-color);
}
.list-group-item + .list-group-item {
  border-top-width: 0;
}
.list-group-item + .list-group-item.active {
  margin-top: calc(-1 * var(--bs-list-group-border-width));
  border-top-width: var(--bs-list-group-border-width);
}

.list-group-horizontal {
  flex-direction: row;
}
.list-group-horizontal > .list-group-item.active {
  margin-top: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item {
  border-top-width: var(--bs-list-group-border-width);
  border-left-width: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item.active {
  margin-left: calc(-1 * var(--bs-list-group-border-width));
  border-left-width: var(--bs-list-group-border-width);
}

@media (min-width: 576px) {
  .list-group-horizontal-sm {
    flex-direction: row;
  }
  .list-group-horizontal-sm > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
@media (min-width: 768px) {
  .list-group-horizontal-md {
    flex-direction: row;
  }
  .list-group-horizontal-md > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
@media (min-width: 992px) {
  .list-group-horizontal-lg {
    flex-direction: row;
  }
  .list-group-horizontal-lg > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    flex-direction: row;
  }
  .list-group-horizontal-xl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
@media (min-width: 1400px) {
  .list-group-horizontal-xxl {
    flex-direction: row;
  }
  .list-group-horizontal-xxl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xxl > .list-group-item + .list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-xxl > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
.list-group-flush > .list-group-item {
  border-width: 0 0 var(--bs-list-group-border-width);
}
.list-group-flush > .list-group-item:last-child {
  border-bottom-width: 0;
}

.list-group-item-primary {
  --bs-list-group-color: var(--bs-primary-text-emphasis);
  --bs-list-group-bg: var(--bs-primary-bg-subtle);
  --bs-list-group-border-color: var(--bs-primary-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-primary-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-primary-border-subtle);
  --bs-list-group-active-color: var(--bs-primary-bg-subtle);
  --bs-list-group-active-bg: var(--bs-primary-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-primary-text-emphasis);
}

.list-group-item-secondary {
  --bs-list-group-color: var(--bs-secondary-text-emphasis);
  --bs-list-group-bg: var(--bs-secondary-bg-subtle);
  --bs-list-group-border-color: var(--bs-secondary-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-secondary-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-secondary-border-subtle);
  --bs-list-group-active-color: var(--bs-secondary-bg-subtle);
  --bs-list-group-active-bg: var(--bs-secondary-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-secondary-text-emphasis);
}

.list-group-item-success {
  --bs-list-group-color: var(--bs-success-text-emphasis);
  --bs-list-group-bg: var(--bs-success-bg-subtle);
  --bs-list-group-border-color: var(--bs-success-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-success-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-success-border-subtle);
  --bs-list-group-active-color: var(--bs-success-bg-subtle);
  --bs-list-group-active-bg: var(--bs-success-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-success-text-emphasis);
}

.list-group-item-info {
  --bs-list-group-color: var(--bs-info-text-emphasis);
  --bs-list-group-bg: var(--bs-info-bg-subtle);
  --bs-list-group-border-color: var(--bs-info-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-info-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-info-border-subtle);
  --bs-list-group-active-color: var(--bs-info-bg-subtle);
  --bs-list-group-active-bg: var(--bs-info-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-info-text-emphasis);
}

.list-group-item-warning {
  --bs-list-group-color: var(--bs-warning-text-emphasis);
  --bs-list-group-bg: var(--bs-warning-bg-subtle);
  --bs-list-group-border-color: var(--bs-warning-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-warning-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-warning-border-subtle);
  --bs-list-group-active-color: var(--bs-warning-bg-subtle);
  --bs-list-group-active-bg: var(--bs-warning-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-warning-text-emphasis);
}

.list-group-item-danger {
  --bs-list-group-color: var(--bs-danger-text-emphasis);
  --bs-list-group-bg: var(--bs-danger-bg-subtle);
  --bs-list-group-border-color: var(--bs-danger-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-danger-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-danger-border-subtle);
  --bs-list-group-active-color: var(--bs-danger-bg-subtle);
  --bs-list-group-active-bg: var(--bs-danger-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-danger-text-emphasis);
}

.list-group-item-light {
  --bs-list-group-color: var(--bs-light-text-emphasis);
  --bs-list-group-bg: var(--bs-light-bg-subtle);
  --bs-list-group-border-color: var(--bs-light-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-light-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-light-border-subtle);
  --bs-list-group-active-color: var(--bs-light-bg-subtle);
  --bs-list-group-active-bg: var(--bs-light-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-light-text-emphasis);
}

.list-group-item-dark {
  --bs-list-group-color: var(--bs-dark-text-emphasis);
  --bs-list-group-bg: var(--bs-dark-bg-subtle);
  --bs-list-group-border-color: var(--bs-dark-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-dark-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-dark-border-subtle);
  --bs-list-group-active-color: var(--bs-dark-bg-subtle);
  --bs-list-group-active-bg: var(--bs-dark-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-dark-text-emphasis);
}

.btn-close {
  --bs-btn-close-color: #000;
  --bs-btn-close-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
  --bs-btn-close-opacity: 0.5;
  --bs-btn-close-hover-opacity: 0.75;
  --bs-btn-close-focus-shadow: 0 0 0 0.25rem rgba(26, 26, 26, 0.25);
  --bs-btn-close-focus-opacity: 1;
  --bs-btn-close-disabled-opacity: 0.25;
  --bs-btn-close-white-filter: invert(1) grayscale(100%) brightness(200%);
  box-sizing: content-box;
  width: 1em;
  height: 1em;
  padding: 0.25em 0.25em;
  color: var(--bs-btn-close-color);
  background: transparent var(--bs-btn-close-bg) center/1em auto no-repeat;
  border: 0;
  opacity: var(--bs-btn-close-opacity);
}
.btn-close:hover {
  color: var(--bs-btn-close-color);
  text-decoration: none;
  opacity: var(--bs-btn-close-hover-opacity);
}
.btn-close:focus {
  outline: 0;
  box-shadow: var(--bs-btn-close-focus-shadow);
  opacity: var(--bs-btn-close-focus-opacity);
}
.btn-close:disabled, .btn-close.disabled {
  pointer-events: none;
  user-select: none;
  opacity: var(--bs-btn-close-disabled-opacity);
}

.btn-close-white {
  filter: var(--bs-btn-close-white-filter);
}

[data-bs-theme=dark] .btn-close {
  filter: var(--bs-btn-close-white-filter);
}

.toast {
  --bs-toast-zindex: 1090;
  --bs-toast-padding-x: 0.75rem;
  --bs-toast-padding-y: 0.5rem;
  --bs-toast-spacing: 1.5rem;
  --bs-toast-max-width: 350px;
  --bs-toast-font-size: 0.875rem;
  --bs-toast-color: ;
  --bs-toast-bg: rgba(var(--bs-body-bg-rgb), 0.85);
  --bs-toast-border-width: var(--bs-border-width);
  --bs-toast-border-color: var(--bs-border-color-translucent);
  --bs-toast-border-radius: var(--bs-border-radius);
  --bs-toast-box-shadow: var(--bs-box-shadow);
  --bs-toast-header-color: var(--bs-secondary-color);
  --bs-toast-header-bg: rgba(var(--bs-body-bg-rgb), 0.85);
  --bs-toast-header-border-color: var(--bs-border-color-translucent);
  width: var(--bs-toast-max-width);
  max-width: 100%;
  font-size: var(--bs-toast-font-size);
  color: var(--bs-toast-color);
  pointer-events: auto;
  background-color: var(--bs-toast-bg);
  background-clip: padding-box;
  border: var(--bs-toast-border-width) solid var(--bs-toast-border-color);
  box-shadow: var(--bs-toast-box-shadow);
}
.toast.showing {
  opacity: 0;
}
.toast:not(.show) {
  display: none;
}

.toast-container {
  --bs-toast-zindex: 1090;
  position: absolute;
  z-index: var(--bs-toast-zindex);
  width: max-content;
  max-width: 100%;
  pointer-events: none;
}
.toast-container > :not(:last-child) {
  margin-bottom: var(--bs-toast-spacing);
}

.toast-header {
  display: flex;
  align-items: center;
  padding: var(--bs-toast-padding-y) var(--bs-toast-padding-x);
  color: var(--bs-toast-header-color);
  background-color: var(--bs-toast-header-bg);
  background-clip: padding-box;
  border-bottom: var(--bs-toast-border-width) solid var(--bs-toast-header-border-color);
}
.toast-header .btn-close {
  margin-right: calc(-0.5 * var(--bs-toast-padding-x));
  margin-left: var(--bs-toast-padding-x);
}

.toast-body {
  padding: var(--bs-toast-padding-x);
  word-wrap: break-word;
}

.modal {
  --bs-modal-zindex: 1055;
  --bs-modal-width: 500px;
  --bs-modal-padding: 1rem;
  --bs-modal-margin: 0.5rem;
  --bs-modal-color: ;
  --bs-modal-bg: var(--bs-body-bg);
  --bs-modal-border-color: var(--bs-border-color-translucent);
  --bs-modal-border-width: var(--bs-border-width);
  --bs-modal-border-radius: var(--bs-border-radius-lg);
  --bs-modal-box-shadow: var(--bs-box-shadow-sm);
  --bs-modal-inner-border-radius: calc(var(--bs-border-radius-lg) - (var(--bs-border-width)));
  --bs-modal-header-padding-x: 1rem;
  --bs-modal-header-padding-y: 1rem;
  --bs-modal-header-padding: 1rem 1rem;
  --bs-modal-header-border-color: var(--bs-border-color);
  --bs-modal-header-border-width: var(--bs-border-width);
  --bs-modal-title-line-height: 1.5;
  --bs-modal-footer-gap: 0.5rem;
  --bs-modal-footer-bg: ;
  --bs-modal-footer-border-color: var(--bs-border-color);
  --bs-modal-footer-border-width: var(--bs-border-width);
  position: fixed;
  top: 0;
  left: 0;
  z-index: var(--bs-modal-zindex);
  display: none;
  width: 100%;
  height: 100%;
  overflow-x: hidden;
  overflow-y: auto;
  outline: 0;
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: var(--bs-modal-margin);
  pointer-events: none;
}
.modal.fade .modal-dialog {
  transition: transform 0.3s ease-out;
  transform: translate(0, -50px);
}
@media (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
    transition: none;
  }
}
.modal.show .modal-dialog {
  transform: none;
}
.modal.modal-static .modal-dialog {
  transform: scale(1.02);
}

.modal-dialog-scrollable {
  height: calc(100% - var(--bs-modal-margin) * 2);
}
.modal-dialog-scrollable .modal-content {
  max-height: 100%;
  overflow: hidden;
}
.modal-dialog-scrollable .modal-body {
  overflow-y: auto;
}

.modal-dialog-centered {
  display: flex;
  align-items: center;
  min-height: calc(100% - var(--bs-modal-margin) * 2);
}

.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  color: var(--bs-modal-color);
  pointer-events: auto;
  background-color: var(--bs-modal-bg);
  background-clip: padding-box;
  border: var(--bs-modal-border-width) solid var(--bs-modal-border-color);
  outline: 0;
}

.modal-backdrop {
  --bs-backdrop-zindex: 1050;
  --bs-backdrop-bg: #000;
  --bs-backdrop-opacity: 0.5;
  position: fixed;
  top: 0;
  left: 0;
  z-index: var(--bs-backdrop-zindex);
  width: 100vw;
  height: 100vh;
  background-color: var(--bs-backdrop-bg);
}
.modal-backdrop.fade {
  opacity: 0;
}
.modal-backdrop.show {
  opacity: var(--bs-backdrop-opacity);
}

.modal-header {
  display: flex;
  flex-shrink: 0;
  align-items: center;
  padding: var(--bs-modal-header-padding);
  border-bottom: var(--bs-modal-header-border-width) solid var(--bs-modal-header-border-color);
}
.modal-header .btn-close {
  padding: calc(var(--bs-modal-header-padding-y) * 0.5) calc(var(--bs-modal-header-padding-x) * 0.5);
  margin: calc(-0.5 * var(--bs-modal-header-padding-y)) calc(-0.5 * var(--bs-modal-header-padding-x)) calc(-0.5 * var(--bs-modal-header-padding-y)) auto;
}

.modal-title {
  margin-bottom: 0;
  line-height: var(--bs-modal-title-line-height);
}

.modal-body {
  position: relative;
  flex: 1 1 auto;
  padding: var(--bs-modal-padding);
}

.modal-footer {
  display: flex;
  flex-shrink: 0;
  flex-wrap: wrap;
  align-items: center;
  justify-content: flex-end;
  padding: calc(var(--bs-modal-padding) - var(--bs-modal-footer-gap) * 0.5);
  background-color: var(--bs-modal-footer-bg);
  border-top: var(--bs-modal-footer-border-width) solid var(--bs-modal-footer-border-color);
}
.modal-footer > * {
  margin: calc(var(--bs-modal-footer-gap) * 0.5);
}

@media (min-width: 576px) {
  .modal {
    --bs-modal-margin: 1.75rem;
    --bs-modal-box-shadow: var(--bs-box-shadow);
  }
  .modal-dialog {
    max-width: var(--bs-modal-width);
    margin-right: auto;
    margin-left: auto;
  }
  .modal-sm {
    --bs-modal-width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg,
  .modal-xl {
    --bs-modal-width: 800px;
  }
}
@media (min-width: 1200px) {
  .modal-xl {
    --bs-modal-width: 1140px;
  }
}
.modal-fullscreen {
  width: 100vw;
  max-width: none;
  height: 100%;
  margin: 0;
}
.modal-fullscreen .modal-content {
  height: 100%;
  border: 0;
}
.modal-fullscreen .modal-body {
  overflow-y: auto;
}

@media (max-width: 575.98px) {
  .modal-fullscreen-sm-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-sm-down .modal-content {
    height: 100%;
    border: 0;
  }
  .modal-fullscreen-sm-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 767.98px) {
  .modal-fullscreen-md-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-md-down .modal-content {
    height: 100%;
    border: 0;
  }
  .modal-fullscreen-md-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 991.98px) {
  .modal-fullscreen-lg-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-lg-down .modal-content {
    height: 100%;
    border: 0;
  }
  .modal-fullscreen-lg-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 1199.98px) {
  .modal-fullscreen-xl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-xl-down .modal-content {
    height: 100%;
    border: 0;
  }
  .modal-fullscreen-xl-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 1399.98px) {
  .modal-fullscreen-xxl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-xxl-down .modal-content {
    height: 100%;
    border: 0;
  }
  .modal-fullscreen-xxl-down .modal-body {
    overflow-y: auto;
  }
}
.tooltip {
  --bs-tooltip-zindex: 1080;
  --bs-tooltip-max-width: 200px;
  --bs-tooltip-padding-x: 0.5rem;
  --bs-tooltip-padding-y: 0.25rem;
  --bs-tooltip-margin: ;
  --bs-tooltip-font-size: 0.875rem;
  --bs-tooltip-color: var(--bs-body-bg);
  --bs-tooltip-bg: var(--bs-emphasis-color);
  --bs-tooltip-border-radius: var(--bs-border-radius);
  --bs-tooltip-opacity: 0.9;
  --bs-tooltip-arrow-width: 0.8rem;
  --bs-tooltip-arrow-height: 0.4rem;
  z-index: var(--bs-tooltip-zindex);
  display: block;
  margin: var(--bs-tooltip-margin);
  font-family: var(--bs-font-sans-serif);
  font-style: normal;
  font-weight: 300;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  white-space: normal;
  word-spacing: normal;
  line-break: auto;
  font-size: var(--bs-tooltip-font-size);
  word-wrap: break-word;
  opacity: 0;
}
.tooltip.show {
  opacity: var(--bs-tooltip-opacity);
}
.tooltip .tooltip-arrow {
  display: block;
  width: var(--bs-tooltip-arrow-width);
  height: var(--bs-tooltip-arrow-height);
}
.tooltip .tooltip-arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-tooltip-top .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow {
  bottom: calc(-1 * var(--bs-tooltip-arrow-height));
}
.bs-tooltip-top .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow::before {
  top: -1px;
  border-width: var(--bs-tooltip-arrow-height) calc(var(--bs-tooltip-arrow-width) * 0.5) 0;
  border-top-color: var(--bs-tooltip-bg);
}

/* rtl:begin:ignore */
.bs-tooltip-end .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow {
  left: calc(-1 * var(--bs-tooltip-arrow-height));
  width: var(--bs-tooltip-arrow-height);
  height: var(--bs-tooltip-arrow-width);
}
.bs-tooltip-end .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow::before {
  right: -1px;
  border-width: calc(var(--bs-tooltip-arrow-width) * 0.5) var(--bs-tooltip-arrow-height) calc(var(--bs-tooltip-arrow-width) * 0.5) 0;
  border-right-color: var(--bs-tooltip-bg);
}

/* rtl:end:ignore */
.bs-tooltip-bottom .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow {
  top: calc(-1 * var(--bs-tooltip-arrow-height));
}
.bs-tooltip-bottom .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow::before {
  bottom: -1px;
  border-width: 0 calc(var(--bs-tooltip-arrow-width) * 0.5) var(--bs-tooltip-arrow-height);
  border-bottom-color: var(--bs-tooltip-bg);
}

/* rtl:begin:ignore */
.bs-tooltip-start .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow {
  right: calc(-1 * var(--bs-tooltip-arrow-height));
  width: var(--bs-tooltip-arrow-height);
  height: var(--bs-tooltip-arrow-width);
}
.bs-tooltip-start .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before {
  left: -1px;
  border-width: calc(var(--bs-tooltip-arrow-width) * 0.5) 0 calc(var(--bs-tooltip-arrow-width) * 0.5) var(--bs-tooltip-arrow-height);
  border-left-color: var(--bs-tooltip-bg);
}

/* rtl:end:ignore */
.tooltip-inner {
  max-width: var(--bs-tooltip-max-width);
  padding: var(--bs-tooltip-padding-y) var(--bs-tooltip-padding-x);
  color: var(--bs-tooltip-color);
  text-align: center;
  background-color: var(--bs-tooltip-bg);
}

.popover {
  --bs-popover-zindex: 1070;
  --bs-popover-max-width: 276px;
  --bs-popover-font-size: 0.875rem;
  --bs-popover-bg: var(--bs-body-bg);
  --bs-popover-border-width: var(--bs-border-width);
  --bs-popover-border-color: var(--bs-border-color-translucent);
  --bs-popover-border-radius: var(--bs-border-radius-lg);
  --bs-popover-inner-border-radius: calc(var(--bs-border-radius-lg) - var(--bs-border-width));
  --bs-popover-box-shadow: var(--bs-box-shadow);
  --bs-popover-header-padding-x: 1rem;
  --bs-popover-header-padding-y: 0.5rem;
  --bs-popover-header-font-size: 1rem;
  --bs-popover-header-color: #1a1a1a;
  --bs-popover-header-bg: var(--bs-secondary-bg);
  --bs-popover-body-padding-x: 1rem;
  --bs-popover-body-padding-y: 1rem;
  --bs-popover-body-color: var(--bs-body-color);
  --bs-popover-arrow-width: 1rem;
  --bs-popover-arrow-height: 0.5rem;
  --bs-popover-arrow-border: var(--bs-popover-border-color);
  z-index: var(--bs-popover-zindex);
  display: block;
  max-width: var(--bs-popover-max-width);
  font-family: var(--bs-font-sans-serif);
  font-style: normal;
  font-weight: 300;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  white-space: normal;
  word-spacing: normal;
  line-break: auto;
  font-size: var(--bs-popover-font-size);
  word-wrap: break-word;
  background-color: var(--bs-popover-bg);
  background-clip: padding-box;
  border: var(--bs-popover-border-width) solid var(--bs-popover-border-color);
}
.popover .popover-arrow {
  display: block;
  width: var(--bs-popover-arrow-width);
  height: var(--bs-popover-arrow-height);
}
.popover .popover-arrow::before, .popover .popover-arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
  border-width: 0;
}

.bs-popover-top > .popover-arrow, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow {
  bottom: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
}
.bs-popover-top > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::before, .bs-popover-top > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::after {
  border-width: var(--bs-popover-arrow-height) calc(var(--bs-popover-arrow-width) * 0.5) 0;
}
.bs-popover-top > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::before {
  bottom: 0;
  border-top-color: var(--bs-popover-arrow-border);
}
.bs-popover-top > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::after {
  bottom: var(--bs-popover-border-width);
  border-top-color: var(--bs-popover-bg);
}

/* rtl:begin:ignore */
.bs-popover-end > .popover-arrow, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow {
  left: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
  width: var(--bs-popover-arrow-height);
  height: var(--bs-popover-arrow-width);
}
.bs-popover-end > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::before, .bs-popover-end > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::after {
  border-width: calc(var(--bs-popover-arrow-width) * 0.5) var(--bs-popover-arrow-height) calc(var(--bs-popover-arrow-width) * 0.5) 0;
}
.bs-popover-end > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::before {
  left: 0;
  border-right-color: var(--bs-popover-arrow-border);
}
.bs-popover-end > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::after {
  left: var(--bs-popover-border-width);
  border-right-color: var(--bs-popover-bg);
}

/* rtl:end:ignore */
.bs-popover-bottom > .popover-arrow, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow {
  top: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
}
.bs-popover-bottom > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::before, .bs-popover-bottom > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::after {
  border-width: 0 calc(var(--bs-popover-arrow-width) * 0.5) var(--bs-popover-arrow-height);
}
.bs-popover-bottom > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::before {
  top: 0;
  border-bottom-color: var(--bs-popover-arrow-border);
}
.bs-popover-bottom > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::after {
  top: var(--bs-popover-border-width);
  border-bottom-color: var(--bs-popover-bg);
}
.bs-popover-bottom .popover-header::before, .bs-popover-auto[data-popper-placement^=bottom] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: var(--bs-popover-arrow-width);
  margin-left: calc(-0.5 * var(--bs-popover-arrow-width));
  content: "";
  border-bottom: var(--bs-popover-border-width) solid var(--bs-popover-header-bg);
}

/* rtl:begin:ignore */
.bs-popover-start > .popover-arrow, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow {
  right: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
  width: var(--bs-popover-arrow-height);
  height: var(--bs-popover-arrow-width);
}
.bs-popover-start > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::before, .bs-popover-start > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::after {
  border-width: calc(var(--bs-popover-arrow-width) * 0.5) 0 calc(var(--bs-popover-arrow-width) * 0.5) var(--bs-popover-arrow-height);
}
.bs-popover-start > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::before {
  right: 0;
  border-left-color: var(--bs-popover-arrow-border);
}
.bs-popover-start > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::after {
  right: var(--bs-popover-border-width);
  border-left-color: var(--bs-popover-bg);
}

/* rtl:end:ignore */
.popover-header {
  padding: var(--bs-popover-header-padding-y) var(--bs-popover-header-padding-x);
  margin-bottom: 0;
  font-size: var(--bs-popover-header-font-size);
  color: var(--bs-popover-header-color);
  background-color: var(--bs-popover-header-bg);
  border-bottom: var(--bs-popover-border-width) solid var(--bs-popover-border-color);
}
.popover-header:empty {
  display: none;
}

.popover-body {
  padding: var(--bs-popover-body-padding-y) var(--bs-popover-body-padding-x);
  color: var(--bs-popover-body-color);
}

.carousel {
  position: relative;
}

.carousel.pointer-event {
  touch-action: pan-y;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}
.carousel-inner::after {
  display: block;
  clear: both;
  content: "";
}

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  backface-visibility: hidden;
  transition: transform 0.6s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-item {
    transition: none;
  }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}

.carousel-item-next:not(.carousel-item-start),
.active.carousel-item-end {
  transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-end),
.active.carousel-item-start {
  transform: translateX(-100%);
}

.carousel-fade .carousel-item {
  opacity: 0;
  transition-property: opacity;
  transform: none;
}
.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-start,
.carousel-fade .carousel-item-prev.carousel-item-end {
  z-index: 1;
  opacity: 1;
}
.carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
  z-index: 0;
  opacity: 0;
  transition: opacity 0s 0.6s;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-fade .active.carousel-item-start,
  .carousel-fade .active.carousel-item-end {
    transition: none;
  }
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 15%;
  padding: 0;
  color: #fff;
  text-align: center;
  background: none;
  border: 0;
  opacity: 0.5;
  transition: opacity 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-control-prev,
  .carousel-control-next {
    transition: none;
  }
}
.carousel-control-prev:hover, .carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}

.carousel-control-prev {
  left: 0;
}

.carousel-control-next {
  right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  background-repeat: no-repeat;
  background-position: 50%;
  background-size: 100% 100%;
}

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e") /*rtl:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e")*/;
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e") /*rtl:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e")*/;
}

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 2;
  display: flex;
  justify-content: center;
  padding: 0;
  margin-right: 15%;
  margin-bottom: 1rem;
  margin-left: 15%;
}
.carousel-indicators [data-bs-target] {
  box-sizing: content-box;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  padding: 0;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #fff;
  background-clip: padding-box;
  border: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  opacity: 0.5;
  transition: opacity 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-indicators [data-bs-target] {
    transition: none;
  }
}
.carousel-indicators .active {
  opacity: 1;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 1.25rem;
  left: 15%;
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
  color: #fff;
  text-align: center;
}

.carousel-dark .carousel-control-prev-icon,
.carousel-dark .carousel-control-next-icon {
  filter: invert(1) grayscale(100);
}
.carousel-dark .carousel-indicators [data-bs-target] {
  background-color: #000;
}
.carousel-dark .carousel-caption {
  color: #000;
}

[data-bs-theme=dark] .carousel .carousel-control-prev-icon,
[data-bs-theme=dark] .carousel .carousel-control-next-icon, [data-bs-theme=dark].carousel .carousel-control-prev-icon,
[data-bs-theme=dark].carousel .carousel-control-next-icon {
  filter: invert(1) grayscale(100);
}
[data-bs-theme=dark] .carousel .carousel-indicators [data-bs-target], [data-bs-theme=dark].carousel .carousel-indicators [data-bs-target] {
  background-color: #000;
}
[data-bs-theme=dark] .carousel .carousel-caption, [data-bs-theme=dark].carousel .carousel-caption {
  color: #000;
}

.spinner-grow,
.spinner-border {
  display: inline-block;
  width: var(--bs-spinner-width);
  height: var(--bs-spinner-height);
  vertical-align: var(--bs-spinner-vertical-align);
  border-radius: 50%;
  animation: var(--bs-spinner-animation-speed) linear infinite var(--bs-spinner-animation-name);
}

@keyframes spinner-border {
  to {
    transform: rotate(360deg) /* rtl:ignore */;
  }
}
.spinner-border {
  --bs-spinner-width: 2rem;
  --bs-spinner-height: 2rem;
  --bs-spinner-vertical-align: -0.125em;
  --bs-spinner-border-width: 0.25em;
  --bs-spinner-animation-speed: 0.75s;
  --bs-spinner-animation-name: spinner-border;
  border: var(--bs-spinner-border-width) solid currentcolor;
  border-right-color: transparent;
}

.spinner-border-sm {
  --bs-spinner-width: 1rem;
  --bs-spinner-height: 1rem;
  --bs-spinner-border-width: 0.2em;
}

@keyframes spinner-grow {
  0% {
    transform: scale(0);
  }
  50% {
    opacity: 1;
    transform: none;
  }
}
.spinner-grow {
  --bs-spinner-width: 2rem;
  --bs-spinner-height: 2rem;
  --bs-spinner-vertical-align: -0.125em;
  --bs-spinner-animation-speed: 0.75s;
  --bs-spinner-animation-name: spinner-grow;
  background-color: currentcolor;
  opacity: 0;
}

.spinner-grow-sm {
  --bs-spinner-width: 1rem;
  --bs-spinner-height: 1rem;
}

@media (prefers-reduced-motion: reduce) {
  .spinner-border,
  .spinner-grow {
    --bs-spinner-animation-speed: 1.5s;
  }
}
.offcanvas, .offcanvas-xxl, .offcanvas-xl, .offcanvas-lg, .offcanvas-md, .offcanvas-sm {
  --bs-offcanvas-zindex: 1045;
  --bs-offcanvas-width: 400px;
  --bs-offcanvas-height: 30vh;
  --bs-offcanvas-padding-x: 1rem;
  --bs-offcanvas-padding-y: 1rem;
  --bs-offcanvas-color: var(--bs-body-color);
  --bs-offcanvas-bg: var(--bs-body-bg);
  --bs-offcanvas-border-width: var(--bs-border-width);
  --bs-offcanvas-border-color: var(--bs-border-color-translucent);
  --bs-offcanvas-box-shadow: var(--bs-box-shadow-sm);
  --bs-offcanvas-transition: transform 0.3s ease-in-out;
  --bs-offcanvas-title-line-height: 1.5;
}

@media (max-width: 575.98px) {
  .offcanvas-sm {
    position: fixed;
    bottom: 0;
    z-index: var(--bs-offcanvas-zindex);
    display: flex;
    flex-direction: column;
    max-width: 100%;
    color: var(--bs-offcanvas-color);
    visibility: hidden;
    background-color: var(--bs-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    transition: var(--bs-offcanvas-transition);
  }
}
@media (max-width: 575.98px) and (prefers-reduced-motion: reduce) {
  .offcanvas-sm {
    transition: none;
  }
}
@media (max-width: 575.98px) {
  .offcanvas-sm.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--bs-offcanvas-width);
    border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(-100%);
  }
  .offcanvas-sm.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--bs-offcanvas-width);
    border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(100%);
  }
  .offcanvas-sm.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(-100%);
  }
  .offcanvas-sm.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(100%);
  }
  .offcanvas-sm.showing, .offcanvas-sm.show:not(.hiding) {
    transform: none;
  }
  .offcanvas-sm.showing, .offcanvas-sm.hiding, .offcanvas-sm.show {
    visibility: visible;
  }
}
@media (min-width: 576px) {
  .offcanvas-sm {
    --bs-offcanvas-height: auto;
    --bs-offcanvas-border-width: 0;
    background-color: transparent !important;
  }
  .offcanvas-sm .offcanvas-header {
    display: none;
  }
  .offcanvas-sm .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important;
  }
}

@media (max-width: 767.98px) {
  .offcanvas-md {
    position: fixed;
    bottom: 0;
    z-index: var(--bs-offcanvas-zindex);
    display: flex;
    flex-direction: column;
    max-width: 100%;
    color: var(--bs-offcanvas-color);
    visibility: hidden;
    background-color: var(--bs-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    transition: var(--bs-offcanvas-transition);
  }
}
@media (max-width: 767.98px) and (prefers-reduced-motion: reduce) {
  .offcanvas-md {
    transition: none;
  }
}
@media (max-width: 767.98px) {
  .offcanvas-md.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--bs-offcanvas-width);
    border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(-100%);
  }
  .offcanvas-md.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--bs-offcanvas-width);
    border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(100%);
  }
  .offcanvas-md.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(-100%);
  }
  .offcanvas-md.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(100%);
  }
  .offcanvas-md.showing, .offcanvas-md.show:not(.hiding) {
    transform: none;
  }
  .offcanvas-md.showing, .offcanvas-md.hiding, .offcanvas-md.show {
    visibility: visible;
  }
}
@media (min-width: 768px) {
  .offcanvas-md {
    --bs-offcanvas-height: auto;
    --bs-offcanvas-border-width: 0;
    background-color: transparent !important;
  }
  .offcanvas-md .offcanvas-header {
    display: none;
  }
  .offcanvas-md .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important;
  }
}

@media (max-width: 991.98px) {
  .offcanvas-lg {
    position: fixed;
    bottom: 0;
    z-index: var(--bs-offcanvas-zindex);
    display: flex;
    flex-direction: column;
    max-width: 100%;
    color: var(--bs-offcanvas-color);
    visibility: hidden;
    background-color: var(--bs-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    transition: var(--bs-offcanvas-transition);
  }
}
@media (max-width: 991.98px) and (prefers-reduced-motion: reduce) {
  .offcanvas-lg {
    transition: none;
  }
}
@media (max-width: 991.98px) {
  .offcanvas-lg.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--bs-offcanvas-width);
    border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(-100%);
  }
  .offcanvas-lg.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--bs-offcanvas-width);
    border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(100%);
  }
  .offcanvas-lg.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(-100%);
  }
  .offcanvas-lg.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(100%);
  }
  .offcanvas-lg.showing, .offcanvas-lg.show:not(.hiding) {
    transform: none;
  }
  .offcanvas-lg.showing, .offcanvas-lg.hiding, .offcanvas-lg.show {
    visibility: visible;
  }
}
@media (min-width: 992px) {
  .offcanvas-lg {
    --bs-offcanvas-height: auto;
    --bs-offcanvas-border-width: 0;
    background-color: transparent !important;
  }
  .offcanvas-lg .offcanvas-header {
    display: none;
  }
  .offcanvas-lg .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important;
  }
}

@media (max-width: 1199.98px) {
  .offcanvas-xl {
    position: fixed;
    bottom: 0;
    z-index: var(--bs-offcanvas-zindex);
    display: flex;
    flex-direction: column;
    max-width: 100%;
    color: var(--bs-offcanvas-color);
    visibility: hidden;
    background-color: var(--bs-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    transition: var(--bs-offcanvas-transition);
  }
}
@media (max-width: 1199.98px) and (prefers-reduced-motion: reduce) {
  .offcanvas-xl {
    transition: none;
  }
}
@media (max-width: 1199.98px) {
  .offcanvas-xl.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--bs-offcanvas-width);
    border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(-100%);
  }
  .offcanvas-xl.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--bs-offcanvas-width);
    border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(100%);
  }
  .offcanvas-xl.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(-100%);
  }
  .offcanvas-xl.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(100%);
  }
  .offcanvas-xl.showing, .offcanvas-xl.show:not(.hiding) {
    transform: none;
  }
  .offcanvas-xl.showing, .offcanvas-xl.hiding, .offcanvas-xl.show {
    visibility: visible;
  }
}
@media (min-width: 1200px) {
  .offcanvas-xl {
    --bs-offcanvas-height: auto;
    --bs-offcanvas-border-width: 0;
    background-color: transparent !important;
  }
  .offcanvas-xl .offcanvas-header {
    display: none;
  }
  .offcanvas-xl .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important;
  }
}

@media (max-width: 1399.98px) {
  .offcanvas-xxl {
    position: fixed;
    bottom: 0;
    z-index: var(--bs-offcanvas-zindex);
    display: flex;
    flex-direction: column;
    max-width: 100%;
    color: var(--bs-offcanvas-color);
    visibility: hidden;
    background-color: var(--bs-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    transition: var(--bs-offcanvas-transition);
  }
}
@media (max-width: 1399.98px) and (prefers-reduced-motion: reduce) {
  .offcanvas-xxl {
    transition: none;
  }
}
@media (max-width: 1399.98px) {
  .offcanvas-xxl.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--bs-offcanvas-width);
    border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(-100%);
  }
  .offcanvas-xxl.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--bs-offcanvas-width);
    border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(100%);
  }
  .offcanvas-xxl.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(-100%);
  }
  .offcanvas-xxl.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(100%);
  }
  .offcanvas-xxl.showing, .offcanvas-xxl.show:not(.hiding) {
    transform: none;
  }
  .offcanvas-xxl.showing, .offcanvas-xxl.hiding, .offcanvas-xxl.show {
    visibility: visible;
  }
}
@media (min-width: 1400px) {
  .offcanvas-xxl {
    --bs-offcanvas-height: auto;
    --bs-offcanvas-border-width: 0;
    background-color: transparent !important;
  }
  .offcanvas-xxl .offcanvas-header {
    display: none;
  }
  .offcanvas-xxl .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important;
  }
}

.offcanvas {
  position: fixed;
  bottom: 0;
  z-index: var(--bs-offcanvas-zindex);
  display: flex;
  flex-direction: column;
  max-width: 100%;
  color: var(--bs-offcanvas-color);
  visibility: hidden;
  background-color: var(--bs-offcanvas-bg);
  background-clip: padding-box;
  outline: 0;
  transition: var(--bs-offcanvas-transition);
}
@media (prefers-reduced-motion: reduce) {
  .offcanvas {
    transition: none;
  }
}
.offcanvas.offcanvas-start {
  top: 0;
  left: 0;
  width: var(--bs-offcanvas-width);
  border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
  transform: translateX(-100%);
}
.offcanvas.offcanvas-end {
  top: 0;
  right: 0;
  width: var(--bs-offcanvas-width);
  border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
  transform: translateX(100%);
}
.offcanvas.offcanvas-top {
  top: 0;
  right: 0;
  left: 0;
  height: var(--bs-offcanvas-height);
  max-height: 100%;
  border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
  transform: translateY(-100%);
}
.offcanvas.offcanvas-bottom {
  right: 0;
  left: 0;
  height: var(--bs-offcanvas-height);
  max-height: 100%;
  border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
  transform: translateY(100%);
}
.offcanvas.showing, .offcanvas.show:not(.hiding) {
  transform: none;
}
.offcanvas.showing, .offcanvas.hiding, .offcanvas.show {
  visibility: visible;
}

.offcanvas-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: #000;
}
.offcanvas-backdrop.fade {
  opacity: 0;
}
.offcanvas-backdrop.show {
  opacity: 0.5;
}

.offcanvas-header {
  display: flex;
  align-items: center;
  padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x);
}
.offcanvas-header .btn-close {
  padding: calc(var(--bs-offcanvas-padding-y) * 0.5) calc(var(--bs-offcanvas-padding-x) * 0.5);
  margin: calc(-0.5 * var(--bs-offcanvas-padding-y)) calc(-0.5 * var(--bs-offcanvas-padding-x)) calc(-0.5 * var(--bs-offcanvas-padding-y)) auto;
}

.offcanvas-title {
  margin-bottom: 0;
  line-height: var(--bs-offcanvas-title-line-height);
}

.offcanvas-body {
  flex-grow: 1;
  padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x);
  overflow-y: auto;
}

.placeholder {
  display: inline-block;
  min-height: 1em;
  vertical-align: middle;
  cursor: wait;
  background-color: currentcolor;
  opacity: 0.5;
}
.placeholder.btn::before {
  display: inline-block;
  content: "";
}

.placeholder-xs {
  min-height: 0.6em;
}

.placeholder-sm {
  min-height: 0.8em;
}

.placeholder-lg {
  min-height: 1.2em;
}

.placeholder-glow .placeholder {
  animation: placeholder-glow 2s ease-in-out infinite;
}

@keyframes placeholder-glow {
  50% {
    opacity: 0.2;
  }
}
.placeholder-wave {
  mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.8) 75%, #000 95%);
  mask-size: 200% 100%;
  animation: placeholder-wave 2s linear infinite;
}

@keyframes placeholder-wave {
  100% {
    mask-position: -200% 0%;
  }
}
.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

.text-bg-primary {
  color: #fff !important;
  background-color: RGBA(var(--bs-primary-rgb), var(--bs-bg-opacity, 1)) !important;
}

.text-bg-secondary {
  color: #000 !important;
  background-color: RGBA(var(--bs-secondary-rgb), var(--bs-bg-opacity, 1)) !important;
}

.text-bg-success {
  color: #fff !important;
  background-color: RGBA(var(--bs-success-rgb), var(--bs-bg-opacity, 1)) !important;
}

.text-bg-info {
  color: #fff !important;
  background-color: RGBA(var(--bs-info-rgb), var(--bs-bg-opacity, 1)) !important;
}

.text-bg-warning {
  color: #000 !important;
  background-color: RGBA(var(--bs-warning-rgb), var(--bs-bg-opacity, 1)) !important;
}

.text-bg-danger {
  color: #fff !important;
  background-color: RGBA(var(--bs-danger-rgb), var(--bs-bg-opacity, 1)) !important;
}

.text-bg-light {
  color: #000 !important;
  background-color: RGBA(var(--bs-light-rgb), var(--bs-bg-opacity, 1)) !important;
}

.text-bg-dark {
  color: #fff !important;
  background-color: RGBA(var(--bs-dark-rgb), var(--bs-bg-opacity, 1)) !important;
}

.link-primary {
  color: RGBA(var(--bs-primary-rgb), var(--bs-link-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--bs-primary-rgb), var(--bs-link-underline-opacity, 1)) !important;
}
.link-primary:hover, .link-primary:focus {
  color: RGBA(21, 21, 21, var(--bs-link-opacity, 1)) !important;
  text-decoration-color: RGBA(21, 21, 21, var(--bs-link-underline-opacity, 1)) !important;
}

.link-secondary {
  color: RGBA(var(--bs-secondary-rgb), var(--bs-link-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--bs-secondary-rgb), var(--bs-link-underline-opacity, 1)) !important;
}
.link-secondary:hover, .link-secondary:focus {
  color: RGBA(255, 255, 255, var(--bs-link-opacity, 1)) !important;
  text-decoration-color: RGBA(255, 255, 255, var(--bs-link-underline-opacity, 1)) !important;
}

.link-success {
  color: RGBA(var(--bs-success-rgb), var(--bs-link-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--bs-success-rgb), var(--bs-link-underline-opacity, 1)) !important;
}
.link-success:hover, .link-success:focus {
  color: RGBA(60, 153, 92, var(--bs-link-opacity, 1)) !important;
  text-decoration-color: RGBA(60, 153, 92, var(--bs-link-underline-opacity, 1)) !important;
}

.link-info {
  color: RGBA(var(--bs-info-rgb), var(--bs-link-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--bs-info-rgb), var(--bs-link-underline-opacity, 1)) !important;
}
.link-info:hover, .link-info:focus {
  color: RGBA(25, 124, 166, var(--bs-link-opacity, 1)) !important;
  text-decoration-color: RGBA(25, 124, 166, var(--bs-link-underline-opacity, 1)) !important;
}

.link-warning {
  color: RGBA(var(--bs-warning-rgb), var(--bs-link-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--bs-warning-rgb), var(--bs-link-underline-opacity, 1)) !important;
}
.link-warning:hover, .link-warning:focus {
  color: RGBA(243, 189, 113, var(--bs-link-opacity, 1)) !important;
  text-decoration-color: RGBA(243, 189, 113, var(--bs-link-underline-opacity, 1)) !important;
}

.link-danger {
  color: RGBA(var(--bs-danger-rgb), var(--bs-link-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--bs-danger-rgb), var(--bs-link-underline-opacity, 1)) !important;
}
.link-danger:hover, .link-danger:focus {
  color: RGBA(174, 66, 63, var(--bs-link-opacity, 1)) !important;
  text-decoration-color: RGBA(174, 66, 63, var(--bs-link-underline-opacity, 1)) !important;
}

.link-light {
  color: RGBA(var(--bs-light-rgb), var(--bs-link-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--bs-light-rgb), var(--bs-link-underline-opacity, 1)) !important;
}
.link-light:hover, .link-light:focus {
  color: RGBA(255, 255, 255, var(--bs-link-opacity, 1)) !important;
  text-decoration-color: RGBA(255, 255, 255, var(--bs-link-underline-opacity, 1)) !important;
}

.link-dark {
  color: RGBA(var(--bs-dark-rgb), var(--bs-link-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--bs-dark-rgb), var(--bs-link-underline-opacity, 1)) !important;
}
.link-dark:hover, .link-dark:focus {
  color: RGBA(42, 46, 51, var(--bs-link-opacity, 1)) !important;
  text-decoration-color: RGBA(42, 46, 51, var(--bs-link-underline-opacity, 1)) !important;
}

.link-body-emphasis {
  color: RGBA(var(--bs-emphasis-color-rgb), var(--bs-link-opacity, 1)) !important;
  text-decoration-color: RGBA(var(--bs-emphasis-color-rgb), var(--bs-link-underline-opacity, 1)) !important;
}
.link-body-emphasis:hover, .link-body-emphasis:focus {
  color: RGBA(var(--bs-emphasis-color-rgb), var(--bs-link-opacity, 0.75)) !important;
  text-decoration-color: RGBA(var(--bs-emphasis-color-rgb), var(--bs-link-underline-opacity, 0.75)) !important;
}

.focus-ring:focus {
  outline: 0;
  box-shadow: var(--bs-focus-ring-x, 0) var(--bs-focus-ring-y, 0) var(--bs-focus-ring-blur, 0) var(--bs-focus-ring-width) var(--bs-focus-ring-color);
}

.icon-link {
  display: inline-flex;
  gap: 0.375rem;
  align-items: center;
  text-decoration-color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 0.5));
  text-underline-offset: 0.25em;
  backface-visibility: hidden;
}
.icon-link > .bi {
  flex-shrink: 0;
  width: 1em;
  height: 1em;
  fill: currentcolor;
  transition: 0.2s ease-in-out transform;
}
@media (prefers-reduced-motion: reduce) {
  .icon-link > .bi {
    transition: none;
  }
}

.icon-link-hover:hover > .bi, .icon-link-hover:focus-visible > .bi {
  transform: var(--bs-icon-link-transform, translate3d(0.25em, 0, 0));
}

.ratio {
  position: relative;
  width: 100%;
}
.ratio::before {
  display: block;
  padding-top: var(--bs-aspect-ratio);
  content: "";
}
.ratio > * {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.ratio-1x1 {
  --bs-aspect-ratio: 100%;
}

.ratio-4x3 {
  --bs-aspect-ratio: 75%;
}

.ratio-16x9 {
  --bs-aspect-ratio: 56.25%;
}

.ratio-21x9 {
  --bs-aspect-ratio: 42.8571428571%;
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}

.sticky-top {
  position: sticky;
  top: 0;
  z-index: 1020;
}

.sticky-bottom {
  position: sticky;
  bottom: 0;
  z-index: 1020;
}

@media (min-width: 576px) {
  .sticky-sm-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-sm-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
@media (min-width: 768px) {
  .sticky-md-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-md-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
@media (min-width: 992px) {
  .sticky-lg-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-lg-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
@media (min-width: 1200px) {
  .sticky-xl-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-xl-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
@media (min-width: 1400px) {
  .sticky-xxl-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-xxl-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
.hstack {
  display: flex;
  flex-direction: row;
  align-items: center;
  align-self: stretch;
}

.vstack {
  display: flex;
  flex: 1 1 auto;
  flex-direction: column;
  align-self: stretch;
}

.visually-hidden,
.visually-hidden-focusable:not(:focus):not(:focus-within) {
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important;
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  white-space: nowrap !important;
  border: 0 !important;
}
.visually-hidden:not(caption),
.visually-hidden-focusable:not(:focus):not(:focus-within):not(caption) {
  position: absolute !important;
}

.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  content: "";
}

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.vr {
  display: inline-block;
  align-self: stretch;
  width: var(--bs-border-width);
  min-height: 1em;
  background-color: currentcolor;
  opacity: 0.25;
}

.align-baseline {
  vertical-align: baseline !important;
}

.align-top {
  vertical-align: top !important;
}

.align-middle {
  vertical-align: middle !important;
}

.align-bottom {
  vertical-align: bottom !important;
}

.align-text-bottom {
  vertical-align: text-bottom !important;
}

.align-text-top {
  vertical-align: text-top !important;
}

.float-start {
  float: left !important;
}

.float-end {
  float: right !important;
}

.float-none {
  float: none !important;
}

.object-fit-contain {
  object-fit: contain !important;
}

.object-fit-cover {
  object-fit: cover !important;
}

.object-fit-fill {
  object-fit: fill !important;
}

.object-fit-scale {
  object-fit: scale-down !important;
}

.object-fit-none {
  object-fit: none !important;
}

.opacity-0 {
  opacity: 0 !important;
}

.opacity-25 {
  opacity: 0.25 !important;
}

.opacity-50 {
  opacity: 0.5 !important;
}

.opacity-75 {
  opacity: 0.75 !important;
}

.opacity-100 {
  opacity: 1 !important;
}

.overflow-auto {
  overflow: auto !important;
}

.overflow-hidden {
  overflow: hidden !important;
}

.overflow-visible {
  overflow: visible !important;
}

.overflow-scroll {
  overflow: scroll !important;
}

.overflow-x-auto {
  overflow-x: auto !important;
}

.overflow-x-hidden {
  overflow-x: hidden !important;
}

.overflow-x-visible {
  overflow-x: visible !important;
}

.overflow-x-scroll {
  overflow-x: scroll !important;
}

.overflow-y-auto {
  overflow-y: auto !important;
}

.overflow-y-hidden {
  overflow-y: hidden !important;
}

.overflow-y-visible {
  overflow-y: visible !important;
}

.overflow-y-scroll {
  overflow-y: scroll !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.d-grid {
  display: grid !important;
}

.d-inline-grid {
  display: inline-grid !important;
}

.d-table {
  display: table !important;
}

.d-table-row {
  display: table-row !important;
}

.d-table-cell {
  display: table-cell !important;
}

.d-flex {
  display: flex !important;
}

.d-inline-flex {
  display: inline-flex !important;
}

.d-none {
  display: none !important;
}

.shadow {
  box-shadow: var(--bs-box-shadow) !important;
}

.shadow-sm {
  box-shadow: var(--bs-box-shadow-sm) !important;
}

.shadow-lg {
  box-shadow: var(--bs-box-shadow-lg) !important;
}

.shadow-none {
  box-shadow: none !important;
}

.focus-ring-primary {
  --bs-focus-ring-color: rgba(var(--bs-primary-rgb), var(--bs-focus-ring-opacity));
}

.focus-ring-secondary {
  --bs-focus-ring-color: rgba(var(--bs-secondary-rgb), var(--bs-focus-ring-opacity));
}

.focus-ring-success {
  --bs-focus-ring-color: rgba(var(--bs-success-rgb), var(--bs-focus-ring-opacity));
}

.focus-ring-info {
  --bs-focus-ring-color: rgba(var(--bs-info-rgb), var(--bs-focus-ring-opacity));
}

.focus-ring-warning {
  --bs-focus-ring-color: rgba(var(--bs-warning-rgb), var(--bs-focus-ring-opacity));
}

.focus-ring-danger {
  --bs-focus-ring-color: rgba(var(--bs-danger-rgb), var(--bs-focus-ring-opacity));
}

.focus-ring-light {
  --bs-focus-ring-color: rgba(var(--bs-light-rgb), var(--bs-focus-ring-opacity));
}

.focus-ring-dark {
  --bs-focus-ring-color: rgba(var(--bs-dark-rgb), var(--bs-focus-ring-opacity));
}

.position-static {
  position: static !important;
}

.position-relative {
  position: relative !important;
}

.position-absolute {
  position: absolute !important;
}

.position-fixed {
  position: fixed !important;
}

.position-sticky {
  position: sticky !important;
}

.top-0 {
  top: 0 !important;
}

.top-50 {
  top: 50% !important;
}

.top-100 {
  top: 100% !important;
}

.bottom-0 {
  bottom: 0 !important;
}

.bottom-50 {
  bottom: 50% !important;
}

.bottom-100 {
  bottom: 100% !important;
}

.start-0 {
  left: 0 !important;
}

.start-50 {
  left: 50% !important;
}

.start-100 {
  left: 100% !important;
}

.end-0 {
  right: 0 !important;
}

.end-50 {
  right: 50% !important;
}

.end-100 {
  right: 100% !important;
}

.translate-middle {
  transform: translate(-50%, -50%) !important;
}

.translate-middle-x {
  transform: translateX(-50%) !important;
}

.translate-middle-y {
  transform: translateY(-50%) !important;
}

.border {
  border: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
}

.border-0 {
  border: 0 !important;
}

.border-top {
  border-top: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
}

.border-top-0 {
  border-top: 0 !important;
}

.border-end {
  border-right: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
}

.border-end-0 {
  border-right: 0 !important;
}

.border-bottom {
  border-bottom: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
}

.border-bottom-0 {
  border-bottom: 0 !important;
}

.border-start {
  border-left: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
}

.border-start-0 {
  border-left: 0 !important;
}

.border-primary {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-primary-rgb), var(--bs-border-opacity)) !important;
}

.border-secondary {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-secondary-rgb), var(--bs-border-opacity)) !important;
}

.border-success {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-success-rgb), var(--bs-border-opacity)) !important;
}

.border-info {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-info-rgb), var(--bs-border-opacity)) !important;
}

.border-warning {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-warning-rgb), var(--bs-border-opacity)) !important;
}

.border-danger {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-danger-rgb), var(--bs-border-opacity)) !important;
}

.border-light {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-light-rgb), var(--bs-border-opacity)) !important;
}

.border-dark {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-dark-rgb), var(--bs-border-opacity)) !important;
}

.border-black {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-black-rgb), var(--bs-border-opacity)) !important;
}

.border-white {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-white-rgb), var(--bs-border-opacity)) !important;
}

.border-primary-subtle {
  border-color: var(--bs-primary-border-subtle) !important;
}

.border-secondary-subtle {
  border-color: var(--bs-secondary-border-subtle) !important;
}

.border-success-subtle {
  border-color: var(--bs-success-border-subtle) !important;
}

.border-info-subtle {
  border-color: var(--bs-info-border-subtle) !important;
}

.border-warning-subtle {
  border-color: var(--bs-warning-border-subtle) !important;
}

.border-danger-subtle {
  border-color: var(--bs-danger-border-subtle) !important;
}

.border-light-subtle {
  border-color: var(--bs-light-border-subtle) !important;
}

.border-dark-subtle {
  border-color: var(--bs-dark-border-subtle) !important;
}

.border-1 {
  border-width: 1px !important;
}

.border-2 {
  border-width: 2px !important;
}

.border-3 {
  border-width: 3px !important;
}

.border-4 {
  border-width: 4px !important;
}

.border-5 {
  border-width: 5px !important;
}

.border-opacity-10 {
  --bs-border-opacity: 0.1;
}

.border-opacity-25 {
  --bs-border-opacity: 0.25;
}

.border-opacity-50 {
  --bs-border-opacity: 0.5;
}

.border-opacity-75 {
  --bs-border-opacity: 0.75;
}

.border-opacity-100 {
  --bs-border-opacity: 1;
}

.w-25 {
  width: 25% !important;
}

.w-50 {
  width: 50% !important;
}

.w-75 {
  width: 75% !important;
}

.w-100 {
  width: 100% !important;
}

.w-auto {
  width: auto !important;
}

.mw-100 {
  max-width: 100% !important;
}

.vw-100 {
  width: 100vw !important;
}

.min-vw-100 {
  min-width: 100vw !important;
}

.h-25 {
  height: 25% !important;
}

.h-50 {
  height: 50% !important;
}

.h-75 {
  height: 75% !important;
}

.h-100 {
  height: 100% !important;
}

.h-auto {
  height: auto !important;
}

.mh-100 {
  max-height: 100% !important;
}

.vh-100 {
  height: 100vh !important;
}

.min-vh-100 {
  min-height: 100vh !important;
}

.flex-fill {
  flex: 1 1 auto !important;
}

.flex-row {
  flex-direction: row !important;
}

.flex-column {
  flex-direction: column !important;
}

.flex-row-reverse {
  flex-direction: row-reverse !important;
}

.flex-column-reverse {
  flex-direction: column-reverse !important;
}

.flex-grow-0 {
  flex-grow: 0 !important;
}

.flex-grow-1 {
  flex-grow: 1 !important;
}

.flex-shrink-0 {
  flex-shrink: 0 !important;
}

.flex-shrink-1 {
  flex-shrink: 1 !important;
}

.flex-wrap {
  flex-wrap: wrap !important;
}

.flex-nowrap {
  flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important;
}

.justify-content-start {
  justify-content: flex-start !important;
}

.justify-content-end {
  justify-content: flex-end !important;
}

.justify-content-center {
  justify-content: center !important;
}

.justify-content-between {
  justify-content: space-between !important;
}

.justify-content-around {
  justify-content: space-around !important;
}

.justify-content-evenly {
  justify-content: space-evenly !important;
}

.align-items-start {
  align-items: flex-start !important;
}

.align-items-end {
  align-items: flex-end !important;
}

.align-items-center {
  align-items: center !important;
}

.align-items-baseline {
  align-items: baseline !important;
}

.align-items-stretch {
  align-items: stretch !important;
}

.align-content-start {
  align-content: flex-start !important;
}

.align-content-end {
  align-content: flex-end !important;
}

.align-content-center {
  align-content: center !important;
}

.align-content-between {
  align-content: space-between !important;
}

.align-content-around {
  align-content: space-around !important;
}

.align-content-stretch {
  align-content: stretch !important;
}

.align-self-auto {
  align-self: auto !important;
}

.align-self-start {
  align-self: flex-start !important;
}

.align-self-end {
  align-self: flex-end !important;
}

.align-self-center {
  align-self: center !important;
}

.align-self-baseline {
  align-self: baseline !important;
}

.align-self-stretch {
  align-self: stretch !important;
}

.order-first {
  order: -1 !important;
}

.order-0 {
  order: 0 !important;
}

.order-1 {
  order: 1 !important;
}

.order-2 {
  order: 2 !important;
}

.order-3 {
  order: 3 !important;
}

.order-4 {
  order: 4 !important;
}

.order-5 {
  order: 5 !important;
}

.order-last {
  order: 6 !important;
}

.m-0 {
  margin: 0 !important;
}

.m-1 {
  margin: 0.25rem !important;
}

.m-2 {
  margin: 0.5rem !important;
}

.m-3 {
  margin: 1rem !important;
}

.m-4 {
  margin: 1.5rem !important;
}

.m-5 {
  margin: 3rem !important;
}

.m-auto {
  margin: auto !important;
}

.mx-0 {
  margin-right: 0 !important;
  margin-left: 0 !important;
}

.mx-1 {
  margin-right: 0.25rem !important;
  margin-left: 0.25rem !important;
}

.mx-2 {
  margin-right: 0.5rem !important;
  margin-left: 0.5rem !important;
}

.mx-3 {
  margin-right: 1rem !important;
  margin-left: 1rem !important;
}

.mx-4 {
  margin-right: 1.5rem !important;
  margin-left: 1.5rem !important;
}

.mx-5 {
  margin-right: 3rem !important;
  margin-left: 3rem !important;
}

.mx-auto {
  margin-right: auto !important;
  margin-left: auto !important;
}

.my-0 {
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}

.my-1 {
  margin-top: 0.25rem !important;
  margin-bottom: 0.25rem !important;
}

.my-2 {
  margin-top: 0.5rem !important;
  margin-bottom: 0.5rem !important;
}

.my-3 {
  margin-top: 1rem !important;
  margin-bottom: 1rem !important;
}

.my-4 {
  margin-top: 1.5rem !important;
  margin-bottom: 1.5rem !important;
}

.my-5 {
  margin-top: 3rem !important;
  margin-bottom: 3rem !important;
}

.my-auto {
  margin-top: auto !important;
  margin-bottom: auto !important;
}

.mt-0 {
  margin-top: 0 !important;
}

.mt-1 {
  margin-top: 0.25rem !important;
}

.mt-2 {
  margin-top: 0.5rem !important;
}

.mt-3 {
  margin-top: 1rem !important;
}

.mt-4 {
  margin-top: 1.5rem !important;
}

.mt-5 {
  margin-top: 3rem !important;
}

.mt-auto {
  margin-top: auto !important;
}

.me-0 {
  margin-right: 0 !important;
}

.me-1 {
  margin-right: 0.25rem !important;
}

.me-2 {
  margin-right: 0.5rem !important;
}

.me-3 {
  margin-right: 1rem !important;
}

.me-4 {
  margin-right: 1.5rem !important;
}

.me-5 {
  margin-right: 3rem !important;
}

.me-auto {
  margin-right: auto !important;
}

.mb-0 {
  margin-bottom: 0 !important;
}

.mb-1 {
  margin-bottom: 0.25rem !important;
}

.mb-2 {
  margin-bottom: 0.5rem !important;
}

.mb-3 {
  margin-bottom: 1rem !important;
}

.mb-4 {
  margin-bottom: 1.5rem !important;
}

.mb-5 {
  margin-bottom: 3rem !important;
}

.mb-auto {
  margin-bottom: auto !important;
}

.ms-0 {
  margin-left: 0 !important;
}

.ms-1 {
  margin-left: 0.25rem !important;
}

.ms-2 {
  margin-left: 0.5rem !important;
}

.ms-3 {
  margin-left: 1rem !important;
}

.ms-4 {
  margin-left: 1.5rem !important;
}

.ms-5 {
  margin-left: 3rem !important;
}

.ms-auto {
  margin-left: auto !important;
}

.p-0 {
  padding: 0 !important;
}

.p-1 {
  padding: 0.25rem !important;
}

.p-2 {
  padding: 0.5rem !important;
}

.p-3 {
  padding: 1rem !important;
}

.p-4 {
  padding: 1.5rem !important;
}

.p-5 {
  padding: 3rem !important;
}

.px-0 {
  padding-right: 0 !important;
  padding-left: 0 !important;
}

.px-1 {
  padding-right: 0.25rem !important;
  padding-left: 0.25rem !important;
}

.px-2 {
  padding-right: 0.5rem !important;
  padding-left: 0.5rem !important;
}

.px-3 {
  padding-right: 1rem !important;
  padding-left: 1rem !important;
}

.px-4 {
  padding-right: 1.5rem !important;
  padding-left: 1.5rem !important;
}

.px-5 {
  padding-right: 3rem !important;
  padding-left: 3rem !important;
}

.py-0 {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}

.py-1 {
  padding-top: 0.25rem !important;
  padding-bottom: 0.25rem !important;
}

.py-2 {
  padding-top: 0.5rem !important;
  padding-bottom: 0.5rem !important;
}

.py-3 {
  padding-top: 1rem !important;
  padding-bottom: 1rem !important;
}

.py-4 {
  padding-top: 1.5rem !important;
  padding-bottom: 1.5rem !important;
}

.py-5 {
  padding-top: 3rem !important;
  padding-bottom: 3rem !important;
}

.pt-0 {
  padding-top: 0 !important;
}

.pt-1 {
  padding-top: 0.25rem !important;
}

.pt-2 {
  padding-top: 0.5rem !important;
}

.pt-3 {
  padding-top: 1rem !important;
}

.pt-4 {
  padding-top: 1.5rem !important;
}

.pt-5 {
  padding-top: 3rem !important;
}

.pe-0 {
  padding-right: 0 !important;
}

.pe-1 {
  padding-right: 0.25rem !important;
}

.pe-2 {
  padding-right: 0.5rem !important;
}

.pe-3 {
  padding-right: 1rem !important;
}

.pe-4 {
  padding-right: 1.5rem !important;
}

.pe-5 {
  padding-right: 3rem !important;
}

.pb-0 {
  padding-bottom: 0 !important;
}

.pb-1 {
  padding-bottom: 0.25rem !important;
}

.pb-2 {
  padding-bottom: 0.5rem !important;
}

.pb-3 {
  padding-bottom: 1rem !important;
}

.pb-4 {
  padding-bottom: 1.5rem !important;
}

.pb-5 {
  padding-bottom: 3rem !important;
}

.ps-0 {
  padding-left: 0 !important;
}

.ps-1 {
  padding-left: 0.25rem !important;
}

.ps-2 {
  padding-left: 0.5rem !important;
}

.ps-3 {
  padding-left: 1rem !important;
}

.ps-4 {
  padding-left: 1.5rem !important;
}

.ps-5 {
  padding-left: 3rem !important;
}

.gap-0 {
  gap: 0 !important;
}

.gap-1 {
  gap: 0.25rem !important;
}

.gap-2 {
  gap: 0.5rem !important;
}

.gap-3 {
  gap: 1rem !important;
}

.gap-4 {
  gap: 1.5rem !important;
}

.gap-5 {
  gap: 3rem !important;
}

.row-gap-0 {
  row-gap: 0 !important;
}

.row-gap-1 {
  row-gap: 0.25rem !important;
}

.row-gap-2 {
  row-gap: 0.5rem !important;
}

.row-gap-3 {
  row-gap: 1rem !important;
}

.row-gap-4 {
  row-gap: 1.5rem !important;
}

.row-gap-5 {
  row-gap: 3rem !important;
}

.column-gap-0 {
  column-gap: 0 !important;
}

.column-gap-1 {
  column-gap: 0.25rem !important;
}

.column-gap-2 {
  column-gap: 0.5rem !important;
}

.column-gap-3 {
  column-gap: 1rem !important;
}

.column-gap-4 {
  column-gap: 1.5rem !important;
}

.column-gap-5 {
  column-gap: 3rem !important;
}

.font-monospace {
  font-family: var(--bs-font-monospace) !important;
}

.fs-1 {
  font-size: calc(1.325rem + 0.9vw) !important;
}

.fs-2 {
  font-size: calc(1.3rem + 0.6vw) !important;
}

.fs-3 {
  font-size: calc(1.275rem + 0.3vw) !important;
}

.fs-4 {
  font-size: 1.25rem !important;
}

.fs-5 {
  font-size: 1rem !important;
}

.fs-6 {
  font-size: 0.75rem !important;
}

.fst-italic {
  font-style: italic !important;
}

.fst-normal {
  font-style: normal !important;
}

.fw-lighter {
  font-weight: lighter !important;
}

.fw-light {
  font-weight: 200 !important;
}

.fw-normal {
  font-weight: 300 !important;
}

.fw-medium {
  font-weight: 400 !important;
}

.fw-semibold {
  font-weight: 500 !important;
}

.fw-bold {
  font-weight: 600 !important;
}

.fw-bolder {
  font-weight: bolder !important;
}

.lh-1 {
  line-height: 1 !important;
}

.lh-sm {
  line-height: 1.25 !important;
}

.lh-base {
  line-height: 1.5 !important;
}

.lh-lg {
  line-height: 2 !important;
}

.text-start {
  text-align: left !important;
}

.text-end {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

.text-decoration-none {
  text-decoration: none !important;
}

.text-decoration-underline {
  text-decoration: underline !important;
}

.text-decoration-line-through {
  text-decoration: line-through !important;
}

.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.text-wrap {
  white-space: normal !important;
}

.text-nowrap {
  white-space: nowrap !important;
}

/* rtl:begin:remove */
.text-break {
  word-wrap: break-word !important;
  word-break: break-word !important;
}

/* rtl:end:remove */
.text-primary {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
}

.text-secondary {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-secondary-rgb), var(--bs-text-opacity)) !important;
}

.text-success {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-success-rgb), var(--bs-text-opacity)) !important;
}

.text-info {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-info-rgb), var(--bs-text-opacity)) !important;
}

.text-warning {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-warning-rgb), var(--bs-text-opacity)) !important;
}

.text-danger {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-danger-rgb), var(--bs-text-opacity)) !important;
}

.text-light {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-light-rgb), var(--bs-text-opacity)) !important;
}

.text-dark {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important;
}

.text-black {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-black-rgb), var(--bs-text-opacity)) !important;
}

.text-white {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important;
}

.text-body {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-body-color-rgb), var(--bs-text-opacity)) !important;
}

.text-muted {
  --bs-text-opacity: 1;
  color: var(--bs-secondary-color) !important;
}

.text-black-50 {
  --bs-text-opacity: 1;
  color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
  --bs-text-opacity: 1;
  color: rgba(255, 255, 255, 0.5) !important;
}

.text-body-secondary {
  --bs-text-opacity: 1;
  color: var(--bs-secondary-color) !important;
}

.text-body-tertiary {
  --bs-text-opacity: 1;
  color: var(--bs-tertiary-color) !important;
}

.text-body-emphasis {
  --bs-text-opacity: 1;
  color: var(--bs-emphasis-color) !important;
}

.text-reset {
  --bs-text-opacity: 1;
  color: inherit !important;
}

.text-opacity-25 {
  --bs-text-opacity: 0.25;
}

.text-opacity-50 {
  --bs-text-opacity: 0.5;
}

.text-opacity-75 {
  --bs-text-opacity: 0.75;
}

.text-opacity-100 {
  --bs-text-opacity: 1;
}

.text-primary-emphasis {
  color: var(--bs-primary-text-emphasis) !important;
}

.text-secondary-emphasis {
  color: var(--bs-secondary-text-emphasis) !important;
}

.text-success-emphasis {
  color: var(--bs-success-text-emphasis) !important;
}

.text-info-emphasis {
  color: var(--bs-info-text-emphasis) !important;
}

.text-warning-emphasis {
  color: var(--bs-warning-text-emphasis) !important;
}

.text-danger-emphasis {
  color: var(--bs-danger-text-emphasis) !important;
}

.text-light-emphasis {
  color: var(--bs-light-text-emphasis) !important;
}

.text-dark-emphasis {
  color: var(--bs-dark-text-emphasis) !important;
}

.link-opacity-10 {
  --bs-link-opacity: 0.1;
}

.link-opacity-10-hover:hover {
  --bs-link-opacity: 0.1;
}

.link-opacity-25 {
  --bs-link-opacity: 0.25;
}

.link-opacity-25-hover:hover {
  --bs-link-opacity: 0.25;
}

.link-opacity-50 {
  --bs-link-opacity: 0.5;
}

.link-opacity-50-hover:hover {
  --bs-link-opacity: 0.5;
}

.link-opacity-75 {
  --bs-link-opacity: 0.75;
}

.link-opacity-75-hover:hover {
  --bs-link-opacity: 0.75;
}

.link-opacity-100 {
  --bs-link-opacity: 1;
}

.link-opacity-100-hover:hover {
  --bs-link-opacity: 1;
}

.link-offset-1 {
  text-underline-offset: 0.125em !important;
}

.link-offset-1-hover:hover {
  text-underline-offset: 0.125em !important;
}

.link-offset-2 {
  text-underline-offset: 0.25em !important;
}

.link-offset-2-hover:hover {
  text-underline-offset: 0.25em !important;
}

.link-offset-3 {
  text-underline-offset: 0.375em !important;
}

.link-offset-3-hover:hover {
  text-underline-offset: 0.375em !important;
}

.link-underline-primary {
  --bs-link-underline-opacity: 1;
  text-decoration-color: rgba(var(--bs-primary-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline-secondary {
  --bs-link-underline-opacity: 1;
  text-decoration-color: rgba(var(--bs-secondary-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline-success {
  --bs-link-underline-opacity: 1;
  text-decoration-color: rgba(var(--bs-success-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline-info {
  --bs-link-underline-opacity: 1;
  text-decoration-color: rgba(var(--bs-info-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline-warning {
  --bs-link-underline-opacity: 1;
  text-decoration-color: rgba(var(--bs-warning-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline-danger {
  --bs-link-underline-opacity: 1;
  text-decoration-color: rgba(var(--bs-danger-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline-light {
  --bs-link-underline-opacity: 1;
  text-decoration-color: rgba(var(--bs-light-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline-dark {
  --bs-link-underline-opacity: 1;
  text-decoration-color: rgba(var(--bs-dark-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline {
  --bs-link-underline-opacity: 1;
  text-decoration-color: rgba(var(--bs-link-color-rgb), var(--bs-link-underline-opacity, 1)) !important;
}

.link-underline-opacity-0 {
  --bs-link-underline-opacity: 0;
}

.link-underline-opacity-0-hover:hover {
  --bs-link-underline-opacity: 0;
}

.link-underline-opacity-10 {
  --bs-link-underline-opacity: 0.1;
}

.link-underline-opacity-10-hover:hover {
  --bs-link-underline-opacity: 0.1;
}

.link-underline-opacity-25 {
  --bs-link-underline-opacity: 0.25;
}

.link-underline-opacity-25-hover:hover {
  --bs-link-underline-opacity: 0.25;
}

.link-underline-opacity-50 {
  --bs-link-underline-opacity: 0.5;
}

.link-underline-opacity-50-hover:hover {
  --bs-link-underline-opacity: 0.5;
}

.link-underline-opacity-75 {
  --bs-link-underline-opacity: 0.75;
}

.link-underline-opacity-75-hover:hover {
  --bs-link-underline-opacity: 0.75;
}

.link-underline-opacity-100 {
  --bs-link-underline-opacity: 1;
}

.link-underline-opacity-100-hover:hover {
  --bs-link-underline-opacity: 1;
}

.bg-primary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important;
}

.bg-secondary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important;
}

.bg-success {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-success-rgb), var(--bs-bg-opacity)) !important;
}

.bg-info {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-info-rgb), var(--bs-bg-opacity)) !important;
}

.bg-warning {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-warning-rgb), var(--bs-bg-opacity)) !important;
}

.bg-danger {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-danger-rgb), var(--bs-bg-opacity)) !important;
}

.bg-light {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important;
}

.bg-dark {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important;
}

.bg-black {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-black-rgb), var(--bs-bg-opacity)) !important;
}

.bg-white {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-white-rgb), var(--bs-bg-opacity)) !important;
}

.bg-body {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-body-bg-rgb), var(--bs-bg-opacity)) !important;
}

.bg-transparent {
  --bs-bg-opacity: 1;
  background-color: transparent !important;
}

.bg-body-secondary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-secondary-bg-rgb), var(--bs-bg-opacity)) !important;
}

.bg-body-tertiary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-tertiary-bg-rgb), var(--bs-bg-opacity)) !important;
}

.bg-opacity-10 {
  --bs-bg-opacity: 0.1;
}

.bg-opacity-25 {
  --bs-bg-opacity: 0.25;
}

.bg-opacity-50 {
  --bs-bg-opacity: 0.5;
}

.bg-opacity-75 {
  --bs-bg-opacity: 0.75;
}

.bg-opacity-100 {
  --bs-bg-opacity: 1;
}

.bg-primary-subtle {
  background-color: var(--bs-primary-bg-subtle) !important;
}

.bg-secondary-subtle {
  background-color: var(--bs-secondary-bg-subtle) !important;
}

.bg-success-subtle {
  background-color: var(--bs-success-bg-subtle) !important;
}

.bg-info-subtle {
  background-color: var(--bs-info-bg-subtle) !important;
}

.bg-warning-subtle {
  background-color: var(--bs-warning-bg-subtle) !important;
}

.bg-danger-subtle {
  background-color: var(--bs-danger-bg-subtle) !important;
}

.bg-light-subtle {
  background-color: var(--bs-light-bg-subtle) !important;
}

.bg-dark-subtle {
  background-color: var(--bs-dark-bg-subtle) !important;
}

.bg-gradient {
  background-image: var(--bs-gradient) !important;
}

.user-select-all {
  user-select: all !important;
}

.user-select-auto {
  user-select: auto !important;
}

.user-select-none {
  user-select: none !important;
}

.pe-none {
  pointer-events: none !important;
}

.pe-auto {
  pointer-events: auto !important;
}

.rounded {
  border-radius: var(--bs-border-radius) !important;
}

.rounded-0 {
  border-radius: 0 !important;
}

.rounded-1 {
  border-radius: var(--bs-border-radius-sm) !important;
}

.rounded-2 {
  border-radius: var(--bs-border-radius) !important;
}

.rounded-3 {
  border-radius: var(--bs-border-radius-lg) !important;
}

.rounded-4 {
  border-radius: var(--bs-border-radius-xl) !important;
}

.rounded-5 {
  border-radius: var(--bs-border-radius-xxl) !important;
}

.rounded-circle {
  border-radius: 50% !important;
}

.rounded-pill {
  border-radius: var(--bs-border-radius-pill) !important;
}

.rounded-top {
  border-top-left-radius: var(--bs-border-radius) !important;
  border-top-right-radius: var(--bs-border-radius) !important;
}

.rounded-top-0 {
  border-top-left-radius: 0 !important;
  border-top-right-radius: 0 !important;
}

.rounded-top-1 {
  border-top-left-radius: var(--bs-border-radius-sm) !important;
  border-top-right-radius: var(--bs-border-radius-sm) !important;
}

.rounded-top-2 {
  border-top-left-radius: var(--bs-border-radius) !important;
  border-top-right-radius: var(--bs-border-radius) !important;
}

.rounded-top-3 {
  border-top-left-radius: var(--bs-border-radius-lg) !important;
  border-top-right-radius: var(--bs-border-radius-lg) !important;
}

.rounded-top-4 {
  border-top-left-radius: var(--bs-border-radius-xl) !important;
  border-top-right-radius: var(--bs-border-radius-xl) !important;
}

.rounded-top-5 {
  border-top-left-radius: var(--bs-border-radius-xxl) !important;
  border-top-right-radius: var(--bs-border-radius-xxl) !important;
}

.rounded-top-circle {
  border-top-left-radius: 50% !important;
  border-top-right-radius: 50% !important;
}

.rounded-top-pill {
  border-top-left-radius: var(--bs-border-radius-pill) !important;
  border-top-right-radius: var(--bs-border-radius-pill) !important;
}

.rounded-end {
  border-top-right-radius: var(--bs-border-radius) !important;
  border-bottom-right-radius: var(--bs-border-radius) !important;
}

.rounded-end-0 {
  border-top-right-radius: 0 !important;
  border-bottom-right-radius: 0 !important;
}

.rounded-end-1 {
  border-top-right-radius: var(--bs-border-radius-sm) !important;
  border-bottom-right-radius: var(--bs-border-radius-sm) !important;
}

.rounded-end-2 {
  border-top-right-radius: var(--bs-border-radius) !important;
  border-bottom-right-radius: var(--bs-border-radius) !important;
}

.rounded-end-3 {
  border-top-right-radius: var(--bs-border-radius-lg) !important;
  border-bottom-right-radius: var(--bs-border-radius-lg) !important;
}

.rounded-end-4 {
  border-top-right-radius: var(--bs-border-radius-xl) !important;
  border-bottom-right-radius: var(--bs-border-radius-xl) !important;
}

.rounded-end-5 {
  border-top-right-radius: var(--bs-border-radius-xxl) !important;
  border-bottom-right-radius: var(--bs-border-radius-xxl) !important;
}

.rounded-end-circle {
  border-top-right-radius: 50% !important;
  border-bottom-right-radius: 50% !important;
}

.rounded-end-pill {
  border-top-right-radius: var(--bs-border-radius-pill) !important;
  border-bottom-right-radius: var(--bs-border-radius-pill) !important;
}

.rounded-bottom {
  border-bottom-right-radius: var(--bs-border-radius) !important;
  border-bottom-left-radius: var(--bs-border-radius) !important;
}

.rounded-bottom-0 {
  border-bottom-right-radius: 0 !important;
  border-bottom-left-radius: 0 !important;
}

.rounded-bottom-1 {
  border-bottom-right-radius: var(--bs-border-radius-sm) !important;
  border-bottom-left-radius: var(--bs-border-radius-sm) !important;
}

.rounded-bottom-2 {
  border-bottom-right-radius: var(--bs-border-radius) !important;
  border-bottom-left-radius: var(--bs-border-radius) !important;
}

.rounded-bottom-3 {
  border-bottom-right-radius: var(--bs-border-radius-lg) !important;
  border-bottom-left-radius: var(--bs-border-radius-lg) !important;
}

.rounded-bottom-4 {
  border-bottom-right-radius: var(--bs-border-radius-xl) !important;
  border-bottom-left-radius: var(--bs-border-radius-xl) !important;
}

.rounded-bottom-5 {
  border-bottom-right-radius: var(--bs-border-radius-xxl) !important;
  border-bottom-left-radius: var(--bs-border-radius-xxl) !important;
}

.rounded-bottom-circle {
  border-bottom-right-radius: 50% !important;
  border-bottom-left-radius: 50% !important;
}

.rounded-bottom-pill {
  border-bottom-right-radius: var(--bs-border-radius-pill) !important;
  border-bottom-left-radius: var(--bs-border-radius-pill) !important;
}

.rounded-start {
  border-bottom-left-radius: var(--bs-border-radius) !important;
  border-top-left-radius: var(--bs-border-radius) !important;
}

.rounded-start-0 {
  border-bottom-left-radius: 0 !important;
  border-top-left-radius: 0 !important;
}

.rounded-start-1 {
  border-bottom-left-radius: var(--bs-border-radius-sm) !important;
  border-top-left-radius: var(--bs-border-radius-sm) !important;
}

.rounded-start-2 {
  border-bottom-left-radius: var(--bs-border-radius) !important;
  border-top-left-radius: var(--bs-border-radius) !important;
}

.rounded-start-3 {
  border-bottom-left-radius: var(--bs-border-radius-lg) !important;
  border-top-left-radius: var(--bs-border-radius-lg) !important;
}

.rounded-start-4 {
  border-bottom-left-radius: var(--bs-border-radius-xl) !important;
  border-top-left-radius: var(--bs-border-radius-xl) !important;
}

.rounded-start-5 {
  border-bottom-left-radius: var(--bs-border-radius-xxl) !important;
  border-top-left-radius: var(--bs-border-radius-xxl) !important;
}

.rounded-start-circle {
  border-bottom-left-radius: 50% !important;
  border-top-left-radius: 50% !important;
}

.rounded-start-pill {
  border-bottom-left-radius: var(--bs-border-radius-pill) !important;
  border-top-left-radius: var(--bs-border-radius-pill) !important;
}

.visible {
  visibility: visible !important;
}

.invisible {
  visibility: hidden !important;
}

.z-n1 {
  z-index: -1 !important;
}

.z-0 {
  z-index: 0 !important;
}

.z-1 {
  z-index: 1 !important;
}

.z-2 {
  z-index: 2 !important;
}

.z-3 {
  z-index: 3 !important;
}

@media (min-width: 576px) {
  .float-sm-start {
    float: left !important;
  }
  .float-sm-end {
    float: right !important;
  }
  .float-sm-none {
    float: none !important;
  }
  .object-fit-sm-contain {
    object-fit: contain !important;
  }
  .object-fit-sm-cover {
    object-fit: cover !important;
  }
  .object-fit-sm-fill {
    object-fit: fill !important;
  }
  .object-fit-sm-scale {
    object-fit: scale-down !important;
  }
  .object-fit-sm-none {
    object-fit: none !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-grid {
    display: grid !important;
  }
  .d-sm-inline-grid {
    display: inline-grid !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: inline-flex !important;
  }
  .d-sm-none {
    display: none !important;
  }
  .flex-sm-fill {
    flex: 1 1 auto !important;
  }
  .flex-sm-row {
    flex-direction: row !important;
  }
  .flex-sm-column {
    flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-sm-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-sm-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-sm-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-sm-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-sm-wrap {
    flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-sm-start {
    justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    justify-content: center !important;
  }
  .justify-content-sm-between {
    justify-content: space-between !important;
  }
  .justify-content-sm-around {
    justify-content: space-around !important;
  }
  .justify-content-sm-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-sm-start {
    align-items: flex-start !important;
  }
  .align-items-sm-end {
    align-items: flex-end !important;
  }
  .align-items-sm-center {
    align-items: center !important;
  }
  .align-items-sm-baseline {
    align-items: baseline !important;
  }
  .align-items-sm-stretch {
    align-items: stretch !important;
  }
  .align-content-sm-start {
    align-content: flex-start !important;
  }
  .align-content-sm-end {
    align-content: flex-end !important;
  }
  .align-content-sm-center {
    align-content: center !important;
  }
  .align-content-sm-between {
    align-content: space-between !important;
  }
  .align-content-sm-around {
    align-content: space-around !important;
  }
  .align-content-sm-stretch {
    align-content: stretch !important;
  }
  .align-self-sm-auto {
    align-self: auto !important;
  }
  .align-self-sm-start {
    align-self: flex-start !important;
  }
  .align-self-sm-end {
    align-self: flex-end !important;
  }
  .align-self-sm-center {
    align-self: center !important;
  }
  .align-self-sm-baseline {
    align-self: baseline !important;
  }
  .align-self-sm-stretch {
    align-self: stretch !important;
  }
  .order-sm-first {
    order: -1 !important;
  }
  .order-sm-0 {
    order: 0 !important;
  }
  .order-sm-1 {
    order: 1 !important;
  }
  .order-sm-2 {
    order: 2 !important;
  }
  .order-sm-3 {
    order: 3 !important;
  }
  .order-sm-4 {
    order: 4 !important;
  }
  .order-sm-5 {
    order: 5 !important;
  }
  .order-sm-last {
    order: 6 !important;
  }
  .m-sm-0 {
    margin: 0 !important;
  }
  .m-sm-1 {
    margin: 0.25rem !important;
  }
  .m-sm-2 {
    margin: 0.5rem !important;
  }
  .m-sm-3 {
    margin: 1rem !important;
  }
  .m-sm-4 {
    margin: 1.5rem !important;
  }
  .m-sm-5 {
    margin: 3rem !important;
  }
  .m-sm-auto {
    margin: auto !important;
  }
  .mx-sm-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-sm-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-sm-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-sm-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-sm-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-sm-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-sm-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-sm-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-sm-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-sm-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-sm-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-sm-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-sm-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-sm-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-sm-0 {
    margin-top: 0 !important;
  }
  .mt-sm-1 {
    margin-top: 0.25rem !important;
  }
  .mt-sm-2 {
    margin-top: 0.5rem !important;
  }
  .mt-sm-3 {
    margin-top: 1rem !important;
  }
  .mt-sm-4 {
    margin-top: 1.5rem !important;
  }
  .mt-sm-5 {
    margin-top: 3rem !important;
  }
  .mt-sm-auto {
    margin-top: auto !important;
  }
  .me-sm-0 {
    margin-right: 0 !important;
  }
  .me-sm-1 {
    margin-right: 0.25rem !important;
  }
  .me-sm-2 {
    margin-right: 0.5rem !important;
  }
  .me-sm-3 {
    margin-right: 1rem !important;
  }
  .me-sm-4 {
    margin-right: 1.5rem !important;
  }
  .me-sm-5 {
    margin-right: 3rem !important;
  }
  .me-sm-auto {
    margin-right: auto !important;
  }
  .mb-sm-0 {
    margin-bottom: 0 !important;
  }
  .mb-sm-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-sm-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-sm-3 {
    margin-bottom: 1rem !important;
  }
  .mb-sm-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-sm-5 {
    margin-bottom: 3rem !important;
  }
  .mb-sm-auto {
    margin-bottom: auto !important;
  }
  .ms-sm-0 {
    margin-left: 0 !important;
  }
  .ms-sm-1 {
    margin-left: 0.25rem !important;
  }
  .ms-sm-2 {
    margin-left: 0.5rem !important;
  }
  .ms-sm-3 {
    margin-left: 1rem !important;
  }
  .ms-sm-4 {
    margin-left: 1.5rem !important;
  }
  .ms-sm-5 {
    margin-left: 3rem !important;
  }
  .ms-sm-auto {
    margin-left: auto !important;
  }
  .p-sm-0 {
    padding: 0 !important;
  }
  .p-sm-1 {
    padding: 0.25rem !important;
  }
  .p-sm-2 {
    padding: 0.5rem !important;
  }
  .p-sm-3 {
    padding: 1rem !important;
  }
  .p-sm-4 {
    padding: 1.5rem !important;
  }
  .p-sm-5 {
    padding: 3rem !important;
  }
  .px-sm-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-sm-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-sm-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-sm-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-sm-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-sm-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-sm-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-sm-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-sm-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-sm-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-sm-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-sm-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-sm-0 {
    padding-top: 0 !important;
  }
  .pt-sm-1 {
    padding-top: 0.25rem !important;
  }
  .pt-sm-2 {
    padding-top: 0.5rem !important;
  }
  .pt-sm-3 {
    padding-top: 1rem !important;
  }
  .pt-sm-4 {
    padding-top: 1.5rem !important;
  }
  .pt-sm-5 {
    padding-top: 3rem !important;
  }
  .pe-sm-0 {
    padding-right: 0 !important;
  }
  .pe-sm-1 {
    padding-right: 0.25rem !important;
  }
  .pe-sm-2 {
    padding-right: 0.5rem !important;
  }
  .pe-sm-3 {
    padding-right: 1rem !important;
  }
  .pe-sm-4 {
    padding-right: 1.5rem !important;
  }
  .pe-sm-5 {
    padding-right: 3rem !important;
  }
  .pb-sm-0 {
    padding-bottom: 0 !important;
  }
  .pb-sm-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-sm-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-sm-3 {
    padding-bottom: 1rem !important;
  }
  .pb-sm-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-sm-5 {
    padding-bottom: 3rem !important;
  }
  .ps-sm-0 {
    padding-left: 0 !important;
  }
  .ps-sm-1 {
    padding-left: 0.25rem !important;
  }
  .ps-sm-2 {
    padding-left: 0.5rem !important;
  }
  .ps-sm-3 {
    padding-left: 1rem !important;
  }
  .ps-sm-4 {
    padding-left: 1.5rem !important;
  }
  .ps-sm-5 {
    padding-left: 3rem !important;
  }
  .gap-sm-0 {
    gap: 0 !important;
  }
  .gap-sm-1 {
    gap: 0.25rem !important;
  }
  .gap-sm-2 {
    gap: 0.5rem !important;
  }
  .gap-sm-3 {
    gap: 1rem !important;
  }
  .gap-sm-4 {
    gap: 1.5rem !important;
  }
  .gap-sm-5 {
    gap: 3rem !important;
  }
  .row-gap-sm-0 {
    row-gap: 0 !important;
  }
  .row-gap-sm-1 {
    row-gap: 0.25rem !important;
  }
  .row-gap-sm-2 {
    row-gap: 0.5rem !important;
  }
  .row-gap-sm-3 {
    row-gap: 1rem !important;
  }
  .row-gap-sm-4 {
    row-gap: 1.5rem !important;
  }
  .row-gap-sm-5 {
    row-gap: 3rem !important;
  }
  .column-gap-sm-0 {
    column-gap: 0 !important;
  }
  .column-gap-sm-1 {
    column-gap: 0.25rem !important;
  }
  .column-gap-sm-2 {
    column-gap: 0.5rem !important;
  }
  .column-gap-sm-3 {
    column-gap: 1rem !important;
  }
  .column-gap-sm-4 {
    column-gap: 1.5rem !important;
  }
  .column-gap-sm-5 {
    column-gap: 3rem !important;
  }
  .text-sm-start {
    text-align: left !important;
  }
  .text-sm-end {
    text-align: right !important;
  }
  .text-sm-center {
    text-align: center !important;
  }
}
@media (min-width: 768px) {
  .float-md-start {
    float: left !important;
  }
  .float-md-end {
    float: right !important;
  }
  .float-md-none {
    float: none !important;
  }
  .object-fit-md-contain {
    object-fit: contain !important;
  }
  .object-fit-md-cover {
    object-fit: cover !important;
  }
  .object-fit-md-fill {
    object-fit: fill !important;
  }
  .object-fit-md-scale {
    object-fit: scale-down !important;
  }
  .object-fit-md-none {
    object-fit: none !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-grid {
    display: grid !important;
  }
  .d-md-inline-grid {
    display: inline-grid !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex {
    display: flex !important;
  }
  .d-md-inline-flex {
    display: inline-flex !important;
  }
  .d-md-none {
    display: none !important;
  }
  .flex-md-fill {
    flex: 1 1 auto !important;
  }
  .flex-md-row {
    flex-direction: row !important;
  }
  .flex-md-column {
    flex-direction: column !important;
  }
  .flex-md-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-md-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-md-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-md-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-md-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-md-wrap {
    flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-md-start {
    justify-content: flex-start !important;
  }
  .justify-content-md-end {
    justify-content: flex-end !important;
  }
  .justify-content-md-center {
    justify-content: center !important;
  }
  .justify-content-md-between {
    justify-content: space-between !important;
  }
  .justify-content-md-around {
    justify-content: space-around !important;
  }
  .justify-content-md-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-md-start {
    align-items: flex-start !important;
  }
  .align-items-md-end {
    align-items: flex-end !important;
  }
  .align-items-md-center {
    align-items: center !important;
  }
  .align-items-md-baseline {
    align-items: baseline !important;
  }
  .align-items-md-stretch {
    align-items: stretch !important;
  }
  .align-content-md-start {
    align-content: flex-start !important;
  }
  .align-content-md-end {
    align-content: flex-end !important;
  }
  .align-content-md-center {
    align-content: center !important;
  }
  .align-content-md-between {
    align-content: space-between !important;
  }
  .align-content-md-around {
    align-content: space-around !important;
  }
  .align-content-md-stretch {
    align-content: stretch !important;
  }
  .align-self-md-auto {
    align-self: auto !important;
  }
  .align-self-md-start {
    align-self: flex-start !important;
  }
  .align-self-md-end {
    align-self: flex-end !important;
  }
  .align-self-md-center {
    align-self: center !important;
  }
  .align-self-md-baseline {
    align-self: baseline !important;
  }
  .align-self-md-stretch {
    align-self: stretch !important;
  }
  .order-md-first {
    order: -1 !important;
  }
  .order-md-0 {
    order: 0 !important;
  }
  .order-md-1 {
    order: 1 !important;
  }
  .order-md-2 {
    order: 2 !important;
  }
  .order-md-3 {
    order: 3 !important;
  }
  .order-md-4 {
    order: 4 !important;
  }
  .order-md-5 {
    order: 5 !important;
  }
  .order-md-last {
    order: 6 !important;
  }
  .m-md-0 {
    margin: 0 !important;
  }
  .m-md-1 {
    margin: 0.25rem !important;
  }
  .m-md-2 {
    margin: 0.5rem !important;
  }
  .m-md-3 {
    margin: 1rem !important;
  }
  .m-md-4 {
    margin: 1.5rem !important;
  }
  .m-md-5 {
    margin: 3rem !important;
  }
  .m-md-auto {
    margin: auto !important;
  }
  .mx-md-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-md-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-md-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-md-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-md-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-md-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-md-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-md-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-md-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-md-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-md-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-md-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-md-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-md-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-md-0 {
    margin-top: 0 !important;
  }
  .mt-md-1 {
    margin-top: 0.25rem !important;
  }
  .mt-md-2 {
    margin-top: 0.5rem !important;
  }
  .mt-md-3 {
    margin-top: 1rem !important;
  }
  .mt-md-4 {
    margin-top: 1.5rem !important;
  }
  .mt-md-5 {
    margin-top: 3rem !important;
  }
  .mt-md-auto {
    margin-top: auto !important;
  }
  .me-md-0 {
    margin-right: 0 !important;
  }
  .me-md-1 {
    margin-right: 0.25rem !important;
  }
  .me-md-2 {
    margin-right: 0.5rem !important;
  }
  .me-md-3 {
    margin-right: 1rem !important;
  }
  .me-md-4 {
    margin-right: 1.5rem !important;
  }
  .me-md-5 {
    margin-right: 3rem !important;
  }
  .me-md-auto {
    margin-right: auto !important;
  }
  .mb-md-0 {
    margin-bottom: 0 !important;
  }
  .mb-md-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-md-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-md-3 {
    margin-bottom: 1rem !important;
  }
  .mb-md-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-md-5 {
    margin-bottom: 3rem !important;
  }
  .mb-md-auto {
    margin-bottom: auto !important;
  }
  .ms-md-0 {
    margin-left: 0 !important;
  }
  .ms-md-1 {
    margin-left: 0.25rem !important;
  }
  .ms-md-2 {
    margin-left: 0.5rem !important;
  }
  .ms-md-3 {
    margin-left: 1rem !important;
  }
  .ms-md-4 {
    margin-left: 1.5rem !important;
  }
  .ms-md-5 {
    margin-left: 3rem !important;
  }
  .ms-md-auto {
    margin-left: auto !important;
  }
  .p-md-0 {
    padding: 0 !important;
  }
  .p-md-1 {
    padding: 0.25rem !important;
  }
  .p-md-2 {
    padding: 0.5rem !important;
  }
  .p-md-3 {
    padding: 1rem !important;
  }
  .p-md-4 {
    padding: 1.5rem !important;
  }
  .p-md-5 {
    padding: 3rem !important;
  }
  .px-md-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-md-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-md-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-md-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-md-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-md-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-md-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-md-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-md-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-md-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-md-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-md-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-md-0 {
    padding-top: 0 !important;
  }
  .pt-md-1 {
    padding-top: 0.25rem !important;
  }
  .pt-md-2 {
    padding-top: 0.5rem !important;
  }
  .pt-md-3 {
    padding-top: 1rem !important;
  }
  .pt-md-4 {
    padding-top: 1.5rem !important;
  }
  .pt-md-5 {
    padding-top: 3rem !important;
  }
  .pe-md-0 {
    padding-right: 0 !important;
  }
  .pe-md-1 {
    padding-right: 0.25rem !important;
  }
  .pe-md-2 {
    padding-right: 0.5rem !important;
  }
  .pe-md-3 {
    padding-right: 1rem !important;
  }
  .pe-md-4 {
    padding-right: 1.5rem !important;
  }
  .pe-md-5 {
    padding-right: 3rem !important;
  }
  .pb-md-0 {
    padding-bottom: 0 !important;
  }
  .pb-md-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-md-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-md-3 {
    padding-bottom: 1rem !important;
  }
  .pb-md-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-md-5 {
    padding-bottom: 3rem !important;
  }
  .ps-md-0 {
    padding-left: 0 !important;
  }
  .ps-md-1 {
    padding-left: 0.25rem !important;
  }
  .ps-md-2 {
    padding-left: 0.5rem !important;
  }
  .ps-md-3 {
    padding-left: 1rem !important;
  }
  .ps-md-4 {
    padding-left: 1.5rem !important;
  }
  .ps-md-5 {
    padding-left: 3rem !important;
  }
  .gap-md-0 {
    gap: 0 !important;
  }
  .gap-md-1 {
    gap: 0.25rem !important;
  }
  .gap-md-2 {
    gap: 0.5rem !important;
  }
  .gap-md-3 {
    gap: 1rem !important;
  }
  .gap-md-4 {
    gap: 1.5rem !important;
  }
  .gap-md-5 {
    gap: 3rem !important;
  }
  .row-gap-md-0 {
    row-gap: 0 !important;
  }
  .row-gap-md-1 {
    row-gap: 0.25rem !important;
  }
  .row-gap-md-2 {
    row-gap: 0.5rem !important;
  }
  .row-gap-md-3 {
    row-gap: 1rem !important;
  }
  .row-gap-md-4 {
    row-gap: 1.5rem !important;
  }
  .row-gap-md-5 {
    row-gap: 3rem !important;
  }
  .column-gap-md-0 {
    column-gap: 0 !important;
  }
  .column-gap-md-1 {
    column-gap: 0.25rem !important;
  }
  .column-gap-md-2 {
    column-gap: 0.5rem !important;
  }
  .column-gap-md-3 {
    column-gap: 1rem !important;
  }
  .column-gap-md-4 {
    column-gap: 1.5rem !important;
  }
  .column-gap-md-5 {
    column-gap: 3rem !important;
  }
  .text-md-start {
    text-align: left !important;
  }
  .text-md-end {
    text-align: right !important;
  }
  .text-md-center {
    text-align: center !important;
  }
}
@media (min-width: 992px) {
  .float-lg-start {
    float: left !important;
  }
  .float-lg-end {
    float: right !important;
  }
  .float-lg-none {
    float: none !important;
  }
  .object-fit-lg-contain {
    object-fit: contain !important;
  }
  .object-fit-lg-cover {
    object-fit: cover !important;
  }
  .object-fit-lg-fill {
    object-fit: fill !important;
  }
  .object-fit-lg-scale {
    object-fit: scale-down !important;
  }
  .object-fit-lg-none {
    object-fit: none !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-grid {
    display: grid !important;
  }
  .d-lg-inline-grid {
    display: inline-grid !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex {
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: inline-flex !important;
  }
  .d-lg-none {
    display: none !important;
  }
  .flex-lg-fill {
    flex: 1 1 auto !important;
  }
  .flex-lg-row {
    flex-direction: row !important;
  }
  .flex-lg-column {
    flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-lg-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-lg-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-lg-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-lg-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-lg-wrap {
    flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-lg-start {
    justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    justify-content: center !important;
  }
  .justify-content-lg-between {
    justify-content: space-between !important;
  }
  .justify-content-lg-around {
    justify-content: space-around !important;
  }
  .justify-content-lg-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-lg-start {
    align-items: flex-start !important;
  }
  .align-items-lg-end {
    align-items: flex-end !important;
  }
  .align-items-lg-center {
    align-items: center !important;
  }
  .align-items-lg-baseline {
    align-items: baseline !important;
  }
  .align-items-lg-stretch {
    align-items: stretch !important;
  }
  .align-content-lg-start {
    align-content: flex-start !important;
  }
  .align-content-lg-end {
    align-content: flex-end !important;
  }
  .align-content-lg-center {
    align-content: center !important;
  }
  .align-content-lg-between {
    align-content: space-between !important;
  }
  .align-content-lg-around {
    align-content: space-around !important;
  }
  .align-content-lg-stretch {
    align-content: stretch !important;
  }
  .align-self-lg-auto {
    align-self: auto !important;
  }
  .align-self-lg-start {
    align-self: flex-start !important;
  }
  .align-self-lg-end {
    align-self: flex-end !important;
  }
  .align-self-lg-center {
    align-self: center !important;
  }
  .align-self-lg-baseline {
    align-self: baseline !important;
  }
  .align-self-lg-stretch {
    align-self: stretch !important;
  }
  .order-lg-first {
    order: -1 !important;
  }
  .order-lg-0 {
    order: 0 !important;
  }
  .order-lg-1 {
    order: 1 !important;
  }
  .order-lg-2 {
    order: 2 !important;
  }
  .order-lg-3 {
    order: 3 !important;
  }
  .order-lg-4 {
    order: 4 !important;
  }
  .order-lg-5 {
    order: 5 !important;
  }
  .order-lg-last {
    order: 6 !important;
  }
  .m-lg-0 {
    margin: 0 !important;
  }
  .m-lg-1 {
    margin: 0.25rem !important;
  }
  .m-lg-2 {
    margin: 0.5rem !important;
  }
  .m-lg-3 {
    margin: 1rem !important;
  }
  .m-lg-4 {
    margin: 1.5rem !important;
  }
  .m-lg-5 {
    margin: 3rem !important;
  }
  .m-lg-auto {
    margin: auto !important;
  }
  .mx-lg-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-lg-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-lg-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-lg-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-lg-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-lg-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-lg-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-lg-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-lg-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-lg-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-lg-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-lg-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-lg-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-lg-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-lg-0 {
    margin-top: 0 !important;
  }
  .mt-lg-1 {
    margin-top: 0.25rem !important;
  }
  .mt-lg-2 {
    margin-top: 0.5rem !important;
  }
  .mt-lg-3 {
    margin-top: 1rem !important;
  }
  .mt-lg-4 {
    margin-top: 1.5rem !important;
  }
  .mt-lg-5 {
    margin-top: 3rem !important;
  }
  .mt-lg-auto {
    margin-top: auto !important;
  }
  .me-lg-0 {
    margin-right: 0 !important;
  }
  .me-lg-1 {
    margin-right: 0.25rem !important;
  }
  .me-lg-2 {
    margin-right: 0.5rem !important;
  }
  .me-lg-3 {
    margin-right: 1rem !important;
  }
  .me-lg-4 {
    margin-right: 1.5rem !important;
  }
  .me-lg-5 {
    margin-right: 3rem !important;
  }
  .me-lg-auto {
    margin-right: auto !important;
  }
  .mb-lg-0 {
    margin-bottom: 0 !important;
  }
  .mb-lg-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-lg-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-lg-3 {
    margin-bottom: 1rem !important;
  }
  .mb-lg-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-lg-5 {
    margin-bottom: 3rem !important;
  }
  .mb-lg-auto {
    margin-bottom: auto !important;
  }
  .ms-lg-0 {
    margin-left: 0 !important;
  }
  .ms-lg-1 {
    margin-left: 0.25rem !important;
  }
  .ms-lg-2 {
    margin-left: 0.5rem !important;
  }
  .ms-lg-3 {
    margin-left: 1rem !important;
  }
  .ms-lg-4 {
    margin-left: 1.5rem !important;
  }
  .ms-lg-5 {
    margin-left: 3rem !important;
  }
  .ms-lg-auto {
    margin-left: auto !important;
  }
  .p-lg-0 {
    padding: 0 !important;
  }
  .p-lg-1 {
    padding: 0.25rem !important;
  }
  .p-lg-2 {
    padding: 0.5rem !important;
  }
  .p-lg-3 {
    padding: 1rem !important;
  }
  .p-lg-4 {
    padding: 1.5rem !important;
  }
  .p-lg-5 {
    padding: 3rem !important;
  }
  .px-lg-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-lg-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-lg-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-lg-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-lg-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-lg-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-lg-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-lg-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-lg-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-lg-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-lg-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-lg-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-lg-0 {
    padding-top: 0 !important;
  }
  .pt-lg-1 {
    padding-top: 0.25rem !important;
  }
  .pt-lg-2 {
    padding-top: 0.5rem !important;
  }
  .pt-lg-3 {
    padding-top: 1rem !important;
  }
  .pt-lg-4 {
    padding-top: 1.5rem !important;
  }
  .pt-lg-5 {
    padding-top: 3rem !important;
  }
  .pe-lg-0 {
    padding-right: 0 !important;
  }
  .pe-lg-1 {
    padding-right: 0.25rem !important;
  }
  .pe-lg-2 {
    padding-right: 0.5rem !important;
  }
  .pe-lg-3 {
    padding-right: 1rem !important;
  }
  .pe-lg-4 {
    padding-right: 1.5rem !important;
  }
  .pe-lg-5 {
    padding-right: 3rem !important;
  }
  .pb-lg-0 {
    padding-bottom: 0 !important;
  }
  .pb-lg-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-lg-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-lg-3 {
    padding-bottom: 1rem !important;
  }
  .pb-lg-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-lg-5 {
    padding-bottom: 3rem !important;
  }
  .ps-lg-0 {
    padding-left: 0 !important;
  }
  .ps-lg-1 {
    padding-left: 0.25rem !important;
  }
  .ps-lg-2 {
    padding-left: 0.5rem !important;
  }
  .ps-lg-3 {
    padding-left: 1rem !important;
  }
  .ps-lg-4 {
    padding-left: 1.5rem !important;
  }
  .ps-lg-5 {
    padding-left: 3rem !important;
  }
  .gap-lg-0 {
    gap: 0 !important;
  }
  .gap-lg-1 {
    gap: 0.25rem !important;
  }
  .gap-lg-2 {
    gap: 0.5rem !important;
  }
  .gap-lg-3 {
    gap: 1rem !important;
  }
  .gap-lg-4 {
    gap: 1.5rem !important;
  }
  .gap-lg-5 {
    gap: 3rem !important;
  }
  .row-gap-lg-0 {
    row-gap: 0 !important;
  }
  .row-gap-lg-1 {
    row-gap: 0.25rem !important;
  }
  .row-gap-lg-2 {
    row-gap: 0.5rem !important;
  }
  .row-gap-lg-3 {
    row-gap: 1rem !important;
  }
  .row-gap-lg-4 {
    row-gap: 1.5rem !important;
  }
  .row-gap-lg-5 {
    row-gap: 3rem !important;
  }
  .column-gap-lg-0 {
    column-gap: 0 !important;
  }
  .column-gap-lg-1 {
    column-gap: 0.25rem !important;
  }
  .column-gap-lg-2 {
    column-gap: 0.5rem !important;
  }
  .column-gap-lg-3 {
    column-gap: 1rem !important;
  }
  .column-gap-lg-4 {
    column-gap: 1.5rem !important;
  }
  .column-gap-lg-5 {
    column-gap: 3rem !important;
  }
  .text-lg-start {
    text-align: left !important;
  }
  .text-lg-end {
    text-align: right !important;
  }
  .text-lg-center {
    text-align: center !important;
  }
}
@media (min-width: 1200px) {
  .float-xl-start {
    float: left !important;
  }
  .float-xl-end {
    float: right !important;
  }
  .float-xl-none {
    float: none !important;
  }
  .object-fit-xl-contain {
    object-fit: contain !important;
  }
  .object-fit-xl-cover {
    object-fit: cover !important;
  }
  .object-fit-xl-fill {
    object-fit: fill !important;
  }
  .object-fit-xl-scale {
    object-fit: scale-down !important;
  }
  .object-fit-xl-none {
    object-fit: none !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-grid {
    display: grid !important;
  }
  .d-xl-inline-grid {
    display: inline-grid !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: inline-flex !important;
  }
  .d-xl-none {
    display: none !important;
  }
  .flex-xl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xl-row {
    flex-direction: row !important;
  }
  .flex-xl-column {
    flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-xl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-xl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    justify-content: center !important;
  }
  .justify-content-xl-between {
    justify-content: space-between !important;
  }
  .justify-content-xl-around {
    justify-content: space-around !important;
  }
  .justify-content-xl-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-xl-start {
    align-items: flex-start !important;
  }
  .align-items-xl-end {
    align-items: flex-end !important;
  }
  .align-items-xl-center {
    align-items: center !important;
  }
  .align-items-xl-baseline {
    align-items: baseline !important;
  }
  .align-items-xl-stretch {
    align-items: stretch !important;
  }
  .align-content-xl-start {
    align-content: flex-start !important;
  }
  .align-content-xl-end {
    align-content: flex-end !important;
  }
  .align-content-xl-center {
    align-content: center !important;
  }
  .align-content-xl-between {
    align-content: space-between !important;
  }
  .align-content-xl-around {
    align-content: space-around !important;
  }
  .align-content-xl-stretch {
    align-content: stretch !important;
  }
  .align-self-xl-auto {
    align-self: auto !important;
  }
  .align-self-xl-start {
    align-self: flex-start !important;
  }
  .align-self-xl-end {
    align-self: flex-end !important;
  }
  .align-self-xl-center {
    align-self: center !important;
  }
  .align-self-xl-baseline {
    align-self: baseline !important;
  }
  .align-self-xl-stretch {
    align-self: stretch !important;
  }
  .order-xl-first {
    order: -1 !important;
  }
  .order-xl-0 {
    order: 0 !important;
  }
  .order-xl-1 {
    order: 1 !important;
  }
  .order-xl-2 {
    order: 2 !important;
  }
  .order-xl-3 {
    order: 3 !important;
  }
  .order-xl-4 {
    order: 4 !important;
  }
  .order-xl-5 {
    order: 5 !important;
  }
  .order-xl-last {
    order: 6 !important;
  }
  .m-xl-0 {
    margin: 0 !important;
  }
  .m-xl-1 {
    margin: 0.25rem !important;
  }
  .m-xl-2 {
    margin: 0.5rem !important;
  }
  .m-xl-3 {
    margin: 1rem !important;
  }
  .m-xl-4 {
    margin: 1.5rem !important;
  }
  .m-xl-5 {
    margin: 3rem !important;
  }
  .m-xl-auto {
    margin: auto !important;
  }
  .mx-xl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-xl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-xl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-xl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-xl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-xl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-xl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-xl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-xl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-xl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-xl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-xl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-xl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-xl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-xl-0 {
    margin-top: 0 !important;
  }
  .mt-xl-1 {
    margin-top: 0.25rem !important;
  }
  .mt-xl-2 {
    margin-top: 0.5rem !important;
  }
  .mt-xl-3 {
    margin-top: 1rem !important;
  }
  .mt-xl-4 {
    margin-top: 1.5rem !important;
  }
  .mt-xl-5 {
    margin-top: 3rem !important;
  }
  .mt-xl-auto {
    margin-top: auto !important;
  }
  .me-xl-0 {
    margin-right: 0 !important;
  }
  .me-xl-1 {
    margin-right: 0.25rem !important;
  }
  .me-xl-2 {
    margin-right: 0.5rem !important;
  }
  .me-xl-3 {
    margin-right: 1rem !important;
  }
  .me-xl-4 {
    margin-right: 1.5rem !important;
  }
  .me-xl-5 {
    margin-right: 3rem !important;
  }
  .me-xl-auto {
    margin-right: auto !important;
  }
  .mb-xl-0 {
    margin-bottom: 0 !important;
  }
  .mb-xl-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-xl-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-xl-3 {
    margin-bottom: 1rem !important;
  }
  .mb-xl-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-xl-5 {
    margin-bottom: 3rem !important;
  }
  .mb-xl-auto {
    margin-bottom: auto !important;
  }
  .ms-xl-0 {
    margin-left: 0 !important;
  }
  .ms-xl-1 {
    margin-left: 0.25rem !important;
  }
  .ms-xl-2 {
    margin-left: 0.5rem !important;
  }
  .ms-xl-3 {
    margin-left: 1rem !important;
  }
  .ms-xl-4 {
    margin-left: 1.5rem !important;
  }
  .ms-xl-5 {
    margin-left: 3rem !important;
  }
  .ms-xl-auto {
    margin-left: auto !important;
  }
  .p-xl-0 {
    padding: 0 !important;
  }
  .p-xl-1 {
    padding: 0.25rem !important;
  }
  .p-xl-2 {
    padding: 0.5rem !important;
  }
  .p-xl-3 {
    padding: 1rem !important;
  }
  .p-xl-4 {
    padding: 1.5rem !important;
  }
  .p-xl-5 {
    padding: 3rem !important;
  }
  .px-xl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-xl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-xl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-xl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-xl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-xl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-xl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-xl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-xl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-xl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-xl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-xl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-xl-0 {
    padding-top: 0 !important;
  }
  .pt-xl-1 {
    padding-top: 0.25rem !important;
  }
  .pt-xl-2 {
    padding-top: 0.5rem !important;
  }
  .pt-xl-3 {
    padding-top: 1rem !important;
  }
  .pt-xl-4 {
    padding-top: 1.5rem !important;
  }
  .pt-xl-5 {
    padding-top: 3rem !important;
  }
  .pe-xl-0 {
    padding-right: 0 !important;
  }
  .pe-xl-1 {
    padding-right: 0.25rem !important;
  }
  .pe-xl-2 {
    padding-right: 0.5rem !important;
  }
  .pe-xl-3 {
    padding-right: 1rem !important;
  }
  .pe-xl-4 {
    padding-right: 1.5rem !important;
  }
  .pe-xl-5 {
    padding-right: 3rem !important;
  }
  .pb-xl-0 {
    padding-bottom: 0 !important;
  }
  .pb-xl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-xl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-xl-3 {
    padding-bottom: 1rem !important;
  }
  .pb-xl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-xl-5 {
    padding-bottom: 3rem !important;
  }
  .ps-xl-0 {
    padding-left: 0 !important;
  }
  .ps-xl-1 {
    padding-left: 0.25rem !important;
  }
  .ps-xl-2 {
    padding-left: 0.5rem !important;
  }
  .ps-xl-3 {
    padding-left: 1rem !important;
  }
  .ps-xl-4 {
    padding-left: 1.5rem !important;
  }
  .ps-xl-5 {
    padding-left: 3rem !important;
  }
  .gap-xl-0 {
    gap: 0 !important;
  }
  .gap-xl-1 {
    gap: 0.25rem !important;
  }
  .gap-xl-2 {
    gap: 0.5rem !important;
  }
  .gap-xl-3 {
    gap: 1rem !important;
  }
  .gap-xl-4 {
    gap: 1.5rem !important;
  }
  .gap-xl-5 {
    gap: 3rem !important;
  }
  .row-gap-xl-0 {
    row-gap: 0 !important;
  }
  .row-gap-xl-1 {
    row-gap: 0.25rem !important;
  }
  .row-gap-xl-2 {
    row-gap: 0.5rem !important;
  }
  .row-gap-xl-3 {
    row-gap: 1rem !important;
  }
  .row-gap-xl-4 {
    row-gap: 1.5rem !important;
  }
  .row-gap-xl-5 {
    row-gap: 3rem !important;
  }
  .column-gap-xl-0 {
    column-gap: 0 !important;
  }
  .column-gap-xl-1 {
    column-gap: 0.25rem !important;
  }
  .column-gap-xl-2 {
    column-gap: 0.5rem !important;
  }
  .column-gap-xl-3 {
    column-gap: 1rem !important;
  }
  .column-gap-xl-4 {
    column-gap: 1.5rem !important;
  }
  .column-gap-xl-5 {
    column-gap: 3rem !important;
  }
  .text-xl-start {
    text-align: left !important;
  }
  .text-xl-end {
    text-align: right !important;
  }
  .text-xl-center {
    text-align: center !important;
  }
}
@media (min-width: 1400px) {
  .float-xxl-start {
    float: left !important;
  }
  .float-xxl-end {
    float: right !important;
  }
  .float-xxl-none {
    float: none !important;
  }
  .object-fit-xxl-contain {
    object-fit: contain !important;
  }
  .object-fit-xxl-cover {
    object-fit: cover !important;
  }
  .object-fit-xxl-fill {
    object-fit: fill !important;
  }
  .object-fit-xxl-scale {
    object-fit: scale-down !important;
  }
  .object-fit-xxl-none {
    object-fit: none !important;
  }
  .d-xxl-inline {
    display: inline !important;
  }
  .d-xxl-inline-block {
    display: inline-block !important;
  }
  .d-xxl-block {
    display: block !important;
  }
  .d-xxl-grid {
    display: grid !important;
  }
  .d-xxl-inline-grid {
    display: inline-grid !important;
  }
  .d-xxl-table {
    display: table !important;
  }
  .d-xxl-table-row {
    display: table-row !important;
  }
  .d-xxl-table-cell {
    display: table-cell !important;
  }
  .d-xxl-flex {
    display: flex !important;
  }
  .d-xxl-inline-flex {
    display: inline-flex !important;
  }
  .d-xxl-none {
    display: none !important;
  }
  .flex-xxl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xxl-row {
    flex-direction: row !important;
  }
  .flex-xxl-column {
    flex-direction: column !important;
  }
  .flex-xxl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xxl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xxl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xxl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xxl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xxl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-xxl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xxl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xxl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-xxl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xxl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xxl-center {
    justify-content: center !important;
  }
  .justify-content-xxl-between {
    justify-content: space-between !important;
  }
  .justify-content-xxl-around {
    justify-content: space-around !important;
  }
  .justify-content-xxl-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-xxl-start {
    align-items: flex-start !important;
  }
  .align-items-xxl-end {
    align-items: flex-end !important;
  }
  .align-items-xxl-center {
    align-items: center !important;
  }
  .align-items-xxl-baseline {
    align-items: baseline !important;
  }
  .align-items-xxl-stretch {
    align-items: stretch !important;
  }
  .align-content-xxl-start {
    align-content: flex-start !important;
  }
  .align-content-xxl-end {
    align-content: flex-end !important;
  }
  .align-content-xxl-center {
    align-content: center !important;
  }
  .align-content-xxl-between {
    align-content: space-between !important;
  }
  .align-content-xxl-around {
    align-content: space-around !important;
  }
  .align-content-xxl-stretch {
    align-content: stretch !important;
  }
  .align-self-xxl-auto {
    align-self: auto !important;
  }
  .align-self-xxl-start {
    align-self: flex-start !important;
  }
  .align-self-xxl-end {
    align-self: flex-end !important;
  }
  .align-self-xxl-center {
    align-self: center !important;
  }
  .align-self-xxl-baseline {
    align-self: baseline !important;
  }
  .align-self-xxl-stretch {
    align-self: stretch !important;
  }
  .order-xxl-first {
    order: -1 !important;
  }
  .order-xxl-0 {
    order: 0 !important;
  }
  .order-xxl-1 {
    order: 1 !important;
  }
  .order-xxl-2 {
    order: 2 !important;
  }
  .order-xxl-3 {
    order: 3 !important;
  }
  .order-xxl-4 {
    order: 4 !important;
  }
  .order-xxl-5 {
    order: 5 !important;
  }
  .order-xxl-last {
    order: 6 !important;
  }
  .m-xxl-0 {
    margin: 0 !important;
  }
  .m-xxl-1 {
    margin: 0.25rem !important;
  }
  .m-xxl-2 {
    margin: 0.5rem !important;
  }
  .m-xxl-3 {
    margin: 1rem !important;
  }
  .m-xxl-4 {
    margin: 1.5rem !important;
  }
  .m-xxl-5 {
    margin: 3rem !important;
  }
  .m-xxl-auto {
    margin: auto !important;
  }
  .mx-xxl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-xxl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-xxl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-xxl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-xxl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-xxl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-xxl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-xxl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-xxl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-xxl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-xxl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-xxl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-xxl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-xxl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-xxl-0 {
    margin-top: 0 !important;
  }
  .mt-xxl-1 {
    margin-top: 0.25rem !important;
  }
  .mt-xxl-2 {
    margin-top: 0.5rem !important;
  }
  .mt-xxl-3 {
    margin-top: 1rem !important;
  }
  .mt-xxl-4 {
    margin-top: 1.5rem !important;
  }
  .mt-xxl-5 {
    margin-top: 3rem !important;
  }
  .mt-xxl-auto {
    margin-top: auto !important;
  }
  .me-xxl-0 {
    margin-right: 0 !important;
  }
  .me-xxl-1 {
    margin-right: 0.25rem !important;
  }
  .me-xxl-2 {
    margin-right: 0.5rem !important;
  }
  .me-xxl-3 {
    margin-right: 1rem !important;
  }
  .me-xxl-4 {
    margin-right: 1.5rem !important;
  }
  .me-xxl-5 {
    margin-right: 3rem !important;
  }
  .me-xxl-auto {
    margin-right: auto !important;
  }
  .mb-xxl-0 {
    margin-bottom: 0 !important;
  }
  .mb-xxl-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-xxl-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-xxl-3 {
    margin-bottom: 1rem !important;
  }
  .mb-xxl-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-xxl-5 {
    margin-bottom: 3rem !important;
  }
  .mb-xxl-auto {
    margin-bottom: auto !important;
  }
  .ms-xxl-0 {
    margin-left: 0 !important;
  }
  .ms-xxl-1 {
    margin-left: 0.25rem !important;
  }
  .ms-xxl-2 {
    margin-left: 0.5rem !important;
  }
  .ms-xxl-3 {
    margin-left: 1rem !important;
  }
  .ms-xxl-4 {
    margin-left: 1.5rem !important;
  }
  .ms-xxl-5 {
    margin-left: 3rem !important;
  }
  .ms-xxl-auto {
    margin-left: auto !important;
  }
  .p-xxl-0 {
    padding: 0 !important;
  }
  .p-xxl-1 {
    padding: 0.25rem !important;
  }
  .p-xxl-2 {
    padding: 0.5rem !important;
  }
  .p-xxl-3 {
    padding: 1rem !important;
  }
  .p-xxl-4 {
    padding: 1.5rem !important;
  }
  .p-xxl-5 {
    padding: 3rem !important;
  }
  .px-xxl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-xxl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-xxl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-xxl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-xxl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-xxl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-xxl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-xxl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-xxl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-xxl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-xxl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-xxl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-xxl-0 {
    padding-top: 0 !important;
  }
  .pt-xxl-1 {
    padding-top: 0.25rem !important;
  }
  .pt-xxl-2 {
    padding-top: 0.5rem !important;
  }
  .pt-xxl-3 {
    padding-top: 1rem !important;
  }
  .pt-xxl-4 {
    padding-top: 1.5rem !important;
  }
  .pt-xxl-5 {
    padding-top: 3rem !important;
  }
  .pe-xxl-0 {
    padding-right: 0 !important;
  }
  .pe-xxl-1 {
    padding-right: 0.25rem !important;
  }
  .pe-xxl-2 {
    padding-right: 0.5rem !important;
  }
  .pe-xxl-3 {
    padding-right: 1rem !important;
  }
  .pe-xxl-4 {
    padding-right: 1.5rem !important;
  }
  .pe-xxl-5 {
    padding-right: 3rem !important;
  }
  .pb-xxl-0 {
    padding-bottom: 0 !important;
  }
  .pb-xxl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-xxl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-xxl-3 {
    padding-bottom: 1rem !important;
  }
  .pb-xxl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-xxl-5 {
    padding-bottom: 3rem !important;
  }
  .ps-xxl-0 {
    padding-left: 0 !important;
  }
  .ps-xxl-1 {
    padding-left: 0.25rem !important;
  }
  .ps-xxl-2 {
    padding-left: 0.5rem !important;
  }
  .ps-xxl-3 {
    padding-left: 1rem !important;
  }
  .ps-xxl-4 {
    padding-left: 1.5rem !important;
  }
  .ps-xxl-5 {
    padding-left: 3rem !important;
  }
  .gap-xxl-0 {
    gap: 0 !important;
  }
  .gap-xxl-1 {
    gap: 0.25rem !important;
  }
  .gap-xxl-2 {
    gap: 0.5rem !important;
  }
  .gap-xxl-3 {
    gap: 1rem !important;
  }
  .gap-xxl-4 {
    gap: 1.5rem !important;
  }
  .gap-xxl-5 {
    gap: 3rem !important;
  }
  .row-gap-xxl-0 {
    row-gap: 0 !important;
  }
  .row-gap-xxl-1 {
    row-gap: 0.25rem !important;
  }
  .row-gap-xxl-2 {
    row-gap: 0.5rem !important;
  }
  .row-gap-xxl-3 {
    row-gap: 1rem !important;
  }
  .row-gap-xxl-4 {
    row-gap: 1.5rem !important;
  }
  .row-gap-xxl-5 {
    row-gap: 3rem !important;
  }
  .column-gap-xxl-0 {
    column-gap: 0 !important;
  }
  .column-gap-xxl-1 {
    column-gap: 0.25rem !important;
  }
  .column-gap-xxl-2 {
    column-gap: 0.5rem !important;
  }
  .column-gap-xxl-3 {
    column-gap: 1rem !important;
  }
  .column-gap-xxl-4 {
    column-gap: 1.5rem !important;
  }
  .column-gap-xxl-5 {
    column-gap: 3rem !important;
  }
  .text-xxl-start {
    text-align: left !important;
  }
  .text-xxl-end {
    text-align: right !important;
  }
  .text-xxl-center {
    text-align: center !important;
  }
}
@media (min-width: 1200px) {
  .fs-1 {
    font-size: 2rem !important;
  }
  .fs-2 {
    font-size: 1.75rem !important;
  }
  .fs-3 {
    font-size: 1.5rem !important;
  }
}
@media print {
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-grid {
    display: grid !important;
  }
  .d-print-inline-grid {
    display: inline-grid !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: flex !important;
  }
  .d-print-inline-flex {
    display: inline-flex !important;
  }
  .d-print-none {
    display: none !important;
  }
}
.navbar {
  font-size: 0.875rem;
  font-weight: 600;
  text-transform: uppercase;
}
.navbar-nav .nav-link {
  padding-top: 0.715rem;
  padding-bottom: 0.715rem;
}
.navbar-brand {
  margin-right: 2rem;
}

.bg-light {
  border: 1px solid rgba(0, 0, 0, 0.1);
}
.bg-light.navbar-fixed-top {
  border-width: 0 0 1px;
}
.bg-light.navbar-bottom-top {
  border-width: 1px 0 0;
}

.nav-item {
  margin-right: 2rem;
}

.btn {
  font-size: 0.875rem;
  text-transform: uppercase;
}
.btn-sm, .btn-group-sm > .btn {
  font-size: 10px;
}
.btn-warning, .btn-warning:hover, .btn-warning:not([disabled]):not(.disabled):active, .btn-warning:focus {
  color: #fff;
}

.btn-outline-secondary {
  color: #919aa1;
  border-color: #919aa1;
}
.btn-outline-secondary:not([disabled]):not(.disabled):hover, .btn-outline-secondary:not([disabled]):not(.disabled):focus, .btn-outline-secondary:not([disabled]):not(.disabled):active {
  color: #fff;
  background-color: #ced4da;
  border-color: #ced4da;
}
.btn-outline-secondary:not([disabled]):not(.disabled):focus {
  box-shadow: 0 0 0 0.2rem rgba(206, 212, 218, 0.5);
}

[class*=btn-outline-] {
  border-width: 2px;
}

.border-secondary {
  border: 1px solid #ced4da !important;
}

[data-bs-theme=dark] .btn-primary {
  background-color: #080808;
}

body {
  letter-spacing: 1px;
}

h1, .h1,
h2,
.h2,
h3,
.h3,
h4,
.h4,
h5,
.h5,
h6,
.h6 {
  text-transform: uppercase;
  letter-spacing: 3px;
}

.text-secondary {
  color: #55595c !important;
}

th {
  font-size: 0.875rem;
  text-transform: uppercase;
}

.table th,
.table td {
  padding: 1.5rem;
}
.table-sm th,
.table-sm td {
  padding: 0.75rem;
}

[data-bs-theme=dark] .form-control {
  color: #55595c;
}
[data-bs-theme=dark] .form-control::placeholder {
  color: rgba(85, 89, 92, 0.75);
}
[data-bs-theme=dark] .form-floating > label,
[data-bs-theme=dark] .form-floating > .form-control:focus ~ label,
[data-bs-theme=dark] .form-floating > .form-control:not(:placeholder-shown) ~ label,
[data-bs-theme=dark] .form-floating > .form-control-plaintext ~ label,
[data-bs-theme=dark] .form-floating > .form-select ~ label {
  color: rgba(85, 89, 92, 0.75);
}
[data-bs-theme=dark] .form-floating > .form-control::placeholder,
[data-bs-theme=dark] .form-floating > .form-control-plaintext::placeholder {
  color: transparent;
}
[data-bs-theme=dark] .form-check-input:checked {
  background-color: rgba(85, 89, 92, 0.75);
}
[data-bs-theme=dark] .form-switch .form-check-input {
  background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'><circle r='3' fill='rgba(0, 0, 0, 0.25)'/></svg>");
}
[data-bs-theme=dark] .form-range::-webkit-slider-thumb {
  background-color: #919aa1;
}
[data-bs-theme=dark] .form-range:disabled::-webkit-slider-thumb {
  background-color: #343a40;
}
[data-bs-theme=dark] .input-group-text {
  color: rgba(85, 89, 92, 0.75);
}

.dropdown-menu {
  font-size: 0.875rem;
  text-transform: none;
}

.badge {
  padding-top: 0.28rem;
}
.badge-pill {
  border-radius: 10rem;
}
.badge.bg-secondary, .badge.bg-light {
  color: #343a40;
}

.list-group-item h1,
.list-group-item h2,
.list-group-item h3,
.list-group-item h4,
.list-group-item h5,
.list-group-item h6,
.list-group-item .h1,
.list-group-item .h2,
.list-group-item .h3,
.list-group-item .h4,
.list-group-item .h5,
.list-group-item .h6,
.card h1,
.card h2,
.card h3,
.card h4,
.card h5,
.card h6,
.card .h1,
.card .h2,
.card .h3,
.card .h4,
.card .h5,
.card .h6 {
  color: inherit;
}

/*# sourceMappingURL=data:application/json;charset=utf-8,%7B%22version%22:3,%22sourceRoot%22:%22%22,%22sources%22:%5B%22../../assets/styles/app.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_banner.scss%22,%22../../vendor/thomaspark/bootswatch/dist/lux/_bootswatch.scss%22,%22../../vendor/twbs/bootstrap/scss/_root.scss%22,%22../../vendor/twbs/bootstrap/scss/vendor/_rfs.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_color-mode.scss%22,%22../../vendor/twbs/bootstrap/scss/_reboot.scss%22,%22../../vendor/twbs/bootstrap/scss/_variables.scss%22,%22../../vendor/thomaspark/bootswatch/dist/lux/_variables.scss%22,%22../../vendor/twbs/bootstrap/scss/_type.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_lists.scss%22,%22../../vendor/twbs/bootstrap/scss/_images.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_image.scss%22,%22../../vendor/twbs/bootstrap/scss/_containers.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_container.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_breakpoints.scss%22,%22../../vendor/twbs/bootstrap/scss/_grid.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_grid.scss%22,%22../../vendor/twbs/bootstrap/scss/_tables.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_table-variants.scss%22,%22../../vendor/twbs/bootstrap/scss/forms/_labels.scss%22,%22../../vendor/twbs/bootstrap/scss/forms/_form-text.scss%22,%22../../vendor/twbs/bootstrap/scss/forms/_form-control.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_border-radius.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_transition.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_gradients.scss%22,%22../../vendor/twbs/bootstrap/scss/forms/_form-select.scss%22,%22../../vendor/twbs/bootstrap/scss/forms/_form-check.scss%22,%22../../vendor/twbs/bootstrap/scss/forms/_form-range.scss%22,%22../../vendor/twbs/bootstrap/scss/forms/_floating-labels.scss%22,%22../../vendor/twbs/bootstrap/scss/forms/_input-group.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_forms.scss%22,%22../../vendor/twbs/bootstrap/scss/_buttons.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_buttons.scss%22,%22../../vendor/twbs/bootstrap/scss/_transitions.scss%22,%22../../vendor/twbs/bootstrap/scss/_dropdown.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_caret.scss%22,%22../../vendor/twbs/bootstrap/scss/_button-group.scss%22,%22../../vendor/twbs/bootstrap/scss/_nav.scss%22,%22../../vendor/twbs/bootstrap/scss/_navbar.scss%22,%22../../vendor/twbs/bootstrap/scss/_card.scss%22,%22../../vendor/twbs/bootstrap/scss/_accordion.scss%22,%22../../vendor/twbs/bootstrap/scss/_breadcrumb.scss%22,%22../../vendor/twbs/bootstrap/scss/_pagination.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_pagination.scss%22,%22../../vendor/twbs/bootstrap/scss/_badge.scss%22,%22../../vendor/twbs/bootstrap/scss/_alert.scss%22,%22../../vendor/twbs/bootstrap/scss/_progress.scss%22,%22../../vendor/twbs/bootstrap/scss/_list-group.scss%22,%22../../vendor/twbs/bootstrap/scss/_close.scss%22,%22../../vendor/twbs/bootstrap/scss/_toasts.scss%22,%22../../vendor/twbs/bootstrap/scss/_modal.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_backdrop.scss%22,%22../../vendor/twbs/bootstrap/scss/_tooltip.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_reset-text.scss%22,%22../../vendor/twbs/bootstrap/scss/_popover.scss%22,%22../../vendor/twbs/bootstrap/scss/_carousel.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_clearfix.scss%22,%22../../vendor/twbs/bootstrap/scss/_spinners.scss%22,%22../../vendor/twbs/bootstrap/scss/_offcanvas.scss%22,%22../../vendor/twbs/bootstrap/scss/_placeholders.scss%22,%22../../vendor/twbs/bootstrap/scss/helpers/_color-bg.scss%22,%22../../vendor/twbs/bootstrap/scss/helpers/_colored-links.scss%22,%22../../vendor/twbs/bootstrap/scss/helpers/_focus-ring.scss%22,%22../../vendor/twbs/bootstrap/scss/helpers/_icon-link.scss%22,%22../../vendor/twbs/bootstrap/scss/helpers/_ratio.scss%22,%22../../vendor/twbs/bootstrap/scss/helpers/_position.scss%22,%22../../vendor/twbs/bootstrap/scss/helpers/_stacks.scss%22,%22../../vendor/twbs/bootstrap/scss/helpers/_visually-hidden.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_visually-hidden.scss%22,%22../../vendor/twbs/bootstrap/scss/helpers/_stretched-link.scss%22,%22../../vendor/twbs/bootstrap/scss/helpers/_text-truncation.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_text-truncate.scss%22,%22../../vendor/twbs/bootstrap/scss/helpers/_vr.scss%22,%22../../vendor/twbs/bootstrap/scss/mixins/_utilities.scss%22,%22../../vendor/twbs/bootstrap/scss/utilities/_api.scss%22%5D,%22names%22:%5B%5D,%22mappings%22:%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MQ;;;AE+MN;EACE;;;AAOJ;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;EAOE;;;AAGF;EACE;;;AASF;EACE;EACA;;;AAQF;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;AAWA;EACE;;;AAKF;EACE;;;AAOF;EACE;EACA;;;AAKF;EACE;;;AAKF;EACE;;;AAOF;EACE;EACA;;;AAQF;EACE;;;AAQF;EACE;;;AGrkBF;ELmQM,WALI;EK5PR,aFwoB4B;;;AEnoB5B;ELgQM;EK5PJ,aFynBkB;EExnBlB,aFwmB0B;;AHzgB1B;EKpGF;ILuQM;;;;AKvQN;ELgQM;EK5PJ,aFynBkB;EExnBlB,aFwmB0B;;AHzgB1B;EKpGF;ILuQM;;;;AKvQN;ELgQM;EK5PJ,aFynBkB;EExnBlB,aFwmB0B;;AHzgB1B;EKpGF;ILuQM;;;;AKvQN;ELgQM;EK5PJ,aFynBkB;EExnBlB,aFwmB0B;;AHzgB1B;EKpGF;ILuQM;;;;AKvQN;ELgQM;EK5PJ,aFynBkB;EExnBlB,aFwmB0B;;AHzgB1B;EKpGF;ILuQM;;;;AKvQN;ELgQM;EK5PJ,aFynBkB;EExnBlB,aFwmB0B;;AHzgB1B;EKpGF;ILuQM;;;;AK/OR;ECvDE;EACA;;;AD2DF;EC5DE;EACA;;;AD8DF;EACE;;AAEA;EACE,cFsoB0B;;;AE5nB9B;EL8MM,WALI;EKvMR;;;AAIF;EACE,eFiUO;EH1HH,WALI;;AK/LR;EACE;;;AAIJ;EACE;EACA,eFuTO;EH1HH,WALI;EKtLR,ODrFS;;ACuFT;EACE;;;AEhGJ;ECIE;EAGA;;;ADDF;EACE,SJ+jDkC;EI9jDlC,kBJ+jDkC;EI9jDlC;ECLA;EAGA;;;ADcF;EAEE;;;AAGF;EACE;EACA;;;AAGF;EPyPM,WALI;EOlPR,OJkjDkC;;;AMplDlC;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;ECHA;EACA;EACA;EACA;EACA;EACA;EACA;;;ACsDE;EF5CE;IACE,WNkee;;;AQvbnB;EF5CE;IACE,WNkee;;;AQvbnB;EF5CE;IACE,WNkee;;;AQvbnB;EF5CE;IACE,WNkee;;;AQvbnB;EF5CE;IACE,WNkee;;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EACA;EACA;EAEA;EACA;;;AAlBF;EAOE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EAEA;EACA;;;AAlBF;EAOE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EAEA;EACA;;;AAlBF;EAOE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EAEA;EACA;;;AAlBF;EAOE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EAEA;EACA;;;AAlBF;EAOE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EAEA;EACA;;;AAlBF;EAOE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EAEA;EACA;;;AAlBF;EAOE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EAEA;EACA;;;ADiJA;EACE;EACA;;;AH3FF;EGyFA;IACE;IACA;;;AH3FF;EGyFA;IACE;IACA;;;AH3FF;EGyFA;IACE;IACA;;;AH3FF;EGyFA;IACE;IACA;;;AH3FF;EGyFA;IACE;IACA;;;AEnKN;EACE,ebu2BsC;;;Aa91BxC;EACE;EACA;EACA;EhB8QI,WALI;EgBrQR,aZyEsC;;;AYrExC;EACE;EACA;EhBoQI,WALI;;;AgB3PV;EACE;EACA;EhB8PI,WALI;;;AiBtRV;EACE,Yd+1BsC;EHrkBlC,WALI;EiBjRR,Od+1BsC;;;Aep2BxC;EACE;EACA;EACA;ElBwRI,WALI;EkBhRR,adgD4B;Ec/C5B,admFsC;EclFtC,Of43BsC;Ee33BtC;EACA,kBdHS;EcIT;EACA;ECME,eDH2C;EEHzC,YFMJ;;AEFI;EFhBN;IEiBQ;;;AFGN;EACE;;AAEA;EACE;;AAKJ;EACE,Ofs2BoC;Eer2BpC,kBdxBO;EcyBP,cf82BoC;Ee72BpC;EAKE,YfkhBkB;;Ae9gBtB;EAME;EAMA;EAKA;;AAKF;EACE;EACA;;AAIF;EACE,Of40BoC;Ee10BpC;;AAQF;EAEE,kBd3EO;Ec8EP;;AAIF;EACE;EACA;EACA,mBdZ0B;Eca1B,OfsyBoC;EkBp4BtC,kBlBqiCgC;Eer8B9B;EACA;EACA;EACA;EACA,yBdzB0B;Ec0B1B;EEzFE,YF0FF;;AEtFE;EF0EJ;IEzEM;;;AFwFN;EACE,kBf47B8B;;;Aen7BlC;EACE;EACA;EACA;EACA;EACA,ad9BsC;Ec+BtC,Of2xBsC;Ee1xBtC;EACA;EACA;;AAEA;EACE;;AAGF;EAEE;EACA;;;AAWJ;EACE,Yf4wBsC;Ee3wBtC;ElByII,WALI;;AkBhIR;EACE;EACA;EACA,mBdtE0B;;;Ac0E9B;EACE,YfgwBsC;Ee/vBtC;ElB4HI,WALI;;AkBnHR;EACE;EACA;EACA,mBdjF0B;;;AcyF5B;EACE,Yf6uBoC;;Ae1uBtC;EACE,Yf0uBoC;;AevuBtC;EACE,YfuuBoC;;;AeluBxC;EACE,OfquBsC;EepuBtC,Qf8tBsC;Ee7tBtC,Sd/G4B;;AciH5B;EACE;;AAGF;EACE;;AAIF;EACE;;AAIF;EAAoB,Qf8sBkB;;Ae7sBtC;EAAoB,Qf8sBkB;;;AmB75BxC;EACE;EAEA;EACA;EACA;EtBqRI,WALI;EsB7QR,alB6C4B;EkB5C5B,alBgFsC;EkB/EtC,OnBy3BsC;EmBx3BtC;EACA,kBlBNS;EkBOT;EACA;EACA,qBnB+9BkC;EmB99BlC,iBnB+9BkC;EmB99BlC;EHAE,eGCiD;EFP/C,YESJ;;AFLI;EEfN;IFgBQ;;;AEMN;EACE,cnBs3BoC;EmBr3BpC;EAKE,YnBi+B4B;;AmB79BhC;EAEE,elB6C0B;EkB5C1B;;AAGF;EACE,OlB9BO;EkB+BP,kBlBlCO;;AkBuCT;EACE;EACA;;;AAIJ;EACE,alB4B4B;EkB3B5B,gBlB2B4B;EkB1B5B,clB2B4B;EJwMxB,WALI;;;AsBzNV;EACE,alBsB4B;EkBrB5B,gBlBqB4B;EkBpB5B,clBqB4B;EJsMxB,WALI;;;AsB/MN;EACE;;;ACxEN;EACE;EACA,YpBq6BwC;EoBp6BxC,cpBq6BwC;EoBp6BxC,epBq6BwC;;AoBn6BxC;EACE;EACA;;;AAIJ;EACE,epB25BwC;EoB15BxC;EACA;;AAEA;EACE;EACA;EACA;;;AAIJ;EACE;EAEA;EACA,OpB04BwC;EoBz4BxC,QpBy4BwC;EoBx4BxC;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA,QpB24BwC;EoB14BxC;;AAOA;EAEE,epBm4BsC;;AoBh4BxC;EACE,QpB03BsC;;AoBv3BxC;EACE,cpBs1BoC;EoBr1BpC;EACA,YpB8foB;;AoB3ftB;EACE,kBnBhDO;EmBiDP,cnBjDO;;AmBmDP;EAII;;AAIJ;EAII;;AAKN;EACE,kBnBrEO;EmBsEP,cnBtEO;EmB2EL;;AAIJ;EACE;EACA;EACA,SpBk2BuC;;AoB31BvC;EACE;EACA,SpBy1BqC;;;AoB30B3C;EACE,cpBo1BgC;;AoBl1BhC;EACE;EAEA,OpB80B8B;EoB70B9B;EACA;EACA;EJ9GA,eI+GmD;EHrHjD,YGsHF;;AHlHE;EG0GJ;IHzGM;;;AGmHJ;EACE;;AAGF;EACE,qBpB60B4B;EoBx0B1B;;AAKN;EACE,epBwzB8B;EoBvzB9B;;AAEA;EACE;EACA;;;AAKN;EACE;EACA,cpBsyBgC;;;AoBnyBlC;EACE;EACA;EACA;;AAIE;EACE;EACA;EACA,SpBspBwB;;;AoB/oB1B;EACE;;;ACnLN;EACE;EACA;EACA;EACA;EACA;;AAEA;EACE;;AAIA;EAA0B,YrB8gCa;;AqB7gCvC;EAA0B,YrB6gCa;;AqB1gCzC;EACE;;AAGF;EACE,OrB+/BuC;EqB9/BvC,QrB8/BuC;EqB7/BvC;EACA;EH1BF,kBjBcS;EoBcP,QrB6/BuC;EiB7gCrC,YImBF;;AJfE;EIMJ;IJLM;;;AIgBJ;EHjCF,kBlB8hCyC;;AqBx/BzC;EACE,OrBw+B8B;EqBv+B9B,QrBw+B8B;EqBv+B9B;EACA,QrBu+B8B;EqBt+B9B,kBrBu+B8B;EqBt+B9B;;AAKF;EACE,OrBo+BuC;EqBn+BvC,QrBm+BuC;EqBl+BvC;EHpDF,kBjBcS;EoBwCP,QrBm+BuC;EiB7gCrC,YI6CF;;AJzCE;EIiCJ;IJhCM;;;AI0CJ;EH3DF,kBlB8hCyC;;AqB99BzC;EACE,OrB88B8B;EqB78B9B,QrB88B8B;EqB78B9B;EACA,QrB68B8B;EqB58B9B,kBrB68B8B;EqB58B9B;;AAKF;EACE;;AAEA;EACE,kBrBg9BqC;;AqB78BvC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;EACE;EACA;EAKE;;AAIJ;EAKE;EACA;EAGA;;AAGA;EAKI;;AAKN;EAKI;;AAIJ;EAGE;EACA;EACA;EAEA;EACA;;;AAYF;EC/GA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;ADkGA;EC/GA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;ADkGA;EC/GA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;ADkGA;EC/GA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;ADkGA;EC/GA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;ADkGA;EC/GA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;ADkGA;EC/GA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;ADkGA;EC/GA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;AD4HA;EChHA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;ADmGA;EChHA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;ADmGA;EChHA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;ADmGA;EChHA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;ADmGA;EChHA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;ADmGA;EChHA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;ADmGA;EChHA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;ADmGA;EChHA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;AD+GF;EACE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EAEA,iBzB8QwC;;AyBpQxC;EACE;;AAGF;EACE;;;AAWJ;ECjJE;EACA;E7B8NI,oBALI;E6BvNR;;;ADkJF;ECrJE;EACA;E7B8NI,oBALI;E6BvNR;;;ACnEF;EVgBM,YUfJ;;AVmBI;EUpBN;IVqBQ;;;AUlBN;EACE;;;AAMF;EACE;;;AAIJ;EACE;EACA;EVDI,YUEJ;;AVEI;EULN;IVMQ;;;AUDN;EACE;EACA;EVNE,YUOF;;AVHE;EUAJ;IVCM;;;;AWpBR;AAAA;AAAA;AAAA;AAAA;AAAA;EAME;;;AAGF;EACE;;ACwBE;EACE;EACA,a7B6hBwB;E6B5hBxB,gB7B2hBwB;E6B1hBxB;EArCJ;EACA;EACA;EACA;;AA0DE;EACE;;;AD9CN;EAEE;EACA;EACA;EACA;EACA;E/BuQI,yBALI;E+BhQR;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EAGA;EACA;EACA;EACA;EACA;EACA;E/B0OI,WALI;E+BnOR;EACA;EACA;EACA;EACA;EACA;;AAIA;EACE;EACA;EACA;;;AAwBA;EACE;;AAEA;EACE;EACA;;;AAIJ;EACE;;AAEA;EACE;EACA;;;ApB1CJ;EoB4BA;IACE;;EAEA;IACE;IACA;;EAIJ;IACE;;EAEA;IACE;IACA;;;ApB1CJ;EoB4BA;IACE;;EAEA;IACE;IACA;;EAIJ;IACE;;EAEA;IACE;IACA;;;ApB1CJ;EoB4BA;IACE;;EAEA;IACE;IACA;;EAIJ;IACE;;EAEA;IACE;IACA;;;ApB1CJ;EoB4BA;IACE;;EAEA;IACE;IACA;;EAIJ;IACE;;EAEA;IACE;IACA;;;ApB1CJ;EoB4BA;IACE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ACA;IACA;IACA;IACA;IACA;If9NJ,YegOI;;EAGA;IACE;;EAGF;IACE;IACA;IACA;IACA;;;AxB5LR;EwBsIA;IAEI;IACA;;EAEA;IACE;;EAEA;IACE;;EAGF;IACE;IACA;;EAIJ;IACE;;EAGF;IACE;IACA;;EAGF;IACE;;EAGF;IAEE;IACA;IACA;IACA;IACA;IACA;IACA;IACA;IACA;If9NJ,YegOI;;EAGA;IACE;;EAGF;IACE;IACA;IACA;IACA;;;AxB5LR;EwBsIA;IAEI;IACA;;EAEA;IACE;;EAEA;IACE;;EAGF;IACE;IACA;;EAIJ;IACE;;EAGF;IACE;IACA;;EAGF;IACE;;EAGF;IAEE;IACA;IACA;IACA;IACA;IACA;IACA;IACA;IACA;If9NJ,YegOI;;EAGA;IACE;;EAGF;IACE;IACA;IACA;IACA;;;AxB5LR;EwBsIA;IAEI;IACA;;EAEA;IACE;;EAEA;IACE;;EAGF;IACE;IACA;;EAIJ;IACE;;EAGF;IACE;IACA;;EAGF;IACE;;EAGF;IAEE;IACA;IACA;IACA;IACA;IACA;IACA;IACA;IACA;If9NJ,YegOI;;EAGA;IACE;;EAGF;IACE;IACA;IACA;IACA;;;AxB5LR;EwBsIA;IAEI;IACA;;EAEA;IACE;;EAEA;IACE;;EAGF;IACE;IACA;;EAIJ;IACE;;EAGF;IACE;IACA;;EAGF;IACE;;EAGF;IAEE;IACA;IACA;IACA;IACA;IACA;IACA;IACA;IACA;If9NJ,YegOI;;EAGA;IACE;;EAGF;IACE;IACA;IACA;IACA;;;AAtDR;EAEI;EACA;;AAEA;EACE;;AAEA;EACE;;AAGF;EACE;EACA;;AAIJ;EACE;;AAGF;EACE;EACA;;AAGF;EACE;;AAGF;EAEE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;Ef9NJ,YegOI;;AAGA;EACE;;AAGF;EACE;EACA;EACA;EACA;;;AAiBZ;AAAA;EAGE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;AAME;EACE;;;ACzRN;EAEE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EAGA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;AAIA;EACE;EACA;;AAGF;EACE;EACA;;AAEA;EACE;;AAIF;EACE;;AAOJ;AAAA;EAEE;;;AAIJ;EAGE;EACA;EACA;;;AAGF;EACE;EACA;;;AAGF;EACE;EACA;EACA;;;AAGF;EACE;;;AAQA;EACE;;;AAQJ;EACE;EACA;EACA;EACA;EACA;;AAOF;EACE;EACA;EACA;EACA;;AAYF;EACE;EACA;EACA;EACA;;AAEA;EACE;EACA;;;AAIJ;EACE;EACA;;;AAIF;EACE;EACA;EACA;EACA;EACA;EACA;;;AAIF;AAAA;AAAA;EAGE;;;AAqBA;EACE;;AzB3HA;EyBuHJ;IAQI;IACA;;EAGA;IAEE;IACA;;EAEA;IACE;IACA;;;;ACrMR;EAEE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;AAIF;EACE;EACA;EACA;EACA;EACA;ErC4PI,WALI;EqCrPR;EACA;EACA;EACA;EAEA;EjB1BI,YiB2BJ;;AjBvBI;EiBUN;IjBTQ;;;AiBwBN;EACE;EACA;EACA;;AAEA;EACE;EACA;;AAKJ;EACE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EjBjDE,YiBkDF;;AjB9CE;EiBqCJ;IjBpCM;;;AiBgDN;EACE;;AAGF;EACE;EACA;EACA;;;AAIJ;EACE;;;AAGF;EACE;EACA;EACA;;AAUA;EACE;;AAmBJ;EACE;;;AASA;EACE;EACA;;AAGA;EAAgB;;AAChB;EAAe;;AAmBf;EACE;EACA;;;AC1JN;EAEE;EACA;EACA;EAEA;EACA;EACA;EACA;EACA;EAGA;EACA;EACA;EACA;EtC+QI,WALI;EsCxQR;EACA;;;AAMA;EACE;;AAEA;EACE;EACA;EACA;EACA;;AAIJ;EACE;;;ACrCJ;EAEE;EACA;EvC4RI,2BALI;EuCrRR;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EAGA;EjCpBA;EACA;;;AiCuBF;EACE;EACA;EACA;EvCgQI,WALI;EuCzPR;EACA;EACA;EACA;EnBpBI,YmBqBJ;;AnBjBI;EmBQN;InBPQ;;;AmBkBN;EACE;EACA;EAEA;EACA;;AAGF;EACE;EACA;EACA;EACA,SpC2uCgC;EoC1uChC;;AAGF;EAEE;EACA;ElBtDF,kBkBuDuB;EACrB;;AAGF;EAEE;EACA;EACA;EACA;;;AAKF;EACE,apC8sCgC;;AoClrCpC;EClGE;EACA;ExC0RI,2BALI;EwCnRR;;;ADmGF;ECtGE;EACA;ExC0RI,2BALI;EwCnRR;;;ACFF;EAEE;EACA;EzCuRI,sBALI;EyChRR;EACA;EACA;EAGA;EACA;EzC+QI,WALI;EyCxQR;EACA;EACA;EACA;EACA;EACA;;AAKA;EACE;;;AAKJ;EACE;EACA;;;AChCF;EAEE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EAGA;EACA;EACA;EACA;EACA;EACA;;;AAKF;EAEE;;;AAIF;EACE,atC2B4B;EsC1B5B;;;AAQF;EACE,evCs+C8B;;AuCn+C9B;EACE;EACA;EACA;EACA;EACA;;;AAQF;EACE;EACA;EACA;EACA;;;AAJF;EACE;EACA;EACA;EACA;;;AAJF;EACE;EACA;EACA;EACA;;;AAJF;EACE;EACA;EACA;EACA;;;AAJF;EACE;EACA;EACA;EACA;;;AAJF;EACE;EACA;EACA;EACA;;;AAJF;EACE;EACA;EACA;EACA;;;AAJF;EACE;EACA;EACA;EACA;;;AC5DF;EACE;IAAK,uBxCyhD2B;;;AwCphDpC;AAAA;EAGE;E3CkRI,yBALI;E2C3QR;EACA;EACA;EACA;EACA;EACA;EAGA;EACA;EACA;E3CsQI,WALI;E2C/PR;;;AAKF;EACE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EvBxBI,YuByBJ;;AvBrBI;EuBYN;IvBXQ;;;;AuBuBR;EtBAE;EsBEA;;;AAGF;EACE;;;AAGF;EACE;;;AAIA;EACE;;AAGE;EAJJ;IAKM;;;;AC3DR;EAEE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EAGA;EACA;EAGA;EACA;;;AAIF;EACE;EACA;;AAEA;EAEE;EACA;;;AASJ;EACE;EACA;EACA;;AAGA;EAEE;EACA;EACA;EACA;;AAGF;EACE;EACA;;;AAQJ;EACE;EACA;EACA;EACA;EACA;EACA;EACA;;AAUA;EAEE;EACA;EACA;;AAIF;EACE;EACA;EACA;EACA;;AAIF;EACE;;AAEA;EACE;EACA;;;AAaF;EACE;;AAaE;EACE;;AAGF;EACE;EACA;;AAEA;EACE;EACA;;;AjCtFR;EiC8DA;IACE;;EAaE;IACE;;EAGF;IACE;IACA;;EAEA;IACE;IACA;;;AjCtFR;EiC8DA;IACE;;EAaE;IACE;;EAGF;IACE;IACA;;EAEA;IACE;IACA;;;AjCtFR;EiC8DA;IACE;;EAaE;IACE;;EAGF;IACE;IACA;;EAEA;IACE;IACA;;;AjCtFR;EiC8DA;IACE;;EAaE;IACE;;EAGF;IACE;IACA;;EAEA;IACE;IACA;;;AjCtFR;EiC8DA;IACE;;EAaE;IACE;;EAGF;IACE;IACA;;EAEA;IACE;IACA;;;AAiBV;EACE;;AAEA;EACE;;;AAaJ;EACE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;AAVF;EACE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;AAVF;EACE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;AAVF;EACE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;AAVF;EACE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;AAVF;EACE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;AAVF;EACE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;AAVF;EACE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;;AC5LJ;EAEE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EAGA;EACA,O1CqpD2B;E0CppD3B,Q1CopD2B;E0CnpD3B;EACA;EACA;EACA;EAEA;;AAGA;EACE;EACA;EACA;;AAGF;EACE;EACA;EACA;;AAGF;EAEE;EACA;EACA;;;AAQJ;EAHE;;;AASE;EATF;;;ACjDF;EAEE;EACA;EACA;EACA;EACA;E9CyRI,sBALI;E8ClRR;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EAGA;EACA;E9C2QI,WALI;E8CpQR;EACA;EACA;EACA;EACA;EACA;;AAGA;EACE;;AAGF;EACE;;;AAIJ;EACE;EAEA;EACA;EACA;EACA;EACA;;AAEA;EACE;;;AAIJ;EACE;EACA;EACA;EACA;EACA;EACA;EACA;;AAGA;EACE;EACA;;;AAIJ;EACE;EACA;;;AC9DF;EAEE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EAGA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EAGA;;;AAOF;EACE;EACA;EACA;EAEA;;AAGA;E3B5CI,Y2B6CF;EACA,W5Ck8CgC;;AiB5+C9B;E2BwCJ;I3BvCM;;;A2B2CN;EACE,W5Cg8CgC;;A4C57ClC;EACE,W5C67CgC;;;A4Cz7CpC;EACE;;AAEA;EACE;EACA;;AAGF;EACE;;;AAIJ;EACE;EACA;EACA;;;AAIF;EACE;EACA;EACA;EACA;EAEA;EACA;EACA;EACA;EACA;EAIA;;;AAIF;EAEE;EACA;EACA;EClHA;EACA;EACA;EACA,SDkH0B;ECjH1B;EACA;EACA,kBD+G4D;;AC5G5D;EAAS;;AACT;EAAS,SD2GiF;;;AAK5F;EACE;EACA;EACA;EACA;EACA;;AAGA;EACE;EACA;;;AAKJ;EACE;EACA;;;AAKF;EACE;EAGA;EACA;;;AAIF;EACE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;AAMA;EACE;;;ApC3GA;EoCiHF;IACE;IACA;;EAIF;IACE;IACA;IACA;;EAGF;IACE;;;ApC9HA;EoCmIF;AAAA;IAEE;;;ApCrIA;EoC0IF;IACE;;;AAUA;EACE;EACA;EACA;EACA;;AAEA;EACE;EACA;;AASF;EACE;;;ApC1JJ;EoCwIA;IACE;IACA;IACA;IACA;;EAEA;IACE;IACA;;EASF;IACE;;;ApC1JJ;EoCwIA;IACE;IACA;IACA;IACA;;EAEA;IACE;IACA;;EASF;IACE;;;ApC1JJ;EoCwIA;IACE;IACA;IACA;IACA;;EAEA;IACE;IACA;;EASF;IACE;;;ApC1JJ;EoCwIA;IACE;IACA;IACA;IACA;;EAEA;IACE;IACA;;EASF;IACE;;;ApC1JJ;EoCwIA;IACE;IACA;IACA;IACA;;EAEA;IACE;IACA;;EASF;IACE;;;AErOR;EAEE;EACA;EACA;EACA;EACA;EjDwRI,wBALI;EiDjRR;EACA;EACA;EACA;EACA;EACA;EAGA;EACA;EACA;EClBA,a/C+lB4B;E+C7lB5B;EACA,a9CsD4B;E8CrD5B,a/C+mB4B;E+C9mB5B;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;ElDgRI,WALI;EiDhQR;EACA;;AAEA;EAAS;;AAET;EACE;EACA;EACA;;AAEA;EACE;EACA;EACA;EACA;;;AAKN;EACE;;AAEA;EACE;EACA;EACA;;;AAIJ;AACA;EACE;EACA;EACA;;AAEA;EACE;EACA;EACA;;;AAIJ;AAEA;EACE;;AAEA;EACE;EACA;EACA;;;AAIJ;AACA;EACE;EACA;EACA;;AAEA;EACE;EACA;EACA;;;AAIJ;AAkBA;EACE;EACA;EACA;EACA;EACA;;;AEpHF;EAEE;EACA;EnD4RI,wBALI;EmDrRR;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EnDmRI,+BALI;EmD5QR;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EAGA;EACA;EACA;EDzBA,a/C+lB4B;E+C7lB5B;EACA,a9CsD4B;E8CrD5B,a/C+mB4B;E+C9mB5B;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;ElDgRI,WALI;EmD1PR;EACA;EACA;EACA;;AAIA;EACE;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;IACE;IACA;IACA;IACA;IACA;;EAGF;IACE;IACA;IACA;IACA;IACA;;EAGF;IACE;IACA;IACA;IACA;IACA;IACA;IACA;;EAGF;IACE;IACA;IACA;IACA;IACA;IACA;;EAGF;IAEE;;EAGF;IAGE;;;A5C5BJ;E4C/BF;IAiEM;IACA;IACA;;EAEA;IACE;;EAGF;IACE;IACA;IACA;IACA;IAEA;;;;A5CnCN;E4C5CF;IAEI;IACA;IACA;IACA;IACA;IACA;IACA;IACA;IACA;IACA;IACA;InC5BA,YmC8BA;;;AnC1BA;EmCYJ;InCXM;;;ATuDJ;E4C5BE;IACE;IACA;IACA;IACA;IACA;;EAGF;IACE;IACA;IACA;IACA;IACA;;EAGF;IACE;IACA;IACA;IACA;IACA;IACA;IACA;;EAGF;IACE;IACA;IACA;IACA;IACA;IACA;;EAGF;IAEE;;EAGF;IAGE;;;A5C5BJ;E4C/BF;IAiEM;IACA;IACA;;EAEA;IACE;;EAGF;IACE;IACA;IACA;IACA;IAEA;;;;A5CnCN;E4C5CF;IAEI;IACA;IACA;IACA;IACA;IACA;IACA;IACA;IACA;IACA;IACA;InC5BA,YmC8BA;;;AnC1BA;EmCYJ;InCXM;;;ATuDJ;E4C5BE;IACE;IACA;IACA;IACA;IACA;;EAGF;IACE;IACA;IACA;IACA;IACA;;EAGF;IACE;IACA;IACA;IACA;IACA;IACA;IACA;;EAGF;IACE;IACA;IACA;IACA;IACA;IACA;;EAGF;IAEE;;EAGF;IAGE;;;A5C5BJ;E4C/BF;IAiEM;IACA;IACA;;EAEA;IACE;;EAGF;IACE;IACA;IACA;IACA;IAEA;;;;A5CnCN;E4C5CF;IAEI;IACA;IACA;IACA;IACA;IACA;IACA;IACA;IACA;IACA;IACA;InC5BA,YmC8BA;;;AnC1BA;EmCYJ;InCXM;;;ATuDJ;E4C5BE;IACE;IACA;IACA;IACA;IACA;;EAGF;IACE;IACA;IACA;IACA;IACA;;EAGF;IACE;IACA;IACA;IACA;IACA;IACA;IACA;;EAGF;IACE;IACA;IACA;IACA;IACA;IACA;;EAGF;IAEE;;EAGF;IAGE;;;A5C5BJ;E4C/BF;IAiEM;IACA;IACA;;EAEA;IACE;;EAGF;IACE;IACA;IACA;IACA;IAEA;;;;AA/ER;EAEI;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EnC5BA,YmC8BA;;AnC1BA;EmCYJ;InCXM;;;AmC2BF;EACE;EACA;EACA;EACA;EACA;;AAGF;EACE;EACA;EACA;EACA;EACA;;AAGF;EACE;EACA;EACA;EACA;EACA;EACA;EACA;;AAGF;EACE;EACA;EACA;EACA;EACA;EACA;;AAGF;EAEE;;AAGF;EAGE;;;AA2BR;EPpHE;EACA;EACA;EACA,S7C0mCkC;E6CzmClC;EACA;EACA,kB5CWS;;A4CRT;EAAS;;AACT;EAAS,S7Cm+CyB;;;AoDr3CpC;EACE;EACA;EACA;;AAEA;EACE;EACA;;;AAIJ;EACE;EACA;;;AAGF;EACE;EACA;EACA;;;AC7IF;EACE;EACA;EACA;EACA;EACA;EACA,SrDgzCkC;;AqD9yClC;EACE;EACA;;;AAKJ;EACE;;;AAGF;EACE;;;AAGF;EACE;;;AAKA;EACE;;;AAIJ;EACE;IACE,SrDmxCgC;;;AqD/wCpC;EACE;EACA;EACA;;;AAGF;EACE;IACE;;;AH9CF;EACE;EACA;EACA;;;AIHF;EACE;EACA;;;AAFF;EACE;EACA;;;AAFF;EACE;EACA;;;AAFF;EACE;EACA;;;AAFF;EACE;EACA;;;AAFF;EACE;EACA;;;AAFF;EACE;EACA;;;AAFF;EACE;EACA;;;ACFF;EACE;EACA;;AAGE;EAGE;EACA;;;AATN;EACE;EACA;;AAGE;EAGE;EACA;;;AATN;EACE;EACA;;AAGE;EAGE;EACA;;;AATN;EACE;EACA;;AAGE;EAGE;EACA;;;AATN;EACE;EACA;;AAGE;EAGE;EACA;;;AATN;EACE;EACA;;AAGE;EAGE;EACA;;;AATN;EACE;EACA;;AAGE;EAGE;EACA;;;AATN;EACE;EACA;;AAGE;EAGE;EACA;;;AAOR;EACE;EACA;;AAGE;EAEE;EACA;;;AC1BN;EACE;EAEA;;;ACHF;EACE;EACA,KzD6c4B;EyD5c5B;EACA;EACA,uBzD2c4B;EyD1c5B;;AAEA;EACE;EACA,OzDuc0B;EyDtc1B,QzDsc0B;EyDrc1B;ExCIE,YwCHF;;AxCOE;EwCZJ;IxCaM;;;;AwCDJ;EACE;;;ACnBN;EACE;EACA;;AAEA;EACE;EACA;EACA;;AAGF;EACE;EACA;EACA;EACA;EACA;;;AAKF;EACE;;;AADF;EACE;;;AADF;EACE;;;AADF;EACE;;;ACrBJ;EACE;EACA;EACA;EACA;EACA,S3DumCkC;;;A2DpmCpC;EACE;EACA;EACA;EACA;EACA,S3D+lCkC;;;A2DvlChC;EACE;EACA;EACA,S3DmlC8B;;;A2DhlChC;EACE;EACA;EACA,S3D6kC8B;;;AQ9iChC;EmDxCA;IACE;IACA;IACA,S3DmlC8B;;E2DhlChC;IACE;IACA;IACA,S3D6kC8B;;;AQ9iChC;EmDxCA;IACE;IACA;IACA,S3DmlC8B;;E2DhlChC;IACE;IACA;IACA,S3D6kC8B;;;AQ9iChC;EmDxCA;IACE;IACA;IACA,S3DmlC8B;;E2DhlChC;IACE;IACA;IACA,S3D6kC8B;;;AQ9iChC;EmDxCA;IACE;IACA;IACA,S3DmlC8B;;E2DhlChC;IACE;IACA;IACA,S3D6kC8B;;;AQ9iChC;EmDxCA;IACE;IACA;IACA,S3DmlC8B;;E2DhlChC;IACE;IACA;IACA,S3D6kC8B;;;A4D5mCpC;EACE;EACA;EACA;EACA;;;AAGF;EACE;EACA;EACA;EACA;;;ACRF;AAAA;ECIE;EACA;EACA;EACA;EACA;EACA;EACA;EACA;;AAGA;AAAA;EACE;;;ACdF;EACE;EACA;EACA;EACA;EACA;EACA,S/DgcsC;E+D/btC;;;ACRJ;ECAE;EACA;EACA;;;ACNF;EACE;EACA;EACA,OlEisB4B;EkEhsB5B;EACA;EACA,SlE2rB4B;;;AmE/nBtB;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAjBJ;EACE;;;AADF;EACE;;;AADF;EACE;;;AADF;EACE;;;AADF;EACE;;;AADF;EACE;;;AADF;EACE;;;AADF;EACE;;;AASF;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAjBJ;EACE;;;AADF;EACE;;;AADF;EACE;;;AADF;EACE;;;AADF;EACE;;;AASF;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AArBJ;AAcA;EAOI;EAAA;;;AAmBJ;AA1BA;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAjBJ;EACE;;;AADF;EACE;;;AADF;EACE;;;AADF;EACE;;;AASF;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAjBJ;EACE;;;AAIA;EACE;;;AANJ;EACE;;;AAIA;EACE;;;AANJ;EACE;;;AAIA;EACE;;;AANJ;EACE;;;AAIA;EACE;;;AANJ;EACE;;;AAIA;EACE;;;AAIJ;EAOI;;;AAKF;EAOI;;;AAnBN;EAOI;;;AAKF;EAOI;;;AAnBN;EAOI;;;AAKF;EAOI;;;AAnBN;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAjBJ;EACE;;;AAIA;EACE;;;AANJ;EACE;;;AAIA;EACE;;;AANJ;EACE;;;AAIA;EACE;;;AANJ;EACE;;;AAIA;EACE;;;AANJ;EACE;;;AAIA;EACE;;;AANJ;EACE;;;AAIA;EACE;;;AAIJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAPJ;EAIQ;EAGJ;;;AAjBJ;EACE;;;AADF;EACE;;;AADF;EACE;;;AADF;EACE;;;AADF;EACE;;;AASF;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;EAAA;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;AAPJ;EAOI;;;A3DVR;E2DGI;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;;A3DVR;E2DGI;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;;A3DVR;E2DGI;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;;A3DVR;E2DGI;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;;A3DVR;E2DGI;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;IAAA;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;;ACtDZ;ED+CQ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;;ACnCZ;ED4BQ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;EAPJ;IAOI;;;AxE5DZ;EACE,WKylB4B;ELxlB5B;EACA;;AAGE;EACE;EACA;;AAIJ;EACE;;;AAIJ;EACE;;AAEA;EACE;;AAGF;EACE;;;AAIJ;EACE;;;AAKF;EACE,WKsjB4B;ELrjB5B;;AAEA;EACE;;AAIA;EAIE,OMpDK;;;ANyDX;EACE,OMpDS;ENqDT,cMrDS;;ANuDT;EAGE,OMhEO;ENiEP,kBM7DO;EN8DP,cM9DO;;ANiET;EACE;;;AAIJ;EACE;;;AAGF;EACE;;;AAIA;EACE;;;AAMJ;EACE;;;AAGF;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;EAME;EACA;;;AAGF;EACE;;;AAKF;EACE,WK+e4B;EL9e5B;;;AAIA;AAAA;EAEE;;AAIA;AAAA;EAEE;;;AAQJ;EACE,OM9HO;;ANgIP;EACE,OKuSsB;;ALlSxB;AAAA;AAAA;AAAA;AAAA;EAKE,OK6RsB;;AL1RxB;AAAA;EAEE;;AAIJ;EACE,kBKmRwB;;ALhR1B;EACE,kBKwyB8B;;ALryBhC;EACE,kBM9JO;;ANiKT;EACE,kBMhKO;;ANmKT;EACE,OKmQwB;;;AL7P5B;EACE,WK2a4B;EL1a5B;;;AAKF;EACE;;AAEA;EACE;;AAGF;EAEE,OM1LO;;;ANkMT;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;AAAA;EAYE%22,%22file%22:%22app.output.css%22%7D */
";s:6:"digest";s:32:"700d8cc518612d81581452e1cf735da4";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:1:{i:0;s:44:"C:\xampp\htdocs\rats/var/sass/app.output.css";}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:15:"styles/app.scss";}