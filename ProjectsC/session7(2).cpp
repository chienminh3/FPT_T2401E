#include <stdio.h>

int main() {
	int sizeArray, search, count, temp;
	printf("enter array size: ");
	scanf("%d", &sizeArray);
	int array[sizeArray];
	
	for (int i = 0; i < sizeArray; i++) {
		printf("enter number %d: ", i);
		scanf("%d", &array[i]);
	}
	printf("\n");
	
	for (int i = 0; i < sizeArray; i++) {
		printf("%d ", array[i]);
	}
	
	int temp2 = sizeArray;
	sizeArray = sizeArray - 1;
	for (int i = 0; i < sizeArray; i++) {
		for (int j = 0; j < temp2 - i - 1; j++) {
			if (array[j] < array[j + 1]) {
				temp = array[j];
				array[j] = array[j + 1];
				array[j + 1] = temp;	
			}
		}
	}
	
	printf("\nMang duoc xap sep tang dan\n");
	for (int i = 0; i < temp2; i++) {
		printf("%d ", array[i]);
	}
	
	printf("\nenter search: ");
	scanf("%d", &search);
	
	for (int i = 0; i < temp2; i++) {
		if (search == array[i]) {
			count = count + 1;
		}
	}
	printf("\nelement %d appear %d", search, count);
}
