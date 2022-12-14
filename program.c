#include <stdio.h>
#include <stdlib.h>
#include <time.h>

void delay(int ms)
{
    clock_t start_time = clock();
    while (clock() < start_time + ms);
}

int main() {
	srand(time(0));

	int lower = 0;
	int upper = 100;
	int value = 0;
	while (1) {
		value = (rand() % (upper - lower + 1)) + lower;
		printf("%d\n", value);
		// TODO: send value to server/database
		delay(1000);
	}

	return 0;
}