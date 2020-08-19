import random

game_running = True

while game_running:
    print ()
    print ("Here is your chance of winning a role!")

    secret_number = random.randint(1,9)

    guess_number = -1

    while guess_number != secret_number:
        
        print ()
        guess = input("Please enter a number for a chance to win a prize: ")

        if guess == "quit":
            game_running = False
            break

        else:
            guess_number = int(guess)

    
            if guess_number == secret_number:
                print()
                print("CONGRATS YOU JUST WON THE ELITE ROLE!")
                game_running = False
                break

            if guess_number >> secret_number:
                print()
                print("Looks like you didn't earn anything..Good luck next time...")
                game_running = False
                break

            if guess_number << secret_number:
                print()
                print("Looks like you didn't earn anything..Good luck next time...")
                game_running = False
                break

print()
print("Thanks for playing!")

