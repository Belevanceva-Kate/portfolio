<style>

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        font-family: DejaVu Sans, sans-serif;
        margin: 40px 60px;
    }

    .section {
        border-bottom: 2px solid #ececec;
    }

    .section__container {
        font-size: 0;
    }

    .section__left {
        width: 25%;
        font-size: 14px;
        display: inline-block;
        text-align: right;
        vertical-align: top;
        padding: 20px 20px 20px 0;
    }

    .section__right {
        width: 75%;
        font-size: 14px;
        display: inline-block;
        vertical-align: top;
        padding: 20px 0 20px 20px;
        /*border-left: 1px solid #ececec;*/
    }

    /*.section__content {*/
    /*    border-left: 1px solid #ececec;*/
    /*}*/

    .header__main {
        text-align: center;
        font-size: 14px;
    }

    .main__title {
        font-size: 20px;
        font-weight: 700;
        line-height: 1;
        color: #F8BB10;
        text-transform: uppercase;
    }

    .main__subtitle {
        font-size: 20px;
        font-weight: 300;
        line-height: 1;
        text-transform: lowercase;
    }

    .contacts__list {
        font-size: 0;
        /*display: flex;*/
        /*justify-content: space-between;*/
    }

    .contacts__item {
        width: 30%;
        font-size: 12px;
        list-style-type: none;
        display: inline-block;
    }

    .contacts__item:not(:last-of-type) {
        margin-right: 5.5%;
    }










/*    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        font-family: DejaVu Sans, sans-serif;
        margin: 40px 60px;
    }

    .section__container {
        font-size: 0;
        !*display: flex;*!
    }

    .section__left {
        width: 25%;
        font-size: 14px;
        display: inline-block;
        text-align: right;
        vertical-align: top;
    }

    .section__right {
        width: 75%;
        font-size: 14px;
        display: inline-block;
        vertical-align: top;
    }

    .section__content {
        width: 100%;
        padding: 40px;
        vertical-align: top;
    }

    .section__title {
        font-size: 1.143rem;
        font-weight: 600;
        color: #727272;
        text-transform: uppercase;
    }

    .main__title {
        font-size: 20px;
        font-weight: 700;
        line-height: 1;
        color: #F8BB10;
        text-transform: uppercase;
    }

    .main__subtitle {
        font-size: 20px;
        font-weight: 300;
        line-height: 1;
        text-transform: lowercase;
        !*margin-bottom: 5px;*!
    }

    .header__info {
        margin-top: 15px;
        text-align: center;
    }

    .header .main__title,
    .header .main__subtitle{
        text-align: center;
    }

    .timeline {
        border-left: 2px solid #ececec;
        padding-left: 25px;
    }

    .contacts {
        width: 100%;
    }

    .contacts__list {
        !*display: flex;*!
        !*justify-content: space-between;*!
    }

    .contacts__item {
        display: block;
        list-style-type: none;
    }

    .contacts__title {
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 15px;
        color: #727272;
    }

    .contacts__link {
        display: inline-block;
        font-size: 1rem;
        color: #000;
    }*/

    /*.header .contacts {*/
    /*    position: absolute;*/
    /*    bottom: 0;*/
    /*    padding-top: 25px;*/
    /*    border-top: 2px solid #ececec;*/
    /*}*/

/*    .contact .contacts {
        padding-bottom: 50px;
        border-bottom: 2px solid #ececec;
    }

    .contact__block {
        position: relative;
    }

    .contact .socials {
        position: absolute;
        right: 0;
        bottom: 0;
    }*/


    /*.profile .section__right .section__content {*/
    /*    !*font-size: 1.214rem;*!*/
    /*}*/

    /*.education__item {*/
    /*    list-style-type: none;*/
    /*    position: relative;*/
    /*}*/

    /*.education__item:not(:last-of-type) {*/
    /*    margin-bottom: 30px;*/
    /*}*/

    /*.education__date {*/
    /*    margin-bottom: 10px;*/
    /*    opacity: 0.6;*/
    /*    font-size: 0.85rem;*/
    /*}*/

    /*.education__name {*/
    /*    margin-bottom: 10px;*/
    /*}*/

    /*.education__area {*/
    /*    margin-bottom: 10px;*/
    /*    color: #727272;*/
    /*}*/

    /*.education__info {*/
    /*    margin-bottom: 10px;*/
    /*    color: #727272;*/
    /*}*/










    /*

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    html {
        font-size: 14px;
    }

    body {
        font: 400 1rem/1.2 "Lato", Arial, sans-serif;
        background-color: #fff;
        color: #939393;
    }

    a,
    button,
    input {
        outline: none;
    }

    a {
        text-decoration: none;
        outline: none;
    }

    .container {
        max-width: 1276px;
        margin: 0 auto;
    }

    .section__container {
        display: flex;
    }

    .section__left {
        width: 30%;
        text-align: right;
    }

    .section__right {
        width: 70%;
    }

    .section__content {
        width: 100%;
        padding: 50px;
    }

    .section__title {
        font-size: 1.143rem;
        font-weight: 600;
        color: #727272;
        text-transform: uppercase;
    }

    .timeline {
        border-left: 2px solid #ececec;
        padding-left: 25px;
    }

    body.dark-theme {
        background-color: #2d2e2e;
        color: #979899;
    }

    body.dark-theme .section__title {
        color: #a4a5a6;
    }

    body.dark-theme .timeline {
        border-left-color: #404242;
    }

    .header {
        !*height: 100vh;*!
    }

    .header__image {
        width: 200px;
        margin: 0 auto;
        border-radius: 50%;
        overflow: hidden;
        position: relative;
    }

    .header__image:before {
        content: "";
        display: block;
        padding-bottom: 100%;
    }

    .header__image img {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .header__info {
        margin-top: 20px;
        font-size: 1.5rem;
        font-weight: 300;
        line-height: 1.3;
    }

    .header__content {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
    }

    .header__main {
        width: 100%;
        position: relative;
    }

    .header .section__left,
    .header .section__right {
        display: flex;
        align-items: center;
    }

    .header .section__container {
        height: 100%;
    }

    .header .section__content {
        height: 100%;
        display: flex;
        align-items: center;
    }

    body.dark-theme .header .contacts {
        border-color: #404242;
    }

    .profile .section__right .section__content {
        font-size: 1.214rem;
    }

    .education__item {
        list-style-type: none;
        position: relative;
    }

    .education__item:not(:last-of-type) {
        margin-bottom: 30px;
    }

    .education__item:before {
        content: "";
        position: absolute;
        left: -41px;
        top: 0;
        width: 10px;
        height: 10px;
        background-color: #F8BB10;
        border-radius: 50%;
        transform: translate(0, -9px);
    }

    .education__date {
        margin-bottom: 10px;
        opacity: 0.6;
        font-size: 0.85rem;
    }

    .education__name {
        margin-bottom: 10px;
    }

    .education__area {
        margin-bottom: 10px;
        color: #727272;
    }

    .education__info {
        margin-bottom: 10px;
        color: #727272;
    }

    .education.section:nth-of-type(odd) .education__item:before {
        border: 10px solid #ffffff;
    }

    .education.section:nth-of-type(even) .education__item:before {
        border: 10px solid #fbfbfb;
    }

    body.dark-theme .education__info,
    body.dark-theme .education__area {
        color: #a4a5a6;
    }

    body.dark-theme .education.section:nth-of-type(odd) .education__item:before {
        background-color: #e0a80d;
        border: 10px solid #2d2e2e;
    }

    body.dark-theme .education.section:nth-of-type(even) .education__item:before {
        background-color: #e0a80d;
        border: 10px solid #2b2c2c;
    }

    .experience__item {
        display: flex;
        position: relative;
    }

    .experience__item:not(:last-of-type) {
        margin-bottom: 30px;
    }

    .experience__item:before {
        content: "";
        position: absolute;
        left: -41px;
        top: 0;
        width: 10px;
        height: 10px;
        background-color: #F8BB10;
        border-radius: 50%;
        transform: translate(0, -9px);
    }

    .experience__brief {
        width: 30%;
    }

    .experience__description {
        width: 70%;
        padding-left: 15px;
        line-height: 1.7;
    }

    .experience__date {
        margin-bottom: 10px;
        opacity: 0.6;
        font-size: 0.85rem;
    }

    .experience__company {
        margin-bottom: 10px;
    }

    .experience__position {
        margin-bottom: 10px;
    }

    .experience.section:nth-of-type(odd) .experience__item:before {
        border: 10px solid #ffffff;
    }

    .experience.section:nth-of-type(even) .experience__item:before {
        border: 10px solid #fbfbfb;
    }

    body.dark-theme .experience.section:nth-of-type(odd) .experience__item:before {
        background-color: #e0a80d;
        border: 10px solid #2d2e2e;
    }

    body.dark-theme .experience.section:nth-of-type(even) .experience__item:before {
        background-color: #e0a80d;
        border: 10px solid #2b2c2c;
    }

    .expertise__list {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: -30px;
    }

    .expertise__item {
        display: flex;
        width: calc(50% - 10px);
        margin-bottom: 30px;
        line-height: 1.7;
    }

    .expertise__item:nth-of-type(even) {
        margin-left: 20px;
    }

    .expertise__counter {
        width: 40px;
        font-size: 1.143rem;
        font-weight: 700;
        color: #F8BB10;
    }

    .expertise__content {
        width: calc(100% - 40px);
    }

    .expertise__title {
        margin-bottom: 10px;
    }

    .skills__item {
        list-style-type: none;
    }

    .skills__item:before {
        content: "";
        display: inline-block;
        width: 5px;
        height: 5px;
        margin-right: 10px;
        border-radius: 50%;
        background-color: #F8BB10;
        vertical-align: middle;
    }

    body.dark-theme .expertise__counter {
        color: #e0a80d;
    }

    body.dark-theme .skills__item:before {
        background-color: #e0a80d;
    }

    .portfolio__list {
        display: flex;
        flex-wrap: wrap;
    }

    .portfolio__item {
        display: flex;
        width: calc(50% - 10px);
        margin-bottom: 30px;
        list-style-type: none;
    }

    .portfolio__item:nth-of-type(even) {
        margin-left: 20px;
    }

    .portfolio__icon {
        width: 40px;
    }

    .portfolio__icon svg {
        width: 20px;
        height: 20px;
    }

    .portfolio__icon svg path {
        fill: #F8BB10;
    }

    .portfolio__content {
        width: calc(100% - 40px);
    }

    .portfolio__title {
        transition: color 0.2s ease-in-out;
    }

    .portfolio__title:hover,
    .portfolio__title:focus,
    .portfolio__title:active {
        color: #F8BB10;
    }

    .portfolio__excerpt {
        margin-top: 10px;
    }

    body.dark-theme .portfolio__icon svg path {
        fill: #e0a80d;
    }

    body.dark-theme .portfolio__title:hover,
    body.dark-theme .portfolio__title:focus,
    body.dark-theme .portfolio__title:active {
        color: #e0a80d;
    }

    .contact .contacts {
        padding-bottom: 50px;
        border-bottom: 2px solid #ececec;
    }

    .contact__block {
        position: relative;
    }

    .contact .socials {
        position: absolute;
        right: 0;
        bottom: 0;
    }

    .background {
        position: absolute;
        height: auto;
        width: 50%;
        z-index: -1;
    }

    .background--left:nth-of-type(even) {
        background-color: #f8f8f8;
    }

    .background--left:nth-of-type(odd) {
        background-color: #fbfbfb;
    }

    .background--right:nth-of-type(even) {
        background-color: #fcfcfc;
    }

    .background--right:nth-of-type(odd) {
        background-color: #ffffff;
    }

    .section:nth-of-type(odd) .section__left {
        background-color: #fcfcfc;
    }

    .section:nth-of-type(odd) .section__right {
        background-color: #ffffff;
    }

    .section:nth-of-type(even) .section__left {
        background-color: #f8f8f8;
    }

    .section:nth-of-type(even) .section__right {
        background-color: #fbfbfb;
    }

    body.dark-theme .background--left:nth-of-type(even) {
        background-color: #292a2a;
    }

    body.dark-theme .background--left:nth-of-type(odd) {
        background-color: #2b2c2c;
    }

    body.dark-theme .background--right:nth-of-type(even) {
        background-color: #2b2c2c;
    }

    body.dark-theme .background--right:nth-of-type(odd) {
        background-color: #2d2e2e;
    }

    body.dark-theme .section:nth-of-type(even) .section__left {
        background-color: #292a2a;
    }

    body.dark-theme .section:nth-of-type(even) .section__right {
        background-color: #2b2c2c;
    }

    body.dark-theme .section:nth-of-type(odd) .section__left {
        background-color: #2b2c2c;
    }

    body.dark-theme .section:nth-of-type(odd) .section__right {
        background-color: #2d2e2e;
    }

    .main__title {
        font-size: 4.857rem;
        font-weight: 700;
        line-height: 1;
        color: #F8BB10;
        text-transform: uppercase;
    }

    .main__subtitle {
        font-size: 4.857rem;
        font-weight: 300;
        line-height: 1;
        text-transform: lowercase;
        margin-bottom: 5px;
    }

    .contact .main__subtitle {
        margin-top: 50px;
        font-size: 3.786rem;
    }

    .contact .main__title {
        font-size: 3.786rem;
    }

    body.dark-theme .main__title {
        color: #e0a80d;
    }

    .socials__item {
        display: inline-block;
    }

    .socials__item:not(:last-of-type) {
        margin-right: 10px;
    }

    .socials__link {
        display: inline-block;
        padding: 6px;
        background-color: #ededed;
        border: 2px solid #ededed;
        border-radius: 3px;
        transition: background-color 0.2s ease-in-out;
    }

    .socials__link:hover,
    .socials__link:focus,
    .socials__link:active {
        background-color: transparent;
    }

    .socials__link:hover svg path,
    .socials__link:focus svg path,
    .socials__link:active svg path {
        fill: #F8BB10;
    }

    .socials__link svg {
        display: block;
        width: 22px;
        height: 22px;
    }

    .socials__link svg path {
        fill: #c6c6c6;
    }

    .header__content {
        position: relative;
    }

    .header__content .socials {
        position: absolute;
        right: 0;
        bottom: 0;
    }

    body.dark-theme .socials__link {
        background-color: #3f4040;
        border-color: #3f4040;
    }

    body.dark-theme .socials__link:hover,
    body.dark-theme .socials__link:focus,
    body.dark-theme .socials__link:active {
        background-color: transparent;
    }

    body.dark-theme .socials__link:hover svg path,
    body.dark-theme .socials__link:focus svg path,
    body.dark-theme .socials__link:active svg path {
        fill: #e0a80d;
    }

    body.dark-theme .socials__link svg path {
        fill: #717273;
    }

    .contacts {
        width: 100%;
    }

    .contacts__list {
        display: flex;
        justify-content: space-between;
    }

    .contacts__item {
        display: block;
    }

    .contacts__title {
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 15px;
        color: #727272;
    }

    .contacts__link {
        font-size: 1rem;
        color: #939393;
        transition: color 0.2s ease-in-out;
    }

    .contacts__link:hover,
    .contacts__link:focus,
    .contacts__link:active {
        color: #F8BB10;
    }

    .header .contacts {
        position: absolute;
        bottom: 0;
        padding-top: 25px;
        border-top: 2px solid #ececec;
    }

    body.dark-theme .contacts__title {
        color: #a4a5a6;
    }

    body.dark-theme .contacts__link {
        color: #979899;
    }

    body.dark-theme .contacts__link:hover,
    body.dark-theme .contacts__link:focus,
    body.dark-theme .contacts__link:active {
        color: #e0a80d;
    }

    body.dark-theme .contact .contacts {
        border-bottom-color: #404242;
    }

*/










    /*@font-face {*/
    /*    font-family: 'Lato';*/
    /*    src: url('/fonts/Lato/latoregular.woff2') format('woff2'),*/
    /*    url('/fonts/Lato/latoregular.woff') format('woff'),*/
    /*    url('/fonts/Lato/latoregular.ttf') format('truetype');*/
    /*    font-weight: 400;*/
    /*    font-style: normal;*/
    /*}*/

    /*body { font-family: 'Lato', sans-serif; }*/

</style>
