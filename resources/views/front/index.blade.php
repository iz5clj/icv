<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        @include('partials.head')

        <style>
            .numero {
                font-size: 3rem;
                font-weight: 900;
            }

            @-moz-keyframes bounce {
                0%, 20%, 50%, 80%, 100% {
                  -moz-transform: translateY(0);
                  transform: translateY(0);
                }
                40% {
                  -moz-transform: translateY(-30px);
                  transform: translateY(-30px);
                }
                60% {
                  -moz-transform: translateY(-15px);
                  transform: translateY(-15px);
                }
              }
              @-webkit-keyframes bounce {
                0%, 20%, 50%, 80%, 100% {
                  -webkit-transform: translateY(0);
                  transform: translateY(0);
                }
                40% {
                  -webkit-transform: translateY(-30px);
                  transform: translateY(-30px);
                }
                60% {
                  -webkit-transform: translateY(-15px);
                  transform: translateY(-15px);
                }
              }
              @keyframes bounce {
                0%, 20%, 50%, 80%, 100% {
                  -moz-transform: translateY(0);
                  -ms-transform: translateY(0);
                  -webkit-transform: translateY(0);
                  transform: translateY(0);
                }
                40% {
                  -moz-transform: translateY(-30px);
                  -ms-transform: translateY(-30px);
                  -webkit-transform: translateY(-30px);
                  transform: translateY(-30px);
                }
                60% {
                  -moz-transform: translateY(-15px);
                  -ms-transform: translateY(-15px);
                  -webkit-transform: translateY(-15px);
                  transform: translateY(-15px);
                }
              }
              
              
              .arrow {
                position: absolute;
                bottom: 1rem;
                left: 50%;
                margin-left: -20px;
                width: 60px;
                height: 60px;
                background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjI0Ij48cGF0aCBkPSJNNy40MSA4LjU5TDEyIDEzLjE3bDQuNTktNC41OEwxOCAxMGwtNiA2LTYtNiAxLjQxLTEuNDF6Ii8+PHBhdGggZD0iTTAgMGgyNHYyNEgwVjB6IiBmaWxsPSJub25lIi8+PC9zdmc+);
                background-size: contain;
                transform: rotate(90deg);
              }
              
              .bounce {
                -moz-animation: bounce 2s infinite;
                -webkit-animation: bounce 2s infinite;
                animation: bounce 2s infinite;
              }

            
        </style>

    </head>

    <body>
        <div class="wrapper">
            <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="mr-3 text-right">
                        <p>{{ $m1->updated }}</p>
                        <p class="numero">{{ $m1->text01 }}</p>
                        <p>{{ $m1->text02 }}</p>
                    </div>
                    <div class="ml-3">
                        <p>{{ $m2->updated }}</p>
                        <p class="numero">{{ $m2->text01 }}</p>
                        <p>{{ $m2->text02 }}</p>
                    </div>

                </div>
                <a href="#grid" class="btn arrow bounce"></a>
            </div>
            <div class="container">

            
                <div id="grid" class="row">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum perferendis quae totam delectus
                    quos excepturi dignissimos commodi quibusdam culpa atque earum, deserunt officiis cupiditate porro,
                    doloremque sapiente dolores ipsa veritatis error libero ab a? Vel, vero earum tenetur quos iste modi
                    voluptates magnam neque, placeat corporis, ratione officiis praesentium doloremque adipisci odit nam
                    sapiente maiores reprehenderit eligendi! Provident ullam soluta rerum sed eos obcaecati esse facilis
                    ut officiis beatae! Velit ducimus nisi ipsum mollitia nam quia sapiente incidunt repellendus odio
                    neque. Alias, assumenda rerum earum facere quod quia ipsam delectus illo, reprehenderit dolores ex,
                    nobis dolore impedit? Repellendus, ratione, accusantium incidunt autem placeat iure atque inventore
                    ad architecto cumque aspernatur labore commodi dolore ex quaerat corrupti at a suscipit. At dolorem
                    debitis quasi soluta dolores, aut natus quod aliquam quibusdam id vel odio dolore. Vero, iusto neque
                    accusamus tenetur quam debitis in. Dolorem quaerat laboriosam ratione excepturi culpa est adipisci
                    saepe consequatur obcaecati natus aliquid, iure fugiat reprehenderit temporibus ex inventore
                    aspernatur vel hic praesentium nostrum nisi, magnam cupiditate. Amet aut, neque eligendi quam ipsam
                    voluptatibus quibusdam voluptatem quidem libero dolorem blanditiis suscipit excepturi labore
                    corporis minus est nemo at nulla maxime commodi minima. Voluptatibus deleniti corrupti, rerum alias
                    maiores beatae incidunt corporis accusamus ut placeat quis consectetur aspernatur quaerat iusto
                    minima dolorum amet soluta nemo voluptatum nisi, repudiandae ea. Incidunt laudantium, a, rem
                    delectus doloremque dolore pariatur beatae tempora libero excepturi tempore laborum maiores
                    voluptatibus voluptas. Nisi amet eligendi non, recusandae odit mollitia obcaecati deleniti, adipisci
                    corrupti, repellat consequuntur sed facere molestias nemo magni pariatur! Nemo accusamus sed neque
                    cumque. Ipsa obcaecati perferendis laudantium reiciendis voluptatibus nisi impedit recusandae rem
                    unde? Ipsa doloribus, voluptatibus aspernatur quos nulla vel eos corrupti ea mollitia sequi hic.
                    Distinctio in maiores, cumque quos, incidunt eius, eum quas neque sunt doloribus enim tempore quis
                    tenetur necessitatibus? Unde, accusamus. Soluta, impedit? Facere sit vero adipisci quaerat minus
                    non, aspernatur nobis beatae illum animi architecto dolore amet perspiciatis asperiores tempora
                    corrupti id sint ea cum eius blanditiis nemo molestias. Eveniet cum natus mollitia! Repellat, alias
                    dolor similique doloribus illum dolores facere nobis quia incidunt dolore reiciendis explicabo sit,
                    delectus odio voluptate suscipit quisquam pariatur soluta nam exercitationem illo sapiente beatae.
                    Laborum aspernatur iste quae excepturi facilis ab explicabo quis numquam dolore facere eius soluta
                    cum, magnam nostrum iure dolorem inventore ratione quibusdam ipsam molestias iusto! Maxime
                    dignissimos repudiandae, aliquid pariatur distinctio, obcaecati cum non in consequatur nesciunt,
                    aliquam rerum. Quis ea modi perspiciatis porro voluptatem, quaerat sapiente in, voluptate molestiae
                    voluptatibus animi ab? Nostrum consequuntur sunt reprehenderit dolorum repudiandae exercitationem
                    quam enim voluptatum illum consectetur voluptatem odit ullam totam, soluta dolor? Vero rerum fuga
                    eligendi exercitationem laudantium cupiditate in magnam eveniet minus quod, neque debitis tenetur
                    libero? Molestiae quidem ab iusto aut fugiat. At repellat ratione ab! Dignissimos, sunt veritatis
                    soluta eveniet nesciunt voluptatibus earum ullam consequatur velit. Aperiam neque similique
                    praesentium! Amet ducimus atque temporibus commodi nobis incidunt suscipit architecto libero,
                    repellat, harum asperiores. Delectus molestiae voluptates eius architecto provident ratione eligendi
                    vel autem itaque a! Rem repellat perferendis aut ad debitis, exercitationem animi veritatis
                    repellendus libero asperiores expedita magnam blanditiis molestias quam cupiditate eos veniam
                    placeat porro minima distinctio fuga! Provident nam doloremque voluptatem corrupti itaque ipsum vel
                    cupiditate qui, suscipit expedita quod voluptatibus ratione dolorum hic temporibus! Rerum magni
                    voluptatem reiciendis optio fugit officia eum, obcaecati aliquid laborum? At illo eveniet vitae a
                    fuga cumque velit enim iste incidunt! Nemo vel, commodi quae consequuntur qui aut officiis expedita
                    rem fugit laboriosam ipsam neque ducimus sequi! Odio soluta recusandae consequatur in eveniet
                    architecto accusantium rerum! Quibusdam tempore sunt sapiente! Facilis corrupti repellendus nihil
                    eos impedit explicabo ad sit laborum totam obcaecati nulla dolor, molestias veritatis incidunt
                    tempora ullam non deserunt aliquam laudantium, minima perferendis similique odio? Quaerat eveniet
                    sint ipsa consequuntur officiis blanditiis saepe alias ut magnam adipisci unde, animi officia eius
                    cupiditate reiciendis obcaecati expedita. Cumque nostrum explicabo sit voluptatibus. Porro excepturi
                    reiciendis dolorum aliquid veniam quae explicabo laborum distinctio debitis recusandae, iste neque
                    iusto dolore, quos est repellat aut? Pariatur eveniet officiis laboriosam quod in quo quas repellat
                    qui. Explicabo nam asperiores libero ab laborum cupiditate distinctio itaque fugiat, at incidunt
                    soluta ipsam non aliquam dolorum id, quam deserunt perferendis eaque nemo? Nobis dignissimos aliquid
                    dicta corporis ullam error facere beatae obcaecati animi sed, corrupti, aliquam omnis saepe quam sit
                    voluptatum nulla at, numquam nostrum. Neque modi, saepe sapiente sunt nisi amet quo totam unde
                    laborum doloremque? Culpa aliquam corrupti nulla sunt nostrum ipsam qui quod quia dolorem velit
                    doloremque in eum dicta tempora, quam non perferendis repellendus impedit cupiditate vero? Aliquam
                    minima reiciendis unde quidem iusto ab maxime autem accusantium ducimus libero voluptatibus delectus
                    veniam, fugit aspernatur cum vitae, consequatur dolore. Iure similique omnis facilis rem aperiam
                    aliquam eaque, sequi, quia rerum a libero officiis mollitia laboriosam ex vel quod quos quis sed,
                    architecto voluptatem eligendi. Earum minus repudiandae possimus dolorem id, nesciunt accusantium,
                    facilis nemo voluptatum voluptates deleniti laboriosam qui molestiae eos. Magni eius accusantium
                    corporis quidem vel modi nemo enim adipisci, suscipit iste voluptatibus facilis optio alias placeat.
                    Explicabo quis nemo culpa nulla vel maxime eos? Magnam, tempore rerum. Recusandae doloremque odio
                    nisi a! Magnam, vel libero nesciunt quis est, vero aliquam sapiente qui tempore asperiores modi
                    ratione voluptas ipsa itaque error nemo quas similique quia et? Saepe incidunt vitae eveniet
                    architecto, molestiae reiciendis quidem obcaecati voluptatem necessitatibus quia facilis officiis
                    cumque eligendi ullam totam inventore quibusdam repellat esse quis earum id! Sed vero, voluptatum
                    voluptatibus ipsam, ut quod aut quos id praesentium assumenda quas excepturi blanditiis culpa
                    officia. Ex illum quos numquam? Voluptates cupiditate minus consectetur voluptate error? Accusamus
                    nulla fugiat ab. Odio aperiam magni dolores rerum est. Laudantium et accusamus expedita! Explicabo,
                    quisquam distinctio asperiores, voluptas quasi consectetur itaque rem omnis beatae praesentium, quos
                    dolorem eligendi quibusdam nobis! Distinctio placeat est omnis vero sunt adipisci quibusdam ipsam,
                    voluptates dolores laudantium accusantium aspernatur quis? Corrupti laboriosam impedit at, eveniet
                    laborum eos, odit totam blanditiis ipsum consectetur aliquam illum quidem error debitis consequuntur
                    nulla sunt quis! Animi nesciunt exercitationem obcaecati deserunt adipisci reprehenderit inventore
                    excepturi vel laboriosam deleniti commodi eaque neque quam quis laudantium voluptas iusto impedit
                    quisquam saepe asperiores, expedita consequatur? Harum, iure quos? Optio praesentium libero quisquam
                    exercitationem nesciunt dolore, aliquam dicta similique, iure fugiat vel odit deleniti rem. Sunt
                    quos necessitatibus, ad nemo dignissimos pariatur distinctio est expedita dolorem adipisci autem
                    fuga minima hic cum possimus odio. Iure enim, repellat amet veniam ipsum quos, iste, saepe doloribus
                    at similique qui aliquam. Tenetur, praesentium voluptatibus cum magnam dolorem, optio labore minus
                    accusantium libero molestiae aliquid quia! Assumenda doloribus voluptatibus sequi fugiat aliquid sed
                    ab perferendis beatae? Omnis, voluptatibus neque. Exercitationem enim veritatis blanditiis sit ipsa
                    cum dolores delectus voluptas vel autem culpa odit quam eveniet asperiores laborum voluptates rem
                    similique, soluta itaque vitae? Numquam, odio. Iusto, velit hic, tenetur est ipsa officiis
                    laudantium autem facere quis, illo aspernatur! Numquam optio consequatur aliquam quasi sapiente aut,
                    non et laborum? Distinctio aut ipsa qui assumenda quaerat est blanditiis omnis quos, nostrum
                    perspiciatis error explicabo fugit incidunt, praesentium, itaque soluta corporis debitis aliquid.
                    Aperiam, dolores pariatur a quo maxime dolorum esse vero ipsam nostrum unde perspiciatis fugiat,
                    enim ratione consectetur dignissimos doloremque. Commodi tempora nesciunt totam soluta! Quasi esse
                    libero accusamus nihil officia cum, temporibus nesciunt, illum at sint numquam. Itaque placeat eos
                    vero reprehenderit? Libero, magnam nostrum? Et a dolor veniam officia veritatis praesentium
                    provident nulla, laboriosam sint totam quidem, illum, rem cumque quisquam placeat tempore
                    repudiandae voluptatum accusamus sed eos. Facilis, repudiandae. Consequatur fugit, iste blanditiis
                    explicabo sunt earum facilis ipsum odit voluptas quod quo repudiandae. Tempora illum quae iste nam
                    dolore assumenda, molestiae aspernatur exercitationem optio? Maxime aliquid est nisi a iusto libero
                    eaque voluptatibus autem eos blanditiis aperiam perferendis tenetur fugiat, velit quaerat obcaecati
                    ad vero qui laboriosam modi inventore hic? Architecto quod reprehenderit quia quas, mollitia
                    accusamus inventore asperiores voluptas, dignissimos repellat ut laudantium quidem excepturi minus.
                    Distinctio, maxime sit neque excepturi quod commodi quia dignissimos, sed libero nobis cum
                    recusandae quae odio dolorem rerum accusamus, voluptatem eos quibusdam quaerat qui omnis ut?
                    Voluptate necessitatibus illum laborum dolore sunt laudantium fuga maxime in facilis, vero minus
                    perspiciatis ullam reprehenderit deleniti non maiores similique, aperiam natus? Illum, aut non!
                    Itaque facilis quo assumenda ipsum totam maxime animi aliquam officiis quos. Fugiat excepturi in
                    suscipit, aspernatur blanditiis quam rem quibusdam nihil, sequi nisi hic doloremque voluptatibus
                    maxime incidunt aperiam rerum repellendus fuga sit quod veniam ab tempora placeat. Odio corrupti
                    corporis eaque? Facere architecto odio deserunt officia ipsa sed, ad voluptatum sunt delectus labore
                    aliquam? Voluptatum fugiat tempore suscipit perferendis vel nobis dolores nemo sit aspernatur
                    reiciendis necessitatibus error architecto corporis enim porro ipsam tenetur, voluptatem excepturi
                    impedit consequatur magni. Vel voluptatibus magni reprehenderit cum, adipisci harum fuga, officiis
                    ad asperiores, excepturi quis quod dignissimos aut sapiente eius eligendi natus quisquam fugiat
                    officia consequatur! Alias repellat veniam, accusantium in tempora quas ullam tempore corporis
                    cupiditate voluptates iste. Repellat quam velit iste tempore vel accusantium obcaecati aperiam, nisi
                    voluptatum tempora, harum excepturi consectetur minima, ipsam quas ad dolorum sit corrupti aut error
                    iusto deserunt quod nihil ut! Natus mollitia omnis sed dicta consequatur magni dolores itaque sunt
                    neque voluptatem, deleniti voluptas ipsa atque, eum placeat. Accusantium natus reiciendis facilis
                    corrupti, fugiat nostrum laborum laboriosam? Officiis tenetur repellat iste ipsum laborum aspernatur
                    illo nihil ad perferendis, atque rerum doloremque quidem consectetur cumque, hic eaque error porro,
                    iusto cum necessitatibus eos vel. Aperiam odit iste, deleniti repudiandae libero sunt nisi earum
                    cumque, neque rerum doloribus corrupti. Consequatur impedit voluptas quam hic neque possimus dolore,
                    accusamus illum ipsum velit sapiente? Similique debitis aliquid distinctio explicabo. Quas suscipit
                    voluptate aliquam exercitationem officiis beatae neque, eveniet sunt voluptatum ea corrupti aliquid
                    adipisci deleniti. Similique eius nobis dignissimos eos modi optio rerum voluptatibus, a praesentium
                    aliquid ullam, accusamus harum repudiandae pariatur. Similique molestiae sunt quo doloribus rem
                    nihil ea, velit excepturi nostrum corrupti iure explicabo reiciendis accusamus fugiat! Id doloribus
                    earum saepe natus inventore fugit vel. Asperiores sunt officiis, minima ipsam aspernatur vero
                    molestias tempore laudantium ducimus reprehenderit libero, maiores quidem facere consequuntur
                    aliquam cum rerum, labore illum iure explicabo minus odio consequatur. Earum nisi ipsam laborum
                    voluptatum corrupti beatae maiores atque rem animi excepturi commodi sequi amet, delectus
                    repudiandae nobis sunt ullam cupiditate neque dicta rerum sint fugit illo dolores? Quas sed magnam
                    voluptatum recusandae architecto distinctio asperiores soluta illo totam atque laborum, dignissimos
                    dolor nihil ex, placeat laudantium mollitia eligendi, molestias commodi ea? Praesentium velit amet
                    iste inventore veniam, sapiente ipsum cum quis labore earum, natus vitae voluptatibus odio quos
                    corporis laborum, voluptates pariatur facere odit. Iusto quam fuga exercitationem in quidem libero
                    fugiat neque repellendus? Modi praesentium officia, dolor illum nobis ullam voluptate tenetur
                    doloribus natus placeat architecto corrupti voluptates incidunt quidem? Veniam fuga distinctio
                    possimus iste quia accusamus vero voluptatum vitae dolorum. Consequatur harum architecto corporis
                    itaque eaque odio voluptatem deleniti, assumenda nemo asperiores fugiat vitae nam aut at dolores
                    repellendus! Perferendis aliquam quibusdam temporibus suscipit quae provident dolor illum, quo hic
                    libero laudantium modi explicabo fugiat, saepe, deleniti corporis quam culpa voluptatem facilis
                    dolorum. Quod, soluta. Saepe rerum tenetur ipsam, animi accusamus atque totam non nulla voluptatem
                    dolorem veritatis reiciendis officiis quaerat numquam quo. Delectus eos molestiae, perspiciatis
                    ratione, ipsam consequuntur ducimus aliquam quasi quis, accusantium fuga quidem. Voluptatum fuga
                    obcaecati quaerat quo ratione aliquam, molestiae cupiditate dicta tenetur, tempora explicabo aliquid
                    cumque reiciendis beatae nulla eos voluptas eius saepe? Hic, iste porro voluptates unde ducimus sunt
                    quas earum pariatur quis! Necessitatibus ab rem similique laudantium voluptas libero sit vel iure,
                    dolorem qui ipsa deleniti magni beatae deserunt, error temporibus a fugit iusto molestias adipisci
                    dicta asperiores ratione inventore! Quo odit quidem maiores quia at dolores ipsam soluta distinctio
                    culpa ullam perferendis ducimus, hic, quisquam fuga earum, optio quam error dignissimos voluptatibus
                    officiis! Odio doloribus harum dignissimos nesciunt eius voluptate vero assumenda ducimus voluptas
                    consequatur quasi iusto sit placeat deleniti autem numquam officia quod, excepturi debitis maxime
                    incidunt deserunt architecto, porro facilis? Quis laboriosam est illum non perferendis minima quidem
                    voluptatibus, ullam consequuntur veritatis animi omnis eius iusto reiciendis amet temporibus, fuga
                    aspernatur eaque laudantium commodi beatae consequatur nisi repellat. Consectetur aspernatur,
                    corrupti exercitationem sequi eum ab, itaque distinctio alias maxime perspiciatis tempora quod.
                    Commodi blanditiis perferendis cumque ut perspiciatis quaerat atque officiis culpa corporis
                    asperiores dolorum saepe quia aspernatur, qui odio quidem ullam repellendus, est doloribus dolor
                    ratione recusandae et at. Hic enim ea accusamus fugiat quam, aliquam reiciendis omnis assumenda
                    itaque a pariatur magnam libero beatae reprehenderit sint repudiandae earum saepe esse facere minima
                    architecto sed delectus iste? Aliquam cumque similique ab, earum dolorum eum necessitatibus rem amet
                    vitae a. Debitis, quis possimus corporis sunt similique distinctio iste explicabo animi illo
                    quisquam quas itaque laborum eveniet officiis odit quod ducimus. Ipsam, cupiditate. Assumenda
                    consequatur veniam repudiandae laborum, error commodi magni amet! Totam sed optio molestiae vel
                    voluptate pariatur enim accusamus doloribus fuga repellendus explicabo similique, cumque, quo soluta
                    placeat culpa eum nihil! Explicabo, minus praesentium! Aut sint necessitatibus architecto debitis
                    veritatis. Eveniet eos suscipit neque! Mollitia corporis maxime labore quis sapiente nostrum hic
                    natus vero! Nam aut ex eligendi consequatur doloribus quisquam quam non veniam natus? Veniam ullam
                    molestias et impedit, beatae, aliquid ipsam quod, hic sed ea iure quis unde architecto vitae
                    asperiores magnam sit fugit ad quos accusamus accusantium velit soluta! Autem nesciunt nostrum est a
                    sequi, reprehenderit optio sit. Consectetur et eaque fugiat! Quisquam deserunt commodi et quasi,
                    ratione ad ullam veniam dolor voluptate dolore eos placeat corrupti, incidunt exercitationem at
                    autem illum nostrum rem? Assumenda sapiente, maiores ab veritatis dolore vero fugiat rerum quia
                    obcaecati illum quis placeat iusto porro nostrum totam magnam facilis ipsam magni modi quisquam
                    fugit consequatur tempora! Ipsum consectetur neque veritatis aut aliquid delectus esse architecto
                    voluptatibus vero necessitatibus sit non quasi temporibus commodi, doloremque animi sapiente quidem
                    ex velit ullam alias consequatur iure deserunt nostrum? Beatae earum quasi ex id, animi accusantium
                    nulla dicta modi dolore rerum doloribus hic molestias nemo consectetur aliquid! Eum sunt,
                    consequatur repellat inventore possimus quae. Iusto similique quasi incidunt, excepturi quod
                    possimus ullam officiis adipisci architecto, beatae amet reprehenderit commodi enim pariatur maxime
                    dicta eius, aspernatur assumenda blanditiis inventore molestias aut quae. Quisquam nemo praesentium
                    blanditiis. Excepturi nemo quo eligendi quae magnam minus repudiandae! Pariatur eveniet distinctio
                    nisi voluptas voluptatum ratione tempore officia quod recusandae tenetur? Molestiae voluptatibus
                    iusto quam nam, non expedita ipsa delectus odio ut dolorum nemo possimus veritatis iure
                    exercitationem ad voluptate consectetur nihil earum porro suscipit. Beatae deserunt consequuntur
                    amet consequatur architecto dolores consectetur fuga autem assumenda iste vero laborum, laboriosam
                    adipisci temporibus, odit id sunt, labore obcaecati? Debitis recusandae praesentium rerum enim id
                    dignissimos ducimus cupiditate exercitationem repudiandae placeat. Alias minus mollitia explicabo
                    saepe hic nostrum dolorem laboriosam id? Numquam labore totam aliquam officia facilis ex a odit,
                    dolor fugiat non libero animi assumenda cum aspernatur eaque provident officiis perferendis rem
                    neque delectus quaerat. Necessitatibus quidem temporibus nemo enim dolores in voluptatem atque
                    perspiciatis unde esse animi earum nesciunt ipsum repellat illum veritatis repudiandae asperiores
                    numquam voluptatibus similique ab, placeat ullam quas aspernatur. Dolores fugit impedit dolorum
                    temporibus nihil suscipit molestias saepe nobis facilis architecto, rerum, laboriosam veniam quod
                    officia asperiores. Facere pariatur deleniti similique consequuntur tenetur et sit odit eum dolorum
                    quaerat reprehenderit deserunt delectus autem nisi iure, officiis fugiat magnam ea, sed unde aperiam
                    in. Fugit nesciunt facere saepe molestias quisquam. Nisi quae, laudantium sunt sint est minima sit
                    provident eos illo quam molestiae corrupti totam accusamus, tenetur iste quod iure voluptatum.
                    Suscipit quidem possimus officia debitis excepturi sapiente blanditiis nulla consectetur, iure minus
                    est, voluptates ducimus praesentium beatae officiis iusto laudantium incidunt commodi molestiae ea
                    aspernatur? Dicta molestias sint similique aperiam deserunt accusantium tempora possimus aliquam hic
                    laudantium doloribus quas rerum eveniet itaque, quos facilis saepe assumenda? Corrupti nisi vitae
                    quibusdam qui deleniti laudantium maxime aspernatur nobis dolor eaque libero cumque ratione id,
                    inventore similique omnis voluptatem quidem. Facilis sunt ratione alias voluptas libero itaque,
                    quasi, tempore quos excepturi voluptatum aperiam incidunt ipsam nesciunt dicta eius laboriosam ad
                    amet voluptate aut qui rerum fuga eveniet quo perspiciatis. Asperiores praesentium dolores
                    recusandae ipsa saepe error eum voluptatem, nam, doloribus quas dolorum illo ducimus! Perspiciatis,
                    excepturi reiciendis laborum labore placeat voluptates aperiam eos illum vitae sapiente ut dolorem
                    tempore. Earum vero corporis eveniet ex explicabo omnis aliquid ut harum, recusandae quisquam rerum.
                    Id dolorem, officiis ipsa placeat laudantium blanditiis doloribus ipsam quos vero ea quam maxime.
                    Nulla illum et, a, laudantium ipsa, earum id fuga ullam natus molestiae cupiditate cumque beatae
                    eligendi deleniti ipsam dolorum voluptates eius non mollitia est fugit quo? Placeat, dolorem,
                    ducimus, temporibus facere et repellat corporis officia quas veniam beatae quae debitis. Tempora
                    suscipit laboriosam cumque fugit qui libero architecto dolor quo harum? Molestiae, cumque natus
                    delectus veniam rerum harum neque voluptate possimus id illo ut omnis? Architecto, ducimus delectus,
                    quos nemo nulla reprehenderit doloribus eos deserunt dolorum repellendus provident asperiores. Quod
                    recusandae voluptas optio cupiditate totam ipsam maiores ex repellat iure. Sed nostrum quo in sint
                    aliquid excepturi, quidem quisquam a magni nam magnam facilis velit officia. Eveniet praesentium,
                    autem consequatur cupiditate vitae rem commodi fugit. Pariatur consequuntur itaque voluptatem ipsam
                    aliquid optio minus adipisci, rerum quo exercitationem? Fugit eum voluptatum minima, quasi
                    asperiores vero velit repudiandae magnam dolorum debitis ea. Dicta non quidem eum, ipsam temporibus
                    quo tempora repudiandae ea inventore. Iure velit perferendis modi provident vitae eaque delectus
                    dolores adipisci consectetur in dolorum id quo laborum officiis ad maiores quos ipsam, aut veniam.
                    Fuga repellendus et tempore voluptatibus consequuntur veniam, provident neque deleniti obcaecati?
                    Nulla atque, illum explicabo laboriosam necessitatibus, officiis eligendi, vel inventore molestiae
                    consequuntur optio reiciendis labore corrupti ducimus sed cum quibusdam autem quia iure! Dolorum
                    voluptate minima porro vel dolore, facere in, tempore quod, commodi nisi sapiente modi magni! Amet,
                    unde nulla! Maiores praesentium architecto natus sed magni unde repudiandae odio esse iusto culpa
                    nostrum repellendus aliquid numquam quisquam eum aspernatur quasi libero deserunt, eos inventore
                    mollitia? Fuga molestias est animi optio, dolores itaque expedita asperiores impedit vitae
                    aspernatur dolorum debitis laudantium quas, iure corporis? Error, quod. Eos recusandae corporis amet
                    quisquam omnis molestias porro excepturi, et cupiditate? Aliquid, veritatis voluptas, molestias
                    corrupti eligendi est quaerat consectetur amet accusamus earum quae saepe. Accusantium facilis
                    cupiditate, ipsam delectus dolor cum dolores repellat minus, numquam consequuntur laboriosam ratione
                    id nesciunt voluptate labore quidem? Iure velit numquam ullam, quisquam repellat eveniet nisi rem
                    vel quae a voluptates optio odit ad sunt, debitis incidunt doloribus expedita consequuntur cumque
                    rerum, enim quas. Nihil quo fugiat quisquam magni perspiciatis laboriosam quasi? Culpa ratione id
                    nobis laborum facere nostrum dolor et placeat at tempora possimus deserunt excepturi ea eius
                    consequuntur porro nemo, reiciendis magni vel officiis, libero quidem non. Fugiat, nostrum ad?
                    Necessitatibus hic illo, sint minima nisi eum obcaecati dolor, asperiores in sunt aut amet expedita
                    dolores incidunt. Cupiditate ratione tenetur esse suscipit provident. Voluptatem deserunt eligendi
                    reprehenderit molestiae beatae tempora voluptates vel possimus inventore soluta quos earum nesciunt
                    deleniti minus quibusdam eius ipsam, magnam ex perferendis excepturi a! Repellat numquam doloribus
                    possimus alias nulla, tempora ipsum placeat eum nam perferendis! Itaque, libero expedita fugit
                    repudiandae aut velit quas neque. Iure quas, quibusdam dolore ab illo sequi quam cupiditate, cum
                    fugiat repellendus placeat perspiciatis maiores, velit natus rerum quidem. Ipsum neque, sint itaque
                    culpa, inventore facere et hic odit atque quam optio nobis, vitae reprehenderit. Earum asperiores
                    provident ipsa. Accusamus sunt saepe nesciunt, est ea repellat doloremque aperiam fuga error
                    maiores. Voluptatum quis nemo laboriosam perferendis cum aliquam voluptatibus eos esse odit et,
                    doloremque aliquid, fugit consequatur officia in provident ipsam sint rem quae aut voluptates
                    numquam! Nobis aliquam, a perspiciatis praesentium impedit, architecto ratione commodi beatae quis
                    atque, delectus neque deserunt placeat voluptate doloribus quos quam! Sequi commodi deleniti nemo
                    quidem aperiam nostrum quaerat quis, id in aut similique molestias autem recusandae hic minus nulla,
                    molestiae voluptate. Cupiditate, laudantium numquam corrupti voluptates amet excepturi! Nisi quia
                    quis nihil? Illum placeat voluptates quibusdam aperiam harum, mollitia velit quisquam aspernatur
                    alias quidem hic voluptatum nihil. Iure cum suscipit animi molestias commodi reprehenderit, omnis
                    pariatur magnam consectetur id minima, voluptas odio quae architecto consequuntur dolore maxime
                    numquam enim, dicta ex voluptates quia unde sed optio. Voluptas enim velit distinctio amet culpa
                    cum, optio consectetur, labore tenetur alias nesciunt quisquam fugiat est aliquam ab molestiae
                    facere sunt officiis minus ducimus aspernatur dolorum rerum, voluptate ipsum. Aliquam molestiae
                    obcaecati exercitationem doloremque. Officia fuga sequi molestias. Veritatis eum sint eligendi totam
                    doloremque! Possimus fuga minima quaerat natus inventore voluptates omnis ducimus eius qui, officia
                    quasi, nobis neque tempore illum consectetur assumenda quod iusto sint hic similique enim numquam.
                    Nemo fugiat mollitia vitae veritatis velit unde doloribus animi repellendus! Ratione illo cumque
                    enim earum at tenetur maiores libero dolor aspernatur porro rem laboriosam, vitae unde nostrum quod
                    quisquam voluptas alias consequuntur aliquam error! Dolores soluta nulla excepturi eum harum
                    voluptas officiis recusandae eos quasi! Alias nobis optio deserunt officiis in ullam nesciunt aut
                    obcaecati unde libero, laboriosam iusto magnam ipsum? Eligendi delectus ducimus iste voluptate
                    deserunt quae perspiciatis dolore repellendus assumenda, officia ab numquam quidem vero sed, dolores
                    reprehenderit ipsam natus. Suscipit pariatur nulla accusamus qui explicabo et maxime unde molestiae
                    recusandae in optio accusantium, quaerat reprehenderit placeat natus praesentium quos dolore
                    cupiditate velit modi earum impedit voluptates eveniet? Soluta quos odio eveniet placeat dicta
                    officia, cum, obcaecati rerum nesciunt illum laudantium sequi veniam consectetur exercitationem.
                    Velit amet maxime facilis labore debitis vitae impedit fuga sequi in a, cupiditate minus doloribus
                    odit ipsa odio, aspernatur ab quidem repellendus! Expedita minima, quos maxime, tempore porro
                    deserunt architecto quis, repudiandae vel assumenda ducimus nesciunt sint. Ipsa quidem quia autem
                    itaque nesciunt architecto excepturi aliquid, error deleniti alias quam omnis recusandae dolores
                    obcaecati voluptate repudiandae veniam harum repellendus fugiat amet? Expedita cumque eaque
                    praesentium fuga mollitia alias, ut voluptatibus assumenda, laudantium dolores reprehenderit
                    deleniti quod incidunt. Id qui quae porro ullam illo odit eos enim suscipit perspiciatis quo
                    voluptate hic non at neque, rem, magni eum, assumenda excepturi. Cupiditate, expedita omnis
                    veritatis in perspiciatis delectus ipsa reiciendis facere? Hic est sequi, quasi sit vero sed eos
                    maiores enim harum accusantium quia beatae, doloribus explicabo amet voluptates dolore at voluptatum
                    reprehenderit nisi illum necessitatibus neque a voluptate. Velit dolor totam corporis in error aut
                    iure animi. Sed, molestiae hic, vero quia a dicta culpa voluptates libero corporis aperiam
                    laudantium eos repellat dolor unde dolorem consequuntur expedita veniam eveniet tenetur cupiditate,
                    sit accusamus non rerum? Nulla esse pariatur temporibus libero ducimus iure deserunt, eaque officia
                    cum distinctio fugit quis nisi rem officiis earum sapiente iste commodi veritatis eligendi. Quam
                    magni facilis cupiditate id non repellat dolores aut laborum, sint enim temporibus inventore ducimus
                    eum vel, mollitia dicta quibusdam atque quisquam nostrum esse, at illo consequuntur odit. Culpa, ut
                    voluptates, vel facere possimus, hic suscipit nihil nobis doloribus rem reiciendis nemo aperiam et
                    laboriosam ratione veniam tempore? Dolor nisi neque explicabo molestias corrupti accusamus
                    blanditiis dolorum error quis aperiam. Alias deleniti expedita libero reprehenderit eius mollitia
                    molestiae accusamus iusto? Quaerat non cumque ex alias fuga maxime. Voluptatum saepe unde id
                    inventore quisquam? Corporis laudantium eligendi sunt! Nihil ullam asperiores tenetur eveniet saepe
                    placeat cupiditate voluptatibus, adipisci, alias harum deserunt nobis numquam quidem dolore veniam
                    accusantium non facilis labore! Consequatur, eum dolor quos labore quis placeat minima, velit ad
                    praesentium atque magni laudantium quae, soluta earum corporis qui alias ea itaque sit illo?
                    Exercitationem voluptatum culpa, architecto sequi commodi in obcaecati quibusdam eligendi corrupti,
                    voluptatibus facere temporibus. Similique hic neque quia? Alias repellat optio fugiat saepe corrupti
                    neque nihil tenetur, adipisci sint atque magnam quia illo perferendis dolor explicabo nobis id in
                    praesentium quaerat magni dolores quam eum. Error accusantium distinctio veritatis? Possimus,
                    numquam! Culpa inventore accusantium eius quod id voluptates maxime pariatur. Eius, necessitatibus.
                    Non corporis sequi, eveniet et modi maiores recusandae perspiciatis ullam facere qui neque ut eaque
                    pariatur explicabo dignissimos consequuntur illum omnis magni reprehenderit rem nam? Nostrum velit
                    cum, placeat, assumenda dolorem doloremque iusto temporibus omnis nam soluta minima sit nisi
                    accusamus. Modi, laborum dolor voluptatibus ullam distinctio repudiandae excepturi in. Eveniet
                    accusamus nesciunt maiores! Amet hic, alias quas, tenetur perspiciatis ut voluptate nulla illo
                    aliquam sunt cum! Quis sequi laborum itaque perferendis porro commodi distinctio consectetur dolore,
                    quia deserunt possimus iusto, repellendus nemo et aut tempora.
                    Repellendus ad laboriosam minima ducimus doloribus maiores enim ipsum explicabo quo iure sequi, ipsa
                    delectus? Nemo ipsa ab, expedita aliquid tempore incidunt amet iste quam sequi, corporis saepe, fuga
                    ducimus necessitatibus sint! Illo quisquam sapiente harum earum, quia minus in neque fuga sunt!
                    Laboriosam molestiae natus nam ducimus, excepturi nisi labore accusantium explicabo aspernatur,
                    expedita facere tenetur possimus provident exercitationem eos magnam asperiores unde voluptate
                    eligendi! Aspernatur sapiente maxime reprehenderit blanditiis consectetur alias amet enim asperiores
                    eius.
                </div>
            </div>
        </div>

        @include('partials.javascript')

        <script>
            $(function () {
            function count($this) {
                var current = parseInt($this.html(), 10);
                current = current + 50; /* Where 50 is increment */
        
                $this.html(++current);
                if (current > $this.data("count")) {
                    $this.html($this.data("count"));
                } else {
                    setTimeout(function () {
                        count($this);
                    }, 5);
                }
            }
        
            $(".numero").each(function () {
                $(this).data("count", parseInt($(this).html(), 10));
                $(this).html("0");
                count($(this));
            });
        });
        </script>

    </body>

</html>

{{-- <div class="text-center">
    <p class="text-dark text-uppercase">front page</p>
    <a href="{{ route('login') }}">Login</a>
</div> --}}


