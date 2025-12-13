import turtle
import random
# Setup screen
turtle.bgcolor(&quot;black&quot;)
turtle.speed(0)
turtle.hideturtle()
colors = [&quot;red&quot;, &quot;orange&quot;, &quot;yellow&quot;, &quot;green&quot;, &quot;blue&quot;, &quot;purple&quot;, &quot;white&quot;]
# Draw 100 random shapes
for _ in range(100):

turtle.penup()
x = random.randint(-300, 300)
y = random.randint(-250, 250)
turtle.goto(x, y)
turtle.pendown()
color = random.choice(colors)
turtle.color(color)
size = random.randint(10, 80)
sides = random.randint(3, 6)
for _ in range(sides):
turtle.forward(size)
turtle.right(360 / sides)
turtle.done()