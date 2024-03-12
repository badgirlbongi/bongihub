import pygame
from pygame.locals import *

class Snake:
    def __init__(self, parent_screen):
        self.parent_screen = parent_screen
        self.block = pygame.image.load("python/projects/snake_game/resources/block.jpg").convert()
        self.x = 100
        self.y = 100

    def draw(self):
        self.surface.fill((110, 110, 5))
        self.parent_screen.blit(self.block, (self.x, self.y))
        pygame.display.flip()

class Game:
    def __init__(self):
        pygame.init()
        self.surface = pygame.display.set_mode((500,500))
        self.surface.fill((110, 110, 5))
        self.snake = Snake(self.surface)
        self.snake.draw()


    def run(self):
        pass

if __name__ == "__main__":
    game = Game()
    game.run()

    pygame.display.flip()

    running = True

    while running:
        for event in pygame.event.get():
            if event.type == KEYDOWN:
                if event.key == K_ESCAPE:
                    running = False

                    if event.key == K_UP:
                        block_y -= 10
                        draw_block()
                    if event.key == K_DOWN:
                        block_y += 10
                        draw_block()

                    if event.key == K_LEFT:
                        block_x -= 10
                        draw_block()
                    if event.key == K_RIGHT:
                        block_x += 10
                        draw_block()

            elif event.type == QUIT:
                running = False


    
