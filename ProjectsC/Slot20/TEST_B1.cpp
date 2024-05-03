#include <stdio.h>

int main() {
	int size;
	printf("Enter array size: ");
	scanf("%d", &size);
	int arr[size];
	
	//input number
	for (int i = 0; i < size; i++) {
		printf("Enter numbers array[%d]:", i);
		scanf("%d", &arr[i]);
	}
	
	//search min number in array
	int minNum;
	for (int i = 0; i < size; i++) {
		if (arr[i] % 2 == 0) {
			if (i == 0) {
				minNum = arr[i];
			} else {
				if (minNum > arr[i]) {
					minNum = arr[i];
				}
			}
		}
	}
	
	//display min number
	printf("\nSmallest even number is: %d", minNum);
	
}
