@verbatim
    <v-navigation-drawer app>
        <v-list-item>
            <v-list-item-content>
                <v-list-item class="px-2">
                    <v-img
                    scale="1"
                    height="150"
                    width="200"
                    src="https://laravelnews.imgix.net/images/vue-spa-with-laravel.png?ixlib=php-3.3.1"
                    ></v-img>
                </v-list-item>
                <v-list-item-title class="text-h6 px-2 py-2">
                    Front Practica
                </v-list-item-title>
                <v-list-item-subtitle class="px-2">
                    Laravel y Vue.js
                </v-list-item-subtitle>
            </v-list-item-content>
        </v-list-item>

        <v-divider></v-divider>

        <v-list
            dense
            nav
        >
            <v-list-item
            v-for="n in 3"
            :key="n"
            link
            >
            <v-list-item-icon>
                <v-icon>mdi-folder</v-icon>
            </v-list-item-icon>

            <v-list-item-content>
                <v-list-item-title>Xd</v-list-item-title>
            </v-list-item-content>
            </v-list-item>
        </v-list>
    </v-navigation-drawer>
@endverbatim