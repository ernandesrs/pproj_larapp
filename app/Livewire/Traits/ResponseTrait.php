<?php

namespace App\Livewire\Traits;

trait ResponseTrait
{
    use AlertTrait;

    /**
     * Speeds up the process of adding register messages(success or fail) and redirecting
     *
     * @param mixed $result if null or false, the response will be failure
     * @param string|null $redirectOnSuccess
     * @param string|null $redirectOnFail
     * @return mixed
     */
    protected function registrationResponse(
        mixed $result,
        ?string $redirectOnSuccess = null,
        ?string $redirectOnFail = null
    ) {
        $this->responseToAction(
            $result,
            __('messages.alert.register_success'),
            __('messages.alert.register_fail'),
            $redirectOnSuccess,
            $redirectOnFail
        );
    }

    /**
     * Speeds up the process of adding edit messages(success or fail) and redirecting
     *
     * @param mixed $result if null or false, the response will be failure
     * @param string|null $redirectOnSuccess
     * @param string|null $redirectOnFail
     * @return mixed
     */
    protected function editingResponse(
        mixed $result,
        ?string $redirectOnSuccess = null,
        ?string $redirectOnFail = null
    ) {
        $this->responseToAction(
            $result,
            __('messages.alert.update_success'),
            __('messages.alert.update_fail'),
            $redirectOnSuccess,
            $redirectOnFail
        );
    }

    /**
     * Speeds up the process of adding edit messages(success or fail) and redirecting
     *
     * @param mixed $result if null or false, the response will be failure
     * @param string|null $redirectOnSuccess
     * @param string|null $redirectOnFail
     * @return mixed
     */
    protected function deletionResponse(
        mixed $result,
        ?string $redirectOnSuccess = null,
        ?string $redirectOnFail = null
    ) {
        $this->responseToAction(
            $result,
            __('messages.alert.delete_success'),
            __('messages.alert.delete_fail'),
            $redirectOnSuccess,
            $redirectOnFail
        );
    }

    /**
     * Speeds up the process of adding messages and redirecting
     *
     * @return void
     */
    private function responseToAction(
        mixed $result,
        string $successMessage,
        string $failMessage,
        ?string $redirectOnSuccess = null,
        ?string $redirectOnFail = null
    ) {

        if ($redirectOnSuccess || $redirectOnFail) {
            $this->alert(
                $result ? $successMessage : $failMessage,
                $result ? 'success' : 'danger',
                true
            );
            return $this->redirect($redirectOnSuccess ?? $redirectOnFail, true);
        }

        $this->alert(
            $result ? $successMessage : $failMessage,
            $result ? 'success' : 'danger',
        );
    }
}