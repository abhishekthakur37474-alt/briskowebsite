Create a premium cinematic pizza product animation for the Brisko Pizza website hero section.

IMPORTANT:
This must NOT behave like a normal image carousel.
Do NOT use fade-in, fade-out, opacity transitions, crossfade, or simple image swapping.

I have 4 separate high-resolution transparent PNG/WebP pizza images:
1. Farmhouse Pizza
2. Cheese Pizza
3. Corn Pizza
4. Paneer Pizza

The animation should work like a physical product entering and leaving the scene.

ANIMATION FLOW:

For each pizza:

1. PIZZA IN
   - The next pizza starts completely outside the visible hero area on the RIGHT side.
   - It physically moves from RIGHT → CENTER.
   - While entering, it should start slightly smaller and farther away.
   - Gradually increase its scale as it approaches the center.
   - Add a subtle 3D rotation during movement.
   - Use translate3d() / perspective / rotateY() / scale().
   - The movement should feel smooth, cinematic and premium.

2. CENTER HOLD
   - Once the pizza reaches the exact center of the pizza showcase area, it becomes the main hero product.
   - It should remain completely stable and clearly visible for approximately 2.5–3 seconds.
   - During this time there should be NO movement and NO fading.
   - Keep the pizza large and visually dominant.

3. PIZZA OUT
   - After the 2.5–3 second hold, the same pizza physically moves OUT toward the LEFT side.
   - It should gradually become slightly smaller as it moves away.
   - Add subtle rotateY / rotateZ movement.
   - Continue moving until it completely leaves the visible showcase area.
   - Do NOT fade it out.

4. NEXT PIZZA
   - While the previous pizza is moving out, the next pizza enters from the RIGHT.
   - The two pizzas may briefly overlap spatially during the transition.
   - The incoming pizza should feel like it is physically replacing the previous pizza.
   - There must never be an empty blank state between pizzas.

SEQUENCE:

Farmhouse
→ Cheese
→ Corn
→ Paneer
→ Farmhouse
→ repeat infinitely

TIMING:

Pizza enters: approximately 1.0–1.2 seconds
Center hold: approximately 2.5–3 seconds
Pizza exits: approximately 1.0–1.2 seconds

Total cycle should feel around 5 seconds per pizza.

VISUAL STYLE:

- Premium pizza-brand website
- Cinematic product showcase
- Realistic food photography
- Smooth 60fps motion
- Strong depth perception
- Natural momentum/easing
- No cheap-looking carousel effect
- No abrupt movement
- No flashing
- No opacity fade
- No blur that hides the pizza
- Pizza must remain sharp and high quality

POSITIONING:

Desktop:
- Pizza showcase should occupy the right/center-right side of the hero.
- Pizza should become large when centered.
- Keep the pizza fully visible without unwanted cropping.

Mobile:
- Move the pizza showcase below the hero text.
- Maintain the same physical IN → HOLD → OUT animation.
- Scale the pizza down appropriately.
- Ensure the pizza never goes outside the mobile viewport incorrectly.

TECHNICAL IMPLEMENTATION:

Use HTML + CSS + JavaScript.
Use CSS 3D transforms and/or GSAP if GSAP is available.

Prefer:
transform:
translate3d(x, y, z)
scale()
rotateY()
rotateZ()

Use perspective on the showcase container.

Use separate DOM elements for all four pizzas instead of replacing the image source of one element.

Each pizza must have its own animation state:
- entering
- active/center
- exiting
- waiting

Use GPU-friendly transform and opacity properties, but DO NOT use opacity as the main transition mechanism.

The pizza images have transparent backgrounds, so only the pizza itself should be visible.

The animation should feel like physical objects moving through a 3D space.

CRITICAL:
Do not implement this as:
- fade transition
- crossfade
- normal Bootstrap carousel
- Swiper carousel
- changing src every few seconds
- simple scale animation
- simple left/right slide

It should visually look like:
RIGHT → CENTER → HOLD → LEFT

with the next pizza simultaneously coming:
RIGHT → CENTER

Make the movement continuous, premium, and cinematic.

Also add:
- pause animation when the browser tab is inactive if practical
- respect prefers-reduced-motion
- responsive sizing
- no layout shift
- smooth infinite looping
