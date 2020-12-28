<template>
  <q-layout view="lHh Lpr lFf">
    <q-header elevated>
      <q-toolbar>
        <q-btn
          flat
          dense
          round
          icon="menu"
          aria-label="Menu"
          @click="leftDrawerOpen = !leftDrawerOpen"
        />

      </q-toolbar>
      <p class="q-pl-md q-pt-md">Coinbook</p>
      <p class="q-ml-md">{{ today }}</p>
      <q-img
        src="../assets/winter_1.jpg"
        class="header-image absolute-top" />
    </q-header>

    <q-drawer
        v-model="leftDrawerOpen"
        show-if-above
        :width="260"
        :breakpoint="800"
      >
        <q-scroll-area style="height: calc(100% - 150px); margin-top: 150px; border-right: 1px solid #ddd">
          <q-list padding>
            <q-item active clickable v-ripple>
              <q-item-section avatar>
                <q-icon name="star" />
              </q-item-section>
              <q-item-section>
                Star
              </q-item-section>
            </q-item>
          </q-list>
        </q-scroll-area>

        <q-img class="absolute-top" src="../assets/mech.jpg" style="height: 150px">
          <div class="absolute-bottom bg-transparent">
            <q-avatar size="56px" class="q-mb-sm">
              <img src="https://cdn.quasar.dev/img/boy-avatar.png">
            </q-avatar>
            <div class="text-weight-bold">Mateusz Tryniszewski</div>
            <div>github</div>
          </div>
        </q-img>
      </q-drawer>

    <q-page-container>
      <router-view />
    </q-page-container>

    <div class="fixed-bottom justify-center lt-sm bg-blue-grey-1">
      <q-list class="row justify-around">
        <q-item clickable class="q-pa-md">
          <q-item-section>
            <q-icon size="lg" name="fas fa-home text-light-blue-7" />
          </q-item-section>
        </q-item>
        <q-item clickable class="q-pa-md">
          <q-item-section>
            <q-icon size="lg" name="fas fa-money-bill text-blue-grey-10" />
          </q-item-section>
        </q-item>
        <q-item clickable class="q-pa-md">
          <q-item-section>
            <q-icon size="lg" name="far fa-credit-card text-blue-grey-10" />
          </q-item-section>
        </q-item>
      </q-list>
    </div>

  </q-layout>
</template>

<script>
import { date } from 'quasar'

export default {
  name: 'MainLayout',
  data() {
    return {
      leftDrawerOpen: false
    }
  },

  computed: {
    today() {
      const timeStamp = Date.now()
      const formattedString = date.formatDate(timeStamp, 'dddd - DD MM')
      return formattedString
    }
  }
}
</script>

<style lang="scss">
  .q-header{
    height: 150px;
  }
  .header-image {
    height: 100%;
    z-index: -1;
    opacity: 0.03;
  }
</style>
