#include <stdio.h>

int main() {
	int n;
	scanf("%d", &n);
	int arr[n];
	for (int i = 0; i < n; i++) {
		printf("\nnhan vao phan tu arr %i: ", i);
		scanf("%d", &arr[i]);
	}
	int max1, max2 = 0;
	for (int i = 0; i < n; i++) {
		if (i == 0) {
			max1 = arr[i];
		} else {
			if (max1 < arr[i]) {
				max2 = max1;
				max1 = arr[i];
			} 
			if (max2 < arr[i] && arr[i] != max1) {
				max2 = arr[i];
			}
		}
	}
	printf("max 1: %d", max1);
	printf("\nmax 2: %d\n" ,max2);
	
	
	//----
	int max = arr[0];
	int iteam=0;
	for(int i=0;i<n;i++){
		if(arr[i]>max){
			iteam =max;
			max =arr[i];
		} else if (iteam < arr[i] && arr[i] != max) {
			iteam = arr[i];
		}
	}
	printf("max : %d min : %d",max , iteam);
	
	
	//min
	for (int i = 0; i < n; i++) {
		if (i == 0) {
			max1 = arr[i];
		} else {
			if (max1 > arr[i]) {
				max2 = max1;
				max1 = arr[i];
			}
			if (max2 > arr[i] && arr[i] != max1) {
				max2 = arr[i];
			}
		}
	}
	printf("\nmin1: %d", max1);
	printf("\nmin2: %d", max2);
}
