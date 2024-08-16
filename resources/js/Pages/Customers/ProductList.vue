<template>
  <main-layout>
    <div class="bg-gray-100">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
          <h2 class="text-2xl font-bold text-gray-900">Collections</h2>

          <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
            <div v-for="callout in callouts" :key="callout.name" class="group relative">
              <div
                class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64"
              >
                <img
                  :src="callout.imageSrc"
                  :alt="callout.imageAlt"
                  class="h-full w-full object-cover object-center"
                />
              </div>
              <h3 class="mt-6 text-sm text-gray-500">
                <a :href="callout.href">
                  <span class="absolute inset-0" />
                  {{ callout.name }}
                </a>
              </h3>
              <p class="text-base font-semibold text-gray-900">
                {{ callout.description }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-white">
      <div
        class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8"
      >
        <div>
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
            Technical Specifications
          </h2>
          <p class="mt-4 text-gray-500">
            The walnut wood card tray is precision milled to perfectly fit a stack of
            Focus cards. The powder coated steel divider separates active cards from new
            ones, or can be used to archive important task lists.
          </p>

          <dl
            class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8"
          >
            <div
              v-for="feature in features"
              :key="feature.name"
              class="border-t border-gray-200 pt-4"
            >
              <dt class="font-medium text-gray-900">{{ feature.name }}</dt>
              <dd class="mt-2 text-sm text-gray-500">{{ feature.description }}</dd>
            </div>
          </dl>
        </div>
        <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
          <img
            src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-01.jpg"
            alt="Walnut card tray with white powder coated steel divider and 3 punchout holes."
            class="rounded-lg bg-gray-100"
          />
          <img
            src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-02.jpg"
            alt="Top down view of walnut card tray with embedded magnets and card groove."
            class="rounded-lg bg-gray-100"
          />
          <img
            src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-03.jpg"
            alt="Side of walnut card tray with card groove and recessed card area."
            class="rounded-lg bg-gray-100"
          />
          <img
            src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-04.jpg"
            alt="Walnut card tray filled with cards and card angled in dedicated groove."
            class="rounded-lg bg-gray-100"
          />
        </div>
      </div>
    </div>

    <div class="bg-white">
      <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">NEW ARRIVAL'S</h2>

        <div
          class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8"
        >
          <div v-for="products in products" :key="products.id" class="group relative">
            <div
              class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80"
            >
              <img
                :src="products.image"
                class="h-full w-full object-cover object-center lg:h-full lg:w-full"
              />
            </div>
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a :href="`/detail/${products.id}`">
                    <span aria-hidden="true" class="absolute inset-0" />
                    {{ products.name }}
                  </a>
                </h3>
              </div>
              <p class="text-sm font-medium text-gray-900">{{ products.price }} FCFA</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main-layout>
</template>

<script setup>
import MainLayout from "../Layouts/MainLayout.vue";

const callouts = [
  {
    name: "Desk and Office",
    description: "Work from home accessories",
    imageSrc: "https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg",
    imageAlt:
      "Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug.",
    href: "#",
  },
  {
    name: "Self-Improvement",
    description: "Journals and note-taking",
    imageSrc: "https://tailwindui.com/img/ecommerce-images/home-page-02-edition-02.jpg",
    imageAlt:
      "Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant.",
    href: "#",
  },
  {
    name: "Travel",
    description: "Daily commute essentials",
    imageSrc: "https://tailwindui.com/img/ecommerce-images/home-page-02-edition-03.jpg",
    imageAlt: "Collection of four insulated travel bottles on wooden shelf.",
    href: "#",
  },
];

const features = [
  { name: "Origin", description: "Designed by Good Goods, Inc." },
  {
    name: "Material",
    description:
      "Solid walnut base with rare earth magnets and powder coated steel card cover",
  },
  { name: "Dimensions", description: '6.25" x 3.55" x 1.15"' },
  { name: "Finish", description: "Hand sanded and finished with natural oil" },
  { name: "Includes", description: "Wood card tray and 3 refill packs" },
  {
    name: "Considerations",
    description: "Made from natural materials. Grain and color vary with each item.",
  },
];

defineProps({
  products: Object,
});
</script>

<style scoped>
/* Votre style ici */
</style>
