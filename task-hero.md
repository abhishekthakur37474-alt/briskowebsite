Build a premium, cinematic and highly polished HERO SECTION for a pizza brand called "Brisko Pizza".

IMPORTANT:
Do NOT create a normal Bootstrap carousel.
Do NOT create a basic left-to-right image slider.
Do NOT make it look like a generic restaurant template.

The hero must feel like a premium food advertisement with a cinematic product showcase.

==================================================
BRAND
==================================================

Brand Name:
Brisko Pizza

Brand Positioning:
100% Pure Vegetarian
No Onion, No Garlic

Main Brand Tagline:
"Bite into Happiness"

Brand Style:
- Premium
- Modern
- Cinematic
- Minimal
- Appetizing
- High-end food advertising
- Black / white / red visual identity

==================================================
HERO CONTENT
==================================================

Small eyebrow text:

"100% PURE VEGETARIAN"

Main headline:

"Bite into
Happiness"

Supporting text:

"Freshly crafted vegetarian pizzas made with quality
ingredients, bold flavours and a whole lot of happiness."

CTA buttons:

"ORDER NOW"

"GET FRANCHISE"

Do not change the tagline "Bite into Happiness".

==================================================
HERO LAYOUT
==================================================

Create a full-width, premium hero section.

Desktop layout:

LEFT:
- Eyebrow text
- Large "Bite into Happiness" heading
- Short description
- CTA buttons

RIGHT / CENTER-RIGHT:
- Large cinematic pizza showcase
- Pizza should be the main visual focus
- Large transparent pizza images floating naturally
- Plenty of negative space around the pizza

The hero should feel balanced and spacious.

Do not overcrowd the hero with too many decorative elements.

==================================================
CINEMATIC PIZZA SHOWCASE
==================================================

The most important part of this hero is the pizza transition.

There are 4 pizza products:

01 — Farmhouse Pizza
02 — Cheese Pizza
03 — Corn Pizza
04 — Paneer Pizza

The pizzas must appear one after another:

Farmhouse
↓
Cheese
↓
Corn
↓
Paneer
↓
Farmhouse
↓
repeat infinitely

This must NOT feel like a traditional carousel.

Instead, create a cinematic product showcase.

Imagine a premium pizza commercial where one pizza is presented to the viewer and then smoothly replaced by another pizza.

==================================================
PIZZA TRANSITION ANIMATION
==================================================

Each pizza should enter the scene from a slightly deeper position.

When a pizza enters:

- Start slightly smaller
- Start slightly transparent
- Start slightly behind the main depth plane
- Slightly rotate in 3D
- Move toward the viewer
- Scale up smoothly
- Increase opacity
- Reduce blur
- Settle into the main position

Once settled:

- Keep the pizza gently floating
- Add very subtle rotation
- Add subtle vertical movement
- Maintain realistic depth

When leaving:

- Slightly scale down
- Move backward
- Slightly rotate
- Fade out
- Add subtle blur
- Move slightly sideways
- The next pizza should enter during the same transition

The outgoing and incoming pizzas should overlap during the transition.

The result should feel like:

"camera movement + depth + product presentation"

NOT:

"slide 1 → slide 2"

==================================================
3D FEEL
==================================================

Use CSS 3D transforms and perspective.

Use:

- perspective()
- translate3d()
- translateZ()
- rotateX()
- rotateY()
- scale()
- opacity
- filter blur()
- smooth shadows

The pizza should NOT continuously spin 360 degrees.

Use subtle cinematic 3D movement instead.

The pizza should feel like a physical object floating in a premium studio environment.

==================================================
PRODUCT INFORMATION
==================================================

Display the currently active pizza information near the pizza.

Example:

01 / 04
Farmhouse Pizza

When pizza changes:

02 / 04
Cheese Pizza

03 / 04
Corn Pizza

04 / 04
Paneer Pizza

The number and product name must transition smoothly along with the pizza.

Do not instantly replace the text.

Use a short fade / slide / blur transition.

==================================================
VISUAL ENVIRONMENT
==================================================

Background:

- Deep black / charcoal
- Very subtle red ambient lighting
- Very subtle gradients
- Premium studio atmosphere
- Soft shadows
- Subtle grain/noise if appropriate

Do NOT use:
- Bright colorful gradients
- Cartoon graphics
- Excessive glow
- Neon effects
- Cheap-looking animations

The pizza must remain the visual focus.

==================================================
PIZZA ASSETS
==================================================

Use transparent PNG or WebP pizza images.

The pizza itself should have:
- Realistic food photography
- High resolution
- Clean transparent edges
- Natural shadows
- Realistic cheese
- Fresh toppings
- Premium restaurant photography

Do not place the pizza inside a rectangular image/card.

The transparent pizza should appear directly inside the hero scene.

Expected assets:

assets/images/pizza/
    farmhouse.webp
    cheese.webp
    corn.webp
    paneer.webp

If actual assets are not available yet, create clearly named placeholders and structure the code so the assets can easily be replaced later.

==================================================
CURSOR INTERACTION
==================================================

On desktop, make the pizza showcase react subtly to cursor movement.

When cursor moves left:
- Pizza slightly tilts left
- Decorative ingredients move with subtle parallax

When cursor moves right:
- Pizza slightly tilts right
- Decorative elements move in the opposite depth layer

When cursor moves vertically:
- Slight vertical parallax

The movement must be extremely smooth.

Use interpolation / easing.

Do NOT make the pizza follow the cursor aggressively.

The cursor effect should feel like premium interactive product photography.

==================================================
MOBILE BEHAVIOR
==================================================

The website must be fully responsive.

Desktop:
- Text on left
- Pizza showcase on right

Tablet:
- Reduce pizza size
- Reduce decorative elements
- Maintain readable text

Mobile:
- Stack the hero vertically
- Text should remain readable
- Pizza should be centered
- Pizza must NEVER be cropped
- Remove unnecessary decorative elements
- Reduce 3D movement
- Use touch/parallax if practical
- Otherwise use subtle automatic floating animation

There must be:
- No horizontal scrolling
- No overflow issues
- No broken layout
- No cropped CTA buttons
- No cropped pizza

==================================================
ANIMATION TIMING
==================================================

Each pizza should remain visible for approximately:

3–4 seconds

Transition duration:

1–1.5 seconds

The overall animation should be slow, smooth and cinematic.

Avoid fast or flashy transitions.

Use professional easing curves.

Suggested easing:

power3.inOut
or
expo.inOut

==================================================
TECHNOLOGY
==================================================

The existing website uses:

PHP
HTML
CSS
Bootstrap
JavaScript

Keep compatibility with this existing stack.

Use:

GSAP

for high-quality animations.

Use CSS perspective / transform3d for the 3D visual effect.

Do NOT introduce React.

Do NOT convert the website into React.

Do NOT require a backend for the hero animation.

Three.js is NOT required for the first implementation.

Only use Three.js if actual 3D models are required.

The preferred implementation is:

HTML
CSS
JavaScript
GSAP
transparent WebP/PNG pizza assets

==================================================
PERFORMANCE
==================================================

The hero must be performant.

Optimize:
- image loading
- animation rendering
- GPU transforms
- memory usage

Prefer:
transform
opacity

instead of animating:
top
left
width
height

Use will-change carefully.

Do not create unnecessary animation loops.

Pause/reduce animations when the page is not visible if appropriate.

Support:

prefers-reduced-motion

When reduced motion is enabled:
- disable major 3D transitions
- show the active pizza normally
- retain basic product switching if appropriate

==================================================
HERO FALLBACK
==================================================

If animation fails or JavaScript is unavailable:

Show:
- A static high-quality pizza image
- Hero text
- CTA buttons

The website must still look professional.

==================================================
HEADER INTEGRATION
==================================================

The hero should work with the existing Brisko Pizza header.

Header should remain readable over the hero.

Do not redesign the entire website.

Only create/update the hero section and the required CSS/JS.

==================================================
VISUAL HIERARCHY
==================================================

Priority:

1. "Bite into Happiness"
2. Pizza product
3. "100% Pure Vegetarian"
4. CTA buttons
5. Product information
6. Decorative elements

Do not let decorative elements compete with the headline or pizza.

==================================================
FINAL EXPERIENCE
==================================================

When a visitor opens the website:

The hero immediately feels premium.

They see:

100% PURE VEGETARIAN

Bite into
Happiness

Freshly crafted vegetarian pizzas...

[ ORDER NOW ] [ GET FRANCHISE ]

And on the right:

A large realistic Farmhouse pizza.

After a few seconds:

Farmhouse smoothly transitions into Cheese Pizza.

Then:

Cheese → Corn

Then:

Corn → Paneer

Then:

Paneer → Farmhouse

The transitions use:
- depth
- scale
- rotation
- blur
- opacity
- subtle parallax
- cinematic easing

The visitor should feel like they are watching a premium pizza advertisement rather than interacting with a normal website carousel.

FINAL REQUIREMENT:

Make the implementation production-ready, clean, modular and responsive.

Keep the hero visually premium but lightweight.

Do not add unnecessary libraries or unnecessary UI elements.