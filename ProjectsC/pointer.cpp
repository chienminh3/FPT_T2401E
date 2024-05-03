#include <stdio.h>
#include <malloc.h>

int main() {
	int *ptr, size;
	printf("enter size: ");
	scanf("%d", &size);
	//malloc
//	printf("\nfuntion malloc.\n");
//	ptr = (int *) malloc(size * sizeof(int));
//	for (int i = 0; i < size; i++) {
//		printf("enter values pointer %d: ", i);
//		scanf("%d", ptr + i);
//	}
//	for (int i = 0; i < size; i++) {
//		printf("%d ", *(ptr + i));
//	}
//	printf("\n\n");
	
	//calloc
	printf("funtion calloc.\n");
	ptr = (int *) calloc(size, sizeof(int));
	for (int i = 0; i < size; i++) {
		printf("enter value pointer %d: ", i);
		scanf("%d", ptr+i);
	}
	for (int i = 0; i < size; i++) {
		printf("%d ", *(ptr+i));
	}
	printf("\n\n");
	
	//realloc
	printf("funtion realloc.\n");
	int addSize;
	printf("enter size add: ");
	scanf("%d", &addSize);
	if (addSize > 0) {
		ptr = (int*) realloc(ptr, addSize*sizeof(int));
		for (int i = 0; i < addSize; i++) {
			printf("enter value pointer %d: ", size+i);
			scanf("%d", ptr+(size+i));
		}
	}
	size+=addSize;
	for (int i = 0; i < size; i++) {
		printf("%d ", *(ptr+i));
	}
	printf("\n\n");
	
	//insert sort
	int temp, i;
	for (int j = 1; j < size; j++) {
		i = j - 1;
		temp = *(ptr + j);
		while ((i >= 0)&&(temp < *(ptr + i))) {
			*(ptr+(i+1)) = *(ptr + i);
			i--;
		}
		*(ptr+(i+1)) = temp;
	}
	printf("funtion insert sort.\n");
	printf("array did sort.\n");
	for (int i = 0; i < size; i++) {
		printf("%d ", *(ptr + i));
	}
	printf("\n\n");
	
	//linear searching
//	int search,  count = 0, ranks;
//	printf("enter number you want searching: ");
//	scanf("%d", &search);
//	for (int i = 0; i < size; i++) {
//		if (search == *(ptr+i)) {
//			count+=1;
//			printf("\nelement %d appears at position %d", search, i);
//		}
//	}
//	printf("\nelement %d appears %d", search, count);

	//libnary searching
	int searchValue, high, low, flag;
	printf("enter searching values: ");
	scanf("%d", &searchValue);
	low = 0;
	high = size;
	flag = 0;
	while (low <= high) {
		int mid = low + (high - low) / 2;
		if (searchValue == *(ptr + mid)) {
			flag = 1;
			printf("found at index %d\n", mid);
			break;
		} else if (searchValue < *(ptr + mid)) {
			high = mid - 1;
		} else if (searchValue > *(ptr + mid)) {
			low = mid + 1;
		}
	}
	if (flag == 0) {
		printf("\nelement not found!");
	}
}


