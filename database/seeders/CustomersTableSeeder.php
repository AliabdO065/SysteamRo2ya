<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        // DB::table('customers')->insert([
        //     [
        //         'name' => 'intro',
        //         'content' => 'name=#=إنجاز للبرمحيات#x#header=#=شركة إنجاز لتطوير البرمجيات#x#wordheader=#=إنجاز للبرمجيات هي وكالة تعتمد على النتائج وتقوم بتصميم أفضل الاستراتيجيات خصيصًا لمساعدتك في تحقيق أهدافك. نحن نجمع بين الإبداع والتكنولوجيا لبناء مواقع الويب واستراتيجيات التطبيقات#x#img=#=images\customers\a041c920-eaa4-4930-a272-b92ee1a77a31background.png#x#imgl=#=images\customers\320f9d8f-60ab-462d-930d-232464ab4195logo.jpeg',
        //     ],
        //     [
        //         'name' => 'about',
        //         'content' => 'header1=#=من نحن#x#wordheader1=#=إنجاز للبرمجيات هي وكالة تعتمد على النتائج وتقوم بتصميم أفضل الاستراتيجيات خصيصًا لمساعدتك في تحقيق أهدافك. نحن نجمع بين الإبداع والتكنولوجيا لبناء مواقع الويب واستراتيجيات التطبيقات لجعل أعمالك تزدهر في سوق الإنترنت التنافسي. اليوم. في حين أن فريقنا هي مجموعة تقدم كافة الخدمات، فإننا نقدم خدمات داخلية، مثل تصميم وتطوير مواقع الويب سريعة الاستجابة، والتجارة الإلكترونية عبر الأجهزة المحمولة، والتصميم والطباعة وبوابة الويب والأدلة، وتطوير الأجهزة المحمولة، والتطبيقات.#x#header2=#=نهجنا#x#wordheader2=#=نحن لسنا شركة تصميم وتطوير الويب النموذجية الخاصة بك نحن نستخدم التكنولوجيا المبتكرة التي تعزز تجربة المستخدمين وتمكنك من جذب العملاء، والاحتفاظ بهم. مهمتنا بسيطة ... لبناء مواقع ويب جذابة وبديهية من شأنها أن تزيد عائد استثمارك إلى أقصى حد. نحن نؤمن بأن كل شركة، سواء كانت صغيرة أو كبيرة، يجب أن تمتلك الأدوات المناسبة لتحقيق النجاح. ولذلك، فإننا نهدف باستمرار إلى إنشاء حلول ويب متميزة بناءً على متطلباتك الدقيقة وميزانيتك.#x#header3=#=جودتنا و إبداعنا#x#wordheader3=#=إذا كانت هناك صفة واحدة تلخص شركة إنجاز للبرمجيات، فهي قدرتنا على التسليم في الوقت المحدد. ونستخدم أفضل أدوات التخطيط والبرمجة و ننجز المهمة دائمًا دون المساس بقلة الجودة أو الإبداع.#x#img1=#=images\customers\718ed31f-fc69-4036-895c-58956783db17coding-1.jpg#x#img2=#=images\customers\d29c8d6a-946c-46dd-9e10-28d508e79660coding-2.jpg#x#img3=#=images\customers\8d67ea38-f6a7-4860-aaed-375f3059e740coding-3.jpg#x#img4=#=images\customers\f7587ae0-bb04-4fc0-ba79-dd01815eeb7bcoding-4.jpg#x#img5=#=images\customers\39e9b0e1-45aa-4e35-a28f-97e569ddb478coding5.jpg',
        //     ],
        //     [
        //         'name' => 'service',
        //         'content' => 'header=#=برمجة المواقع ,وتطبيقات الهاتف#x#wordheader=#=خدمات تصميم مخصصة تتناسب مع هوية علامتك التجارية الفريدة.، يتم إنشاء جميع تصميماتنا مع التركيز على المستخدمين؛ من خلال رحلات محددة وعبارات تحث المستخدم على اتخاذ إجراء للحصول على تجربة مستخدم محسنة.#x#img1=#=images\customers\4e3d9cbf-a16f-444f-bfd5-98c96cdfd703oneimg.jpg#x#img2=#=images\customers\e9798de3-dc0a-4577-aad7-5b2078012a14slider-3.jpg#x#img3=#=images\customers\01cb5ed2-5ee2-4d6e-a206-1daf40012d46slider-1.jpg#x#img4=#=images\customers\7873f683-723b-4a68-ab44-f808fcc2fc62slider-2.jpg#x#img5=#=images\customers\f6992877-1351-4d81-bf46-d5cf35abe8c9slider-4.jpg',
        //     ],
        //     [
        //         'name' => 'excellence',
        //         'content' => 'header1=#=التصميم#x#wordheader1=#=خدمات تصميم مخصصة تتناسب مع هوية علامتك التجارية الفريدة.، يتم إنشاء جميع تصميماتنا مع التركيز على المستخدمين؛ من خلال رحلات محددة وعبارات تحث المستخدم على اتخاذ إجراء للحصول على تجربة مستخدم محسنة.#x#header2=#=ابتكار#x#wordheader2=#=تتمتع فرقنا الإبداعية بالمزيج الصحيح من التفكير الجديد والخبرة الصناعية لإحداث تأثير حقيقي على عملك. في عالم اليوم الغني بوسائل الإعلام، تحتاج إلى التفكير بشكل كبير والتصرف بشكل مختلف لجذب انتباه الناس.#x#img1=#=images\customers\9e1eec89-2724-4d67-afb0-e44e2dd56876img-1.jpg#x#img2=#=images\customers\86bf833b-87ff-4ac3-89b5-05af5490fb63img-2.jpg',
        //     ],
        //     [
        //         'name' => 'contact',
        //         'content' => 'address=#=مصر القاهرة زهراء مدينة نصر#x#phone=#=01222287556#x#face=#=##x#insta=#=#',
        //     ],
        //     /////////////////////////////////////
        //     [
        //         'name' => 'aboutus',
        //         'content' => 'header=#=نبذه عن شركة إنجاز#x#wordheader=#=إنجاز للبرمجيات هي وكالة تعتمد على النتائج وتقوم بتصميم أفضل الاستراتيجيات خصيصًا لمساعدتك في تحقيق أهدافك. نحن نجمع بين الإبداع والتكنولوجيا لبناء مواقع الويب واستراتيجيات التطبيقات لجعل أعمالك تزدهر في سوق الإنترنت التنافسي. اليوم. في حين أن فريقنا هي مجموعة تقدم كافة الخدمات، فإننا نقدم خدمات داخلية، مثل تصميم وتطوير مواقع الويب سريعة الاستجابة، والتجارة الإلكترونية عبر الأجهزة المحمولة، والتصميم والطباعة وبوابة الويب والأدلة، وتطوير الأجهزة المحمولة، والتطبيقات.#x#img=#=images\customers\49c6b64c-c73c-47ea-996c-e0b31e33d0f8bg-1.png',
        //     ],
        //     [
        //         'name' => 'services',
        //         'content' => 'title=#=برمجة المواقع#x#details=#=نحن نقدم تصميم وبرمجة المواقع مع تجربة مميزة للمستخدم والمواقع التريفيه والمواقع التجارية سهله التعامل للمستخدم ولدينا فريق عمل جاهز للتنفيذ اينما كنت مع تقنيات تكنولوجيا حديثة نحن ليس الافضل لكننا مميزين في عملنا والتطوير لو بتفكر في موقع إنجاز جاهزة معاك في وقت واينما كنت#x#img=#=images\customers\5c63dd5b-01f7-4e15-849c-3a2dde25abb0web.jpg#x#img2=#=images\customers\bcef75d8-b460-4ce6-a6b8-429e7fcf6f03web2.jpg#xt#title=#=برمجة تطبيقات الموبايل#x#details=#=نحن نقدم خدمة برمجة تطبيقات الموبايل باعلي جوده اكمنية استخدام سهل للمستخدم ومع افضل تجربة للمستخدم باستخدام احدث التقنيات في سوق العمل الحالي تطبيقك جاهز عندنا اينما كنت#x#img=#=images\customers\fff25eca-e8fc-443f-8b5f-26b019f803fbmopile-1.jpg#x#img2=#=images\customers\c2d0e8bc-9e7d-4f2e-a584-c97c2735d64fmopile-2.jpg',
        //     ],
        //     [
        //         'name' => 'whyus',
        //         'content' => 'header=#=ليه تختار إنجاز#x#wordheader=#=لان إنجاز بتوفرلك دايما الثقة في التعامل وبتوفرلك الدعم دايما علي ال24ساعة وثقه العملاء فينا ونسعي دائما توفرلك راحه في التعامل ونعسي توفير تقنيات حديثه عالم التكنولوجيا#x#img1=#=images\customers\f1bba904-4a55-46a4-b29c-42bee3905504engaz-3.png#x#img2=#=images\customers\5a0de111-8f86-4f55-aaae-074d61f03f3cengaz-4.png#x#img3=#=images\customers\a1d751cd-864d-42d4-9bc6-01b8fc2a6817engazz-2.png#x#img4=#=images\customers\d297d1e5-0fc1-401d-96e7-902708c9fb43engaz1.png',
        //     ],
        //     ////////////////////////////////////
        //     [
        //         'name' => 'images',
        //         'content' => 'img=#=images\home\about\ea67fe8e-7a56-4c9e-a8ce-d2f4a3007f83scale3.jpg#xt#img=#=images\home\about\ed7d4dec-bb0b-4f39-bad7-8518ac77e68fscale5.jpg#xt#img=#=images\home\about\029bc852-a575-4f83-9135-6cb456e88cf8scale2.jpg',
        //     ],
        //     [
        //         'name' => 'fields',
        //         'content' => 'title=#=المجالات الصحية و الطبية#x#details=#=لوريم إيبسوم طريقة لكتابة النصوص في النشر والتصميم الجرافيكي تستخدم بشكل شائع لتوضيح الشكل المرئي للمستند أو الخط دون الاعتماد على محتوى ذي معنى. يمكن استخدام لوريم إيبسوم قبل نشر النسخة النهائية#x#img=#=images\customers\6458773a-d831-448e-8ba2-510aa67810bbscale3.jpg#xt#title=#=المجالات الهندسية و المعمارية#x#details=#=لوريم إيبسوم طريقة لكتابة النصوص في النشر والتصميم الجرافيكي تستخدم بشكل شائع لتوضيح الشكل المرئي للمستند أو الخط دون الاعتماد على محتوى ذي معنى. يمكن استخدام لوريم إيبسوم قبل نشر النسخة النهائية#x#img=#=images\customers\c20a78e6-3836-42ba-877d-2ab3fdd8390bscale9.jpg#xt#title=#=المجالات الإدارية و المحاسبية#x#details=#=لوريم إيبسوم طريقة لكتابة النصوص في النشر والتصميم الجرافيكي تستخدم بشكل شائع لتوضيح الشكل المرئي للمستند أو الخط دون الاعتماد على محتوى ذي معنى. يمكن استخدام لوريم إيبسوم قبل نشر النسخة النهائية#x#img=#=images\customers\f51b9237-16b4-46d7-854d-f42bfd81ff9ascale5.jpg#xt#title=#=المجالات الذكاء الإصطناعي#x#details=#=لوريم إيبسوم طريقة لكتابة النصوص في النشر والتصميم الجرافيكي تستخدم بشكل شائع لتوضيح الشكل المرئي للمستند أو الخط دون الاعتماد على محتوى ذي معنى. يمكن استخدام لوريم إيبسوم قبل نشر النسخة النهائية#x#img=#=images\customers\4fc9c8c2-123d-489b-8d85-9300764b3b2fai.jpg',
        //     ],
        //     [
        //         'name' => 'rates',
        //         'content' => 'name=#=شادى ابو يوسف#x#postion=#=استاذ لغة انجليزية بجامعة المستقبل#x#comment=#=افادتني الشركة بتصميم مواقعي بشكل احترافي واتقان وجودة وسرعة التنفيذ ورائعه بقدر ما اجد من فرق بينها وبين الشركات المماثلة...#x#rate=#=3#x#img=#=images\customers\1afe9128-e7fa-47b6-a3cb-afbe1a705128user3.jpg#xt#name=#=محمد حماد#x#postion=#=خبير تحكيم دولي " منازعات بحرية "#x#comment=#=بالرغم من اننى لم تكتمل بعد اعمالى بعد مع بيانات الا اننى استفدت كثيرا من خبرة مدراء الشركة وموظفيها من حيث ما يجب ان تكون عليه تصميمات الشركة وما هو افضل حتى فى ادق التفاصيل....#x#rate=#=5#x#img=#=images\customers\631f202a-934b-44b6-bf3b-53df12104cc9user3.jpg#xt#name=#=ظافر العمري#x#postion=#=مدير اكبر مواقع عربية علي الانترنت#x#comment=#=ساعدنى الموقع الذى صممته لى بيانات فى التواصل مع طلابى وتوفير الخدمات التعليمية الازمة لهم بشكل احترافى استند للمعايير والشركات الدولية.#x#rate=#=4#x#img=#=images\customers\6de5e879-b73b-44d3-9638-9d841f663f93user3.jpg',
        //     ],
        //     ////////////////////////////////////////////
        //     [
        //         'name' => 'articles',
        //         'content' => 'title=#=title 1 1111111111111111111111111111111111111111111111#x#title2=#=1111111111111111111111111111111111111111111111#x#details=#=1111111111111111111111111111111111111111111111  1111111111111111111111111111111111111111111111 1111111111111111111111111111111111111111111111 1111111111111111111111111111111111111111111111 1111111111111111111111111111111111111111111111 1111111111111111111111111111111111111111111111#x#img=#=images\customers\1e02a04a-342e-4217-8237-73750de07718img-1.jpg#xt#title=#=22222222222222222222222#x#title2=#=2222222222222222222,2222222222222,22222222222222222222#x#details=#=222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222#x#img=#=images\customers\f010d2bf-0718-41c6-a2a9-e41923b9431aimg-2.jpg#xt#title=#=33333333333#x#title2=#=33333333333#x#details=#=33333333333#x#img=#=images\customers\c04126b1-9e54-47bb-a1a2-ced55c20bf81slider-1.jpg#xt#title=#=444444444444444444444444444#x#title2=#=4444444444444444444444444444444444#x#details=#=444444444444,444444444444,444444444444,444444444444,444444444444,#x#img=#=images\customers\e7f00539-ae44-42c0-98e9-38d470ea2c0dslider-2.jpg',
        //     ],
        //     [
        //         'name' => 'purvies',
        //         'content' => 'title=#=1-مجال واجهات اماميه front end#x#details=#=وجود مبدعين في هذا المجال ,وهو الواجهة التي تراها في الموقع بلغات html css js ولغات اخري مجال مهم في تصميم المواقع ,منها ui developer و front end#x#img=#=images\customers\a18bc4a2-c4ef-44cf-9ad3-00a930ab8c9adesign.png#xt#title=#=2- مجال الكواليس back end#x#details=#=مجال مهم جدا جدا في تطوير المواقع وهو اشياء لا تراها امامك ولكنها في كوليس الموقع من اهم لغاتها sql - database - laravel#x#img=#=images\customers\48cd688a-5261-44e9-ba3a-232bb74029deWebsite and applications.png#xt#title=#=3- seo#x#details=#=مجال رأع ومهم وجوده لأنه بأختصار بجعل الموقع مستجيب مع محركات البحث وافضل في البحث#x#img=#=images\customers\6858556c-5d16-4101-8221-011bb34ed2e7scale5.jpg#xt#title=#=4- مجال تطبيقات الموبايل Flutter#x#details=#=فلاتر هو SDK من شركة جوجل مخصص لبرمجة تطبيقات الهواتف الذكية العاملة بنظام الاندرويد وال IOS لغه برمجه لتطبيقات الموبايل#x#img=#=images\customers\6d00b0fc-9a1e-41b7-af47-af37f99ff4bfmopile-1.jpg',
        //     ],

        // ]);


        DB::table('customers')->insert([
            [
                'name' => 'intro',
                'content' => 'name=#=إنجاز للبرمحيات#x#header=#=شركة إنجاز لتطوير البرمجيات#x#wordheader=#=إنجاز للبرمجيات هي وكالة تعتمد على النتائج وتقوم بتصميم أفضل الاستراتيجيات خصيصًا لمساعدتك في تحقيق أهدافك. نحن نجمع بين الإبداع والتكنولوجيا لبناء مواقع الويب واستراتيجيات التطبيقات#x#name_en=#=Enjaz For Software#x#header_en=#=Enjaz Software Development Company#x#wordheader_en=#=Enjaz Software is a results-based agency that designs the best strategies specifically to help you achieve your goals. We combine creativity and technology for website building and application strategies#x#img=#=images\customers\a041c920-eaa4-4930-a272-b92ee1a77a31background.png#x#imgl=#=images\customers\320f9d8f-60ab-462d-930d-232464ab4195logo.jpeg',
            ],
            [
                'name' => 'about',
                'content' => 'header1=#=من نحن#x#wordheader1=#=إنجاز للبرمجيات هي وكالة تعتمد على النتائج وتقوم بتصميم أفضل الاستراتيجيات خصيصًا لمساعدتك في تحقيق أهدافك. نحن نجمع بين الإبداع والتكنولوجيا لبناء مواقع الويب واستراتيجيات التطبيقات لجعل أعمالك تزدهر في سوق الإنترنت التنافسي. اليوم. في حين أن فريقنا هي مجموعة تقدم كافة الخدمات، فإننا نقدم خدمات داخلية، مثل تصميم وتطوير مواقع الويب سريعة الاستجابة، والتجارة الإلكترونية عبر الأجهزة المحمولة، والتصميم والطباعة وبوابة الويب والأدلة، وتطوير الأجهزة المحمولة، والتطبيقات.#x#header2=#=نهجنا#x#wordheader2=#=نحن لسنا شركة تصميم وتطوير الويب النموذجية الخاصة بك نحن نستخدم التكنولوجيا المبتكرة التي تعزز تجربة المستخدمين وتمكنك من جذب العملاء، والاحتفاظ بهم. مهمتنا بسيطة ... لبناء مواقع ويب جذابة وبديهية من شأنها أن تزيد عائد استثمارك إلى أقصى حد. نحن نؤمن بأن كل شركة، سواء كانت صغيرة أو كبيرة، يجب أن تمتلك الأدوات المناسبة لتحقيق النجاح. ولذلك، فإننا نهدف باستمرار إلى إنشاء حلول ويب متميزة بناءً على متطلباتك الدقيقة وميزانيتك.#x#header3=#=جودتنا و إبداعنا#x#wordheader3=#=إذا كانت هناك صفة واحدة تلخص شركة إنجاز للبرمجيات، فهي قدرتنا على التسليم في الوقت المحدد. ونستخدم أفضل أدوات التخطيط والبرمجة و ننجز المهمة دائمًا دون المساس بقلة الجودة أو الإبداع.#x#header1_en=#=Who are we#x#wordheader1_en=#=Enjaz Software is a results-based agency that designs the best strategies specifically to help you achieve your goals. We combine creativity and technology to build websites and application strategies to make your business thrive in a competitive internet marketplace. Today. While our team is a full-service group, we offer in-house services, such as responsive website design and development, mobile e-commerce, design and printing, web portal and directories, mobile development, and applications.#x#header2_en=#=Our Approach#x#wordheader2_en=#= We are not your typical web design and development company we use innovative technology that enhances the user experience and enables you to attract and retain customers. Our mission is simple... To build attractive and intuitive websites that will maximize your ROI. We believe that every company, whether small or large, must have the right tools to succeed. Therefore, we constantly aim to create outstanding web solutions based on your exact requirements and budget.#x#header3_en=#=Our Quality & Creativity#x#wordheader3_en=#=If there is one quality that sums up Enjaz Software, it is our ability to deliver on time. We use the best planning and programming tools and always get the job done without compromising lack of quality or creativity.#x#img1=#=images\customers\718ed31f-fc69-4036-895c-58956783db17coding-1.jpg#x#img2=#=images\customers\d29c8d6a-946c-46dd-9e10-28d508e79660coding-2.jpg#x#img3=#=images\customers\8d67ea38-f6a7-4860-aaed-375f3059e740coding-3.jpg#x#img4=#=images\customers\f7587ae0-bb04-4fc0-ba79-dd01815eeb7bcoding-4.jpg#x#img5=#=images\customers\39e9b0e1-45aa-4e35-a28f-97e569ddb478coding5.jpg',
            ],
            [
                'name' => 'service',
                'content' => 'header=#=برمجة المواقع ,وتطبيقات الهاتف#x#wordheader=#=خدمات تصميم مخصصة تتناسب مع هوية علامتك التجارية الفريدة.، يتم إنشاء جميع تصميماتنا مع التركيز على المستخدمين؛ من خلال رحلات محددة وعبارات تحث المستخدم على اتخاذ إجراء للحصول على تجربة مستخدم محسنة.#x#header_en=#=Web Programming & Mobile Applications#x#wordheader_en=#=Customized design services that match your unique brand identity., All of our designs are created with a focus on users; through specific journeys and calls to action for an improved user experience.#x#img1=#=images\customers\4e3d9cbf-a16f-444f-bfd5-98c96cdfd703oneimg.jpg#x#img2=#=images\customers\e9798de3-dc0a-4577-aad7-5b2078012a14slider-3.jpg#x#img3=#=images\customers\01cb5ed2-5ee2-4d6e-a206-1daf40012d46slider-1.jpg#x#img4=#=images\customers\7873f683-723b-4a68-ab44-f808fcc2fc62slider-2.jpg#x#img5=#=images\customers\f6992877-1351-4d81-bf46-d5cf35abe8c9slider-4.jpg',
            ],
            [
                'name' => 'excellence',
                'content' => "header1=#=التصميم#x#wordheader1=#=خدمات تصميم مخصصة تتناسب مع هوية علامتك التجارية الفريدة.، يتم إنشاء جميع تصميماتنا مع التركيز على المستخدمين؛ من خلال رحلات محددة وعبارات تحث المستخدم على اتخاذ إجراء للحصول على تجربة مستخدم محسنة.#x#header2=#=ابتكار#x#wordheader2=#=تتمتع فرقنا الإبداعية بالمزيج الصحيح من التفكير الجديد والخبرة الصناعية لإحداث تأثير حقيقي على عملك. في عالم اليوم الغني بوسائل الإعلام، تحتاج إلى التفكير بشكل كبير والتصرف بشكل مختلف لجذب انتباه الناس.لتصميم#x#header1_en=#=Design#x#wordheader1_en=#=Customized design services that match your unique brand identity., All of our designs are created with a focus on users; through specific journeys and calls to action for an improved user experience.#x#header2_en=#=Innovation#x#wordheader2_en=#=Our creative teams have the right mix of fresh thinking and industry expertise to make a real impact on your business. In today's media-rich world, you need to think big and act differently to grab people's attention.#x#img1=#=images\customers\9e1eec89-2724-4d67-afb0-e44e2dd56876img-1.jpg#x#img2=#=images\customers\86bf833b-87ff-4ac3-89b5-05af5490fb63img-2.jpg",
            ],
            [
                'name' => 'contact',
                'content' => 'address=#=مصر القاهرة زهراء مدينة نصر#x#address_en=#=Egypt Cairo Zahraa City Half#x#phone=#=01222287556#x#face=#=##x#insta=#=#',
            ],
            /////////////////////////////////////
            [
                'name' => 'aboutus',
                'content' => 'header=#=نبذه عن شركة إنجاز#x#wordheader=#=إنجاز للبرمجيات هي وكالة تعتمد على النتائج وتقوم بتصميم أفضل الاستراتيجيات خصيصًا لمساعدتك في تحقيق أهدافك. نحن نجمع بين الإبداع والتكنولوجيا لبناء مواقع الويب واستراتيجيات التطبيقات لجعل أعمالك تزدهر في سوق الإنترنت التنافسي. اليوم. في حين أن فريقنا هي مجموعة تقدم كافة الخدمات، فإننا نقدم خدمات داخلية، مثل تصميم وتطوير مواقع الويب سريعة الاستجابة، والتجارة الإلكترونية عبر الأجهزة المحمولة، والتصميم والطباعة وبوابة الويب والأدلة، وتطوير الأجهزة المحمولة، والتطبيقات.#x#header_en=#=About Enjaz#x#wordheader_en=#=Enjaz Software is a results-based agency that designs the best strategies specifically to help you achieve your goals. We combine creativity and technology to build websites and application strategies to make your business thrive in a competitive internet marketplace. Today. While our team is a full-service group, we offer in-house services, such as responsive website design and development, mobile e-commerce, design and printing, web portal and directories, mobile development, and applications.#x#img=#=images\customers\49c6b64c-c73c-47ea-996c-e0b31e33d0f8bg-1.png',
            ],
            [
                'name' => 'services',
                'content' => 'title=#=برمجة المواقع#x#details=#=نحن نقدم تصميم وبرمجة المواقع مع تجربة مميزة للمستخدم والمواقع التريفيه والمواقع التجارية سهله التعامل للمستخدم ولدينا فريق عمل جاهز للتنفيذ اينما كنت مع تقنيات تكنولوجيا حديثة نحن ليس الافضل لكننا مميزين في عملنا والتطوير لو بتفكر في موقع إنجاز جاهزة معاك في وقت واينما كنت#x#img=#=images\customers\5c63dd5b-01f7-4e15-849c-3a2dde25abb0web.jpg#x#img2=#=images\customers\bcef75d8-b460-4ce6-a6b8-429e7fcf6f03web2.jpg#xt#title=#=برمجة تطبيقات الموبايل#x#details=#=نحن نقدم خدمة برمجة تطبيقات الموبايل باعلي جوده اكمنية استخدام سهل للمستخدم ومع افضل تجربة للمستخدم باستخدام احدث التقنيات في سوق العمل الحالي تطبيقك جاهز عندنا اينما كنت#x#img=#=images\customers\fff25eca-e8fc-443f-8b5f-26b019f803fbmopile-1.jpg#x#img2=#=images\customers\c2d0e8bc-9e7d-4f2e-a584-c97c2735d64fmopile-2.jpg',
            ],
            [
                'name' => 'whyus',
                'content' => 'header=#=ليه تختار إنجاز#x#wordheader=#=لان إنجاز بتوفرلك دايما الثقة في التعامل وبتوفرلك الدعم دايما علي ال24ساعة وثقه العملاء فينا ونسعي دائما توفرلك راحه في التعامل ونعسي توفير تقنيات حديثه عالم التكنولوجيا#x#header_en=#=Why choose an achievement?#x#wordheader_en=#=Because Injaz always provides you with confidence in dealing and provides you with support always on the 24 hours and customer confidence in us and we always strive to provide you with comfort in dealing and we are asleep Providing modern technologies in the world of technology#x#img1=#=images\customers\f1bba904-4a55-46a4-b29c-42bee3905504engaz-3.png#x#img2=#=images\customers\5a0de111-8f86-4f55-aaae-074d61f03f3cengaz-4.png#x#img3=#=images\customers\a1d751cd-864d-42d4-9bc6-01b8fc2a6817engazz-2.png#x#img4=#=images\customers\d297d1e5-0fc1-401d-96e7-902708c9fb43engaz1.png',
            ],
            ////////////////////////////////////
            [
                'name' => 'images',
                'content' => 'img=#=images\home\about\ea67fe8e-7a56-4c9e-a8ce-d2f4a3007f83scale3.jpg#xt#img=#=images\home\about\ed7d4dec-bb0b-4f39-bad7-8518ac77e68fscale5.jpg#xt#img=#=images\home\about\029bc852-a575-4f83-9135-6cb456e88cf8scale2.jpg',
            ],
            [
                'name' => 'fields',
                'content' => 'title=#=المجالات الصحية و الطبية#x#details=#=لوريم إيبسوم طريقة لكتابة النصوص في النشر والتصميم الجرافيكي تستخدم بشكل شائع لتوضيح الشكل المرئي للمستند أو الخط دون الاعتماد على محتوى ذي معنى. يمكن استخدام لوريم إيبسوم قبل نشر النسخة النهائية#x#img=#=images\customers\6458773a-d831-448e-8ba2-510aa67810bbscale3.jpg#xt#title=#=المجالات الهندسية و المعمارية#x#details=#=لوريم إيبسوم طريقة لكتابة النصوص في النشر والتصميم الجرافيكي تستخدم بشكل شائع لتوضيح الشكل المرئي للمستند أو الخط دون الاعتماد على محتوى ذي معنى. يمكن استخدام لوريم إيبسوم قبل نشر النسخة النهائية#x#img=#=images\customers\c20a78e6-3836-42ba-877d-2ab3fdd8390bscale9.jpg#xt#title=#=المجالات الإدارية و المحاسبية#x#details=#=لوريم إيبسوم طريقة لكتابة النصوص في النشر والتصميم الجرافيكي تستخدم بشكل شائع لتوضيح الشكل المرئي للمستند أو الخط دون الاعتماد على محتوى ذي معنى. يمكن استخدام لوريم إيبسوم قبل نشر النسخة النهائية#x#img=#=images\customers\f51b9237-16b4-46d7-854d-f42bfd81ff9ascale5.jpg#xt#title=#=المجالات الذكاء الإصطناعي#x#details=#=لوريم إيبسوم طريقة لكتابة النصوص في النشر والتصميم الجرافيكي تستخدم بشكل شائع لتوضيح الشكل المرئي للمستند أو الخط دون الاعتماد على محتوى ذي معنى. يمكن استخدام لوريم إيبسوم قبل نشر النسخة النهائية#x#img=#=images\customers\4fc9c8c2-123d-489b-8d85-9300764b3b2fai.jpg',
            ],
            [
                'name' => 'rates',
                'content' => 'name=#=شادى ابو يوسف#x#postion=#=استاذ لغة انجليزية بجامعة المستقبل#x#comment=#=افادتني الشركة بتصميم مواقعي بشكل احترافي واتقان وجودة وسرعة التنفيذ ورائعه بقدر ما اجد من فرق بينها وبين الشركات المماثلة...#x#rate=#=3#x#img=#=images\customers\1afe9128-e7fa-47b6-a3cb-afbe1a705128user3.jpg#xt#name=#=محمد حماد#x#postion=#=خبير تحكيم دولي " منازعات بحرية "#x#comment=#=بالرغم من اننى لم تكتمل بعد اعمالى بعد مع بيانات الا اننى استفدت كثيرا من خبرة مدراء الشركة وموظفيها من حيث ما يجب ان تكون عليه تصميمات الشركة وما هو افضل حتى فى ادق التفاصيل....#x#rate=#=5#x#img=#=images\customers\631f202a-934b-44b6-bf3b-53df12104cc9user3.jpg#xt#name=#=ظافر العمري#x#postion=#=مدير اكبر مواقع عربية علي الانترنت#x#comment=#=ساعدنى الموقع الذى صممته لى بيانات فى التواصل مع طلابى وتوفير الخدمات التعليمية الازمة لهم بشكل احترافى استند للمعايير والشركات الدولية.#x#rate=#=4#x#img=#=images\customers\6de5e879-b73b-44d3-9638-9d841f663f93user3.jpg',
            ],
            ////////////////////////////////////////////
            [
                'name' => 'articles',
                'content' => 'title=#=title 1 1111111111111111111111111111111111111111111111#x#title2=#=1111111111111111111111111111111111111111111111#x#details=#=1111111111111111111111111111111111111111111111  1111111111111111111111111111111111111111111111 1111111111111111111111111111111111111111111111 1111111111111111111111111111111111111111111111 1111111111111111111111111111111111111111111111 1111111111111111111111111111111111111111111111#x#img=#=images\customers\1e02a04a-342e-4217-8237-73750de07718img-1.jpg#xt#title=#=22222222222222222222222#x#title2=#=2222222222222222222,2222222222222,22222222222222222222#x#details=#=222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222#x#img=#=images\customers\f010d2bf-0718-41c6-a2a9-e41923b9431aimg-2.jpg#xt#title=#=33333333333#x#title2=#=33333333333#x#details=#=33333333333#x#img=#=images\customers\c04126b1-9e54-47bb-a1a2-ced55c20bf81slider-1.jpg#xt#title=#=444444444444444444444444444#x#title2=#=4444444444444444444444444444444444#x#details=#=444444444444,444444444444,444444444444,444444444444,444444444444,#x#img=#=images\customers\e7f00539-ae44-42c0-98e9-38d470ea2c0dslider-2.jpg',
            ],
            [
                'name' => 'purvies',
                'content' => 'title=#=1-مجال واجهات اماميه front end#x#details=#=وجود مبدعين في هذا المجال ,وهو الواجهة التي تراها في الموقع بلغات html css js ولغات اخري مجال مهم في تصميم المواقع ,منها ui developer و front end#x#img=#=images\customers\a18bc4a2-c4ef-44cf-9ad3-00a930ab8c9adesign.png#xt#title=#=2- مجال الكواليس back end#x#details=#=مجال مهم جدا جدا في تطوير المواقع وهو اشياء لا تراها امامك ولكنها في كوليس الموقع من اهم لغاتها sql - database - laravel#x#img=#=images\customers\48cd688a-5261-44e9-ba3a-232bb74029deWebsite and applications.png#xt#title=#=3- seo#x#details=#=مجال رأع ومهم وجوده لأنه بأختصار بجعل الموقع مستجيب مع محركات البحث وافضل في البحث#x#img=#=images\customers\6858556c-5d16-4101-8221-011bb34ed2e7scale5.jpg#xt#title=#=4- مجال تطبيقات الموبايل Flutter#x#details=#=فلاتر هو SDK من شركة جوجل مخصص لبرمجة تطبيقات الهواتف الذكية العاملة بنظام الاندرويد وال IOS لغه برمجه لتطبيقات الموبايل#x#img=#=images\customers\6d00b0fc-9a1e-41b7-af47-af37f99ff4bfmopile-1.jpg',
            ],

        ]);
    }
}

